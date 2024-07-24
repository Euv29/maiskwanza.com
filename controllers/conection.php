<?php
// require_once '../vendor/autoload.php';
// require_once '../env.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../env.php';

use Google\Client;
use Google\Service\YouTube;
use Google\Service\Exception;

# Configs
$apiKey = $KEY;

# Initialize Youtube API CLient
$client = new Client();
$client->setDeveloperKey($apiKey);
$service = new YouTube($client);

$playlistId = 'PLyE584xF0zBqOmEbe3DWzitbmbaFakmoW';

$videosApi = $service->playlistItems->listPlaylistItems('snippet', ['playlistId' => $playlistId]);

$videos = array();
foreach ($videosApi['items'] as $video) {
    if ($video['snippet']['title'] != 'Private video') {
        array_push($videos, $video);
    }
}

$videoshome = array();
for ($i = 0; $i < 4; $i++) {
    $videoshome[$i] = $videos[$i];
}

// Ordenar pelo mais antigo
$oldestVideos = array_reverse($videos);



// Estatística dos Vídeos 
$videosStat = array();
$i = 0;
foreach ($videos as $video) {
    $id = $video['snippet']['resourceId']['videoId'];
    $stats = $service->videos->listVideos('statistics', ['id' => $video['snippet']['resourceId']['videoId']]);
    $conteudo = $videosApi['items'][$i]['snippet'];

    if ($stats['items'] != []) {
        $videoStat = [
            "id" => $id,
            "likes" => $stats['items'][0]['statistics']['likeCount'],
            "views" => $stats['items'][0]['statistics']['viewCount'],
            "comments" => $stats['items'][0]['statistics']['commentCount'],
            "conteudo" => $conteudo,
        ];

        array_push($videosStat, $videoStat);
        $i++;
    }
}

usort($videosStat, function($a, $b) {
    return $b['views'] <=> $a['views']; // Ordena em ordem Decrescente
});

function showViews($videoId, $refArray){
    foreach ($refArray as $index => $videoStat) {
        if ($videoId == $videoStat['id']) {
            return $refArray[$index]['views'];
            break;
        }
    }
}
