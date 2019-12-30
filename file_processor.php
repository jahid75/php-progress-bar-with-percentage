<?php
class FileProcessor{

    private $directory;

    private $file_id;

    public function __construct($fileName) {
        $this->directory = __DIR__ . '/process';
        $this->file_id = $fileName;//time();

        if( ! is_dir($this->directory) ) {
            mkdir($this->directory);
        }
    }

    public function getFile() {
        $fileName = $this->directory . '/' . $this->file_id . '.txt';
        return $fileName;
    }

    public function isExists(){
        return file_exists( $this->getFile() );
    }

    public function updateFile( $content ) {
        file_put_contents( $this->getFile(), $content );
        return true;
    }

    public function getText() {
        if( $this->isExists() ) {
            $text = file_get_contents( $this->getFile() );
            return $text;
        }
        return '0';
    }

    public function deleteFile() {
        if( $this->isExists() ) {
            unlink( $this->getFile() );
            return true;
        }
        return false;
    }

}