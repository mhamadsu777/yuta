<?php

require('../vendor/autoload.php');

$url = isset($_GET['url']) ? $_GET['url'] : null;

if (!$url) {
    die("No url provided");
}

$youtube = new \YouTube\YouTubeDownloader();
$links = $youtube->getDownloadLinks($url);

$array['error']= $youtube->getLastError();

header('Content-Type: application/json');
foreach($links as $link){
if(preg_match('/m4a/',$link['format'])){
$array['audio'] = $link['url'];
}
if($link['format'] == "mp4, video, 360p, audio"){
$array['video'];
}
}
if(!$array['video']){
$array['video'] = $links[0]['url'];
}
if(!$array['audio']){
$array['audio'] = $links[0]['url'];
}
echo json_encode($array,128|64|256);