<?php
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
$videosId = array();
$videosViews = array();
$videosLikes = array();
$videosComments = array();

foreach ($videos as $video) {
    $id = $video['snippet']['resourceId']['videoId'];
    $stats = $service->videos->listVideos('statistics', ['id' => $video['snippet']['resourceId']['videoId']]);

    if ($stats['items'] != []) {
        array_push($videosLikes, $stats['items'][0]['statistics']['likeCount']);
        array_push($videosComments, $stats['items'][0]['statistics']['viewCount']);
        array_push($videosViews, $stats['items'][0]['statistics']['commentCount']);
        array_push($videosId, $id);
    }
}
