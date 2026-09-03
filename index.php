<?php 

require_once 'Book.php';
require_once 'Member.php';

$book1 = new Book("Komik Marvel", "Marvel Comics", 3); // berapa buku yang dipinjam
echo $book1->getInfo() . "\n";

$member1 = new Member("Lookman");
echo $member1->getInfo() . "\n";
$member1->borrow($book1);

echo "\n-------------------\n\n";

$book2 = new Book("Matematika", "Guru Matematika", 1); // berapa buku yang dipinjam
echo $book2->getInfo() . "\n";

$member2 = new Member("Windah");
echo $member2->getInfo() . "\n";
$member2->borrow($book2);

// Tugas Pertemuan 2 & 3
?>
