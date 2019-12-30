<?php
/**
 * Start the file File processing with this class.
 * 
 * @package FileProcessor
 * @author  Niamul <email@niamul.me>
 * @version 1.0
 */
class FileProcessor{

    /**
     * @var string $directory   Directory name where the status should be saved.
     */
    private $directory;

    /**
     * @var string $file_id     File name for the status to store.
     */
    private $file_id;

    /**
     * Construct FileProcessor
     */
    public function __construct($fileName) {
        $this->directory = __DIR__ . '/process';
        $this->file_id = $fileName;//time();

        if( ! is_dir($this->directory) ) {
            mkdir($this->directory);
        }
    }

    /**
     * Get the full File path.
     * 
     * @return string
     */
    public function getFile() {
        $fileName = $this->directory . '/' . $this->file_id . '.txt';
        return $fileName;
    }

    /**
     * Check whether the file is exists or not.
     * 
     * @return boolean
     */
    public function isExists(){
        return file_exists( $this->getFile() );
    }

    /**
     * Update the file with current status.
     * 
     * @param string $content   Content to store inside the file.
     * 
     * @return boolean
     */
    public function updateFile( $content ) {
        file_put_contents( $this->getFile(), $content );
        return true;
    }

    /**
     * Get the status from the updated file.
     * 
     * @return string
     */
    public function getText() {
        if( $this->isExists() ) {
            $text = file_get_contents( $this->getFile() );
            return $text;
        }
        return '0';
    }

    /**
     * Delete the file.
     * 
     * @return boolean
     */
    public function deleteFile() {
        if( $this->isExists() ) {
            unlink( $this->getFile() );
            return true;
        }
        return false;
    }

}