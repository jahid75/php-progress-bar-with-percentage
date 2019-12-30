<?php
// Setting the headers
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// adding the file.
require_once __DIR__ . '/file_processor.php';

//File name is required
$fileName = isset( $_GET['filename'] ) ? $_GET['filename'] : time();

// Initiate the File Processor
$process = new FileProcessor($fileName);

// Getting the status text from the file.
$status = $process->getText();

// Print the status
echo "data: {$status}\n\n";

// Once end, delete the file.
if( '100' == $status ) {
    $process->deleteFile();
}