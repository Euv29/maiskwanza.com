

document.getElementById('list-view').addEventListener('click', function() {
    document.getElementById('view-wrap').classList.add('list-view');
    document.getElementById('view-wrap').classList.remove('grid-view');
    document.getElementById('list-view').classList.add('ative');
    document.getElementById('grid-view').classList.remove('ative');
});

document.getElementById('grid-view').addEventListener('click', function() {
    document.getElementById('view-wrap').classList.add('grid-view');
    document.getElementById('view-wrap').classList.remove('list-view');
    document.getElementById('list-view').classList.remove('ative');
    document.getElementById('grid-view').classList.add('ative');
});