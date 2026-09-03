<?php 

require_once 'Book.php';

class DigitalBook extends Book 
{
    private int $fileSize;

    public function __construct(string $title, string $author, int $fileSize) {
        parent::__construct($title, $author, 100);
        $this->fileSize = $fileSize;
    }

    public function getInfo() : string {
        return parent::getInfo() . " (Digital " . $this->fileSize . "MB)";
    }

    public function decreaseStock(int $qty) : bool {
        return 1;
    }
}
