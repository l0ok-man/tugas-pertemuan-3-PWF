<?php 

require_once 'Book.php';

class Member
{
    private string $name;
    
    public function __construct(string $name) {
        $this->name = $name;   
    }

    public function getInfo() : string {
        return $this->name;
    }

    public function borrow(Book $book) : void {
        if ($book->decreaseStock(1)) {
            echo "Berhasil meminjam buku [" . $book->getInfo() . "]\n";
        } else {
            echo "Gagal meminjam buku [" . $book->getInfo() . "] (stock tidak tersedia atau sisa 1 buat jaga jaga ketika restock :) )\n";
        }
    }
}
