# Sistem Perpustakaan OOP - Pemrograman Web (PWF) Pertemuan 3

Proyek ini mengimplementasikan konsep **Object-Oriented Programming (OOP)** pada bahasa pemrograman **PHP**, yang mencakup **Class & Object**, **Encapsulation**, **Inheritance**, dan **Polymorphism**.

## Berkas dalam Repositori
- `Book.php` : Kelas induk (*parent class*) untuk buku fisik
- `Member.php` : Kelas untuk anggota peminjam buku
- `DigitalBook.php` : Kelas turunan (*child class*) dari `Book` yang menerapkan *inheritance*
- `index.php` : Skrip simulasi peminjaman buku fisik dan digital
- `README.md` : Dokumentasi repositori
- `.gitignore` : Berkas pengecualian Git

## Konsep OOP yang Diterapkan
1. **Encapsulation**: Properti pada class dilindungi menggunakan `protected` dan `private`.
2. **Inheritance**: `DigitalBook` mewarisi properti dan method dari `Book` (`class DigitalBook extends Book`).

## Cara Menjalankan
```bash
php index.php
```

## Riwayat 3 Commit
1. `Initial library OOP project`
2. `Add Book and Member classes`
3. `Add DigitalBook inheritance`
