# Velotto Auto Rent

Velotto Auto Rent adalah sebuah website penyewaan mobil yang dikembangkan menggunakan PHP dan MySQL. Website ini dibangun dengan sistem CRUD (Create, Read, Update, Delete) untuk memudahkan pengelolaan data kendaraan, pelanggan, dan transaksi penyewaan. Proyek ini dibuat sebagai sarana pembelajaran dalam pengembangan aplikasi web sederhana dengan antarmuka yang responsif dan interaktif.

## 🚗 Fitur Utama

- Sistem login administrator
- CRUD data mobil
- CRUD data pelanggan
- Manajemen transaksi penyewaan
- Tampilan dashboard penyewaan
- Desain antarmuka responsif
- Validasi input dan interaksi menggunakan JavaScript

## 🛠️ Teknologi yang Digunakan

- **PHP** – Backend dan logika server
- **MySQL** – Database sistem
- **XAMPP** – Local server environment
- **Bootstrap** – Desain UI responsif
- **JavaScript** – Interaktivitas di sisi klien
- **HTML & CSS** – Struktur dan gaya tampilan

## 📦 Instalasi

1. Clone repository ini:
   ```
   git clone https://github.com/BayuPrataPutra/Velotto.git
   ```
   
2. Install dependency:
   ```
   composer install
   npm install
   ```

3. Setup environment:
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Konfigurasi database di file `.env`, lalu jalankan:
   ```
   php artisan migrate
   ```
   
5. Jalankan aplikasi:
   ```
   php artisan serve
   ```
