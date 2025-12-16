# 🛡️ SQL Injection Simulation & Mitigation (Laravel)

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-000000?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap)

> **Project Tugas Akhir (UAS) - Keamanan Sistem Informasi** > Universitas Negeri Semarang (UNNES)

Repositori ini berisi simulasi serangan **SQL Injection (SQLi)** dan implementasi pertahanan menggunakan **Prepared Statements (PDO)** pada Framework Laravel. Project ini mendemonstrasikan perbandingan langsung antara kode yang rentan (*Vulnerable*) dan kode yang aman (*Secure*).

---

## 📋 Daftar Isi
- [Fitur & Skenario](#-fitur--skenario)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Instalasi & Menjalankan Project](#-instalasi--menjalankan-project)
- [Dokumentasi Serangan (POC)](#-dokumentasi-serangan-poc)
- [Analisis Keamanan](#-analisis-keamanan)
- [Referensi](#-referensi)

---

## 🎯 Fitur & Skenario

Aplikasi ini memiliki dua rute utama yang mensimulasikan kondisi nyata:

| Rute | Status | Deskripsi |
| :--- | :--- | :--- |
| **`/vuln`** | 🔴 **Vulnerable** | Menggunakan *Raw SQL Query* dengan penggabungan string (*concatenation*). Rentan terhadap serangan *Boolean-based* dan *Union-based*. |
| **`/secure`** | 🟢 **Secure** | Menggunakan **Laravel Eloquent ORM**. Aman dari serangan karena menerapkan *Prepared Statements* (Binding Parameter). |

---

## 🛠 Teknologi yang Digunakan

* **Backend:** Laravel Framework 10.x
* **Language:** PHP 8.2
* **Database:** MySQL / MariaDB
* **Frontend:** Blade Template + Bootstrap 5 (CDN)
* **Tools Pengujian:** Browser Manual Input & DVWA (sebagai pembanding di lingkungan Lab)

---

## 🚀 Instalasi & Menjalankan Project

Ikuti langkah ini untuk menjalankan simulasi di komputer lokal Anda:

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/username-anda/uas-sqli-laravel.git](https://github.com/username-anda/uas-sqli-laravel.git)
    cd uas-sqli-laravel
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Konfigurasi Environment**
    Salin file `.env.example` menjadi `.env` dan atur database:
    ```bash
    cp .env.example .env
    ```
    *Buka file .env dan sesuaikan:*
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=uas_sqli
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Key & Migrasi Database**
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

5.  **Seeding Data Dummy**
    Masukkan data user (admin, dosen, mahasiswa) ke database:
    ```bash
    php artisan db:seed --class=CustomUserSeeder
    ```

6.  **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Akses di browser: `http://127.0.0.1:8000`

---

## 📸 Dokumentasi Serangan (Proof of Concept)

Berikut adalah hasil simulasi serangan menggunakan payload SQL Injection.

### 1. Skenario Serangan (Vulnerable)
**Target URL:** `http://127.0.0.1:8000/vuln`  
**Payload:**
```sql
' OR '1'='1' #
