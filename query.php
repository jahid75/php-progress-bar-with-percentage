<?php
// adding the file.
require_once __DIR__ . '/file_processor.php';

//File name is required
$fileName = isset( $_GET['filename'] ) ? $_GET['filename'] : time();

// Initiate the File Processor
$process = new FileProcessor($fileName);

for($x = 0; $x <= 100; $x++) {

    // Update file the with the current status
    $process->updateFile($x);
    
    // To make this loop long
    sleep(1);
}