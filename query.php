<?php

require_once __DIR__ . '/file_processor.php';
//File name is required
$fileName = isset( $_GET['filename'] ) ? $_GET['filename'] : time();
$process = new FileProcessor($fileName);

for($x = 0; $x <= 100; $x++) {
    $process->updateFile($x);
    sleep(1);
}