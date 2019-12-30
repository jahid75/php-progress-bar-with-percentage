<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// $today = date('H:i:s');
// echo "data: Time Now {$today}\n\n";

require_once __DIR__ . '/file_processor.php';
//File name is required
$fileName = isset( $_GET['filename'] ) ? $_GET['filename'] : time();
$process = new FileProcessor($fileName);

$status = $process->getText();
echo "data: {$status}\n\n";
if( '100' == $status ) {
    $process->deleteFile();
}