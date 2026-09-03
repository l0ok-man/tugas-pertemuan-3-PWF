# Sistem Perpustakaan Berbasis Object-Oriented Programming (OOP)

Repositori ini berisi implementasi sistem perpustakaan sederhana menggunakan konsep **Object-Oriented Programming (OOP)** pada bahasa pemrograman **PHP**, yang dikembangkan untuk memenuhi tugas mata kuliah **Pemrograman Web (PWF) - Pertemuan 3**.

## Rencana Fitur Utama
1. **Manajemen Buku Fisik (`Book`)**: Pengelolaan data buku, stok fisik, validasi ketersediaan, serta mekanisme peminjaman dan pengembalian.
2. **Manajemen Anggota (`Member`)**: Pengelolaan identitas peminjam dan pencatatan riwayat buku yang sedang dipinjam.
3. **Pewarisan Buku Digital (`DigitalBook`)**: Penerapan konsep *Inheritance* untuk buku elektronik (e-book) dengan atribut ukuran berkas dan tautan unduhan.

## Struktur Berkas
- `.gitignore` : Berkas pengecualian Git
- `README.md` : Dokumentasi proyek
- `Book.php` : Kelas induk untuk buku fisik
- `Member.php` : Kelas untuk anggota peminjam
- `DigitalBook.php` : Kelas turunan dari Book untuk buku digital
- `index.php` : Titik masuk utama (entry point) dan demonstrasi sistem

## Petunjuk Menjalankan
Pastikan PHP CLI (versi 8.0 atau lebih baru) telah terpasang pada komputer Anda:
```bash
php index.php
```
