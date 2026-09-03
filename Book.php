<?php 

class Book 
{
    protected string $title;
    protected string $author;
    protected int  $stock;

    public function __construct(string $title, string $author, int $stock){
        $this->title = $title;
        $this->author = $author;
        $this->stock = $stock;  
    }

    public function getInfo() : string {
        return $this->title . " - " . $this->author;
    }

    public function decreaseStock(int $qty) : bool{
        if ($this->stock > 1 && $this->stock >= $qty) {
            $this->stock -= $qty;
            return 1;
        }
        return 0;
    }
}
