# 🚗 Vrom — Platform Penyewaan Kendaraan

> Platform web modern untuk penyewaan kendaraan premium dengan sistem pembayaran terintegrasi Midtrans.

![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9?style=for-the-badge&logo=livewire&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

---
 
## 📸 Preview
 
![Homepage](https://github.com/user-attachments/assets/d295e122-57be-43cc-a790-6c23f96e13a3)
 
---

![Dashboard](https://github.com/user-attachments/assets/fc9b8e32-1187-473b-a37b-a332ed0b77e6)

---

## 📋 Daftar Isi

- [Tentang Project](#-tentang-project)
- [Fitur](#-fitur)
- [Tech Stack](#️-tech-stack)
- [Struktur Folder](#-struktur-folder)
- [Database](#-database)
- [Instalasi & Setup](#-instalasi--setup)
- [Environment Variables](#-environment-variables)
- [Cara Penggunaan](#-cara-penggunaan)
- [Role & Akses](#-role--akses)
- [Pembayaran (Midtrans)](#-pembayaran-midtrans)

---

## 🎯 Tentang Project

**Vrom** adalah aplikasi web platform penyewaan kendaraan premium yang dibangun di atas ekosistem Laravel. Pengguna dapat melihat katalog kendaraan, melakukan pemesanan berdasarkan tanggal, dan menyelesaikan pembayaran secara online melalui berbagai metode bank transfer yang didukung Midtrans.

---

## ✨ Fitur

### 👤 Pengguna (Customer)
- **Landing Page** — Tampilan hero animatif dengan katalog kendaraan populer
- **Katalog & Detail Kendaraan** — Melihat daftar kendaraan beserta gambar, harga, rating, dan fitur
- **Pemesanan (Checkout)** — Form pemesanan dengan kalender interaktif; tanggal yang sudah dipesan oleh pengguna lain otomatis diblokir sehingga tidak bisa dipilih (tidak bisa tumpang tindih/nabrak dengan booking yang sudah ada)
- **Pembayaran Online** — Integrasi Midtrans Snap dengan pilihan transfer bank (BCA, BNI, BRI, Mandiri, Permata, dan lainnya)
- **Riwayat Pemesanan** — Halaman profil menampilkan seluruh histori penyewaan beserta statusnya
- **Autentikasi Lengkap** — Register, login, verifikasi email, lupa password, Two-Factor Authentication (2FA)
- **Manajemen Profil** — Update data diri, foto profil, dan ganti password

### 📅 Validasi Tanggal Booking (Mencegah Booking Ganda)

Sistem memastikan satu kendaraan tidak bisa dipesan dua kali di tanggal yang sama. Cara kerjanya:

1. Saat halaman checkout dibuka, backend mengambil semua booking aktif untuk kendaraan tersebut yang `end_date`-nya belum lewat
2. Setiap booking aktif di-expand menjadi daftar tanggal harian (dari `start_date` sampai `end_date`)
3. Daftar tanggal tersebut dikirim ke frontend sebagai array `bookedDates`
4. Kalender di halaman checkout menonaktifkan (disable) semua tanggal yang ada di array tersebut, sehingga pengguna tidak bisa memilih tanggal yang sudah terisi
5. Booking dengan `payment_type` null (belum bayar/dibatalkan) **tidak ikut diblokir**, jadi hanya transaksi yang sudah masuk proses pembayaran yang mengunci tanggal


- **Dashboard Admin** — Panel khusus admin dengan middleware proteksi role
- **Manajemen Brand** — CRUD merek kendaraan (dengan auto-slug)
- **Manajemen Tipe** — CRUD kategori/tipe kendaraan (dengan auto-slug)
- **Manajemen Kendaraan (Item)** — CRUD data kendaraan beserta upload multiple foto
- **Manajemen Booking** — Melihat dan mengelola data pemesanan

---

## 🛠️ Tech Stack

### Backend
| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| PHP | ^8.3 | Bahasa pemrograman utama |
| Laravel | ^13.0 | Framework utama |
| Laravel Jetstream | ^5.5 | Scaffolding autentikasi & profil |
| Laravel Sanctum | ^4.0 | API token authentication |
| Livewire | ^3.6 | Reactive UI components |
| Midtrans PHP SDK | ^2.6 | Payment gateway |
| Spatie Sluggable | ^3.8 | Auto-generate URL slug |

### Frontend
| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| Tailwind CSS | ^3.4 | Utility-first CSS framework |
| Alpine.js | ^3.15 | Lightweight JS framework |
| AOS | ^2.3 | Animate on Scroll library |
| Swiper | ^12.1 | Touch slider/carousel |
| Vite | ^8.0 | Asset bundler |

### Database & Infrastruktur
- **MySQL** — Database utama
- **Queue System** — Laravel Queue (database driver) untuk job async
- **Session** — Database-based session management

---

## 📁 Struktur Folder

```
Vrom/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/          # Controller panel admin
│   │       │   ├── BrandController.php
│   │       │   ├── BookingController.php
│   │       │   ├── DashboardController.php
│   │       │   ├── ItemController.php
│   │       │   └── TypeController.php
│   │       └── Front/          # Controller halaman publik
│   │           ├── CheckoutController.php
│   │           ├── DetailController.php
│   │           ├── LandingController.php
│   │           ├── PaymentController.php
│   │           └── ProfilController.php
│   ├── Models/
│   │   ├── Booking.php
│   │   ├── Brand.php
│   │   ├── Image.php
│   │   ├── Item.php
│   │   ├── Type.php
│   │   └── User.php
│   └── Providers/
├── config/
│   ├── midtrans.php            # Konfigurasi Midtrans
│   └── ...
├── database/
│   ├── migrations/             # Skema database
│   └── seeders/
│       └── ItemSeeder.php
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/              # View panel admin
│       │   ├── booking/
│       │   ├── brand/
│       │   ├── item/
│       │   └── type/
│       ├── auth/               # View autentikasi
│       ├── components/         # Blade components (navbar, modal, dll)
│       ├── front/              # View halaman publik
│       │   ├── landing.blade.php
│       │   ├── detail.blade.php
│       │   ├── checkout.blade.php
│       │   ├── payment.blade.php
│       │   ├── profil.blade.php
│       │   └── success.blade.php
│       ├── layouts/
│       └── profile/
├── routes/
│   ├── web.php                 # Routing utama
│   └── api.php
├── public/
│   ├── img/                    # Aset gambar statis
│   └── svgs/                   # Aset ikon SVG
├── .env.example
├── composer.json
├── package.json
├── tailwind.config.js
└── vite.config.js
```

---

## 🗄️ Database

Skema database Vrom terdiri dari tabel-tabel berikut:

```
users
├── id, name, email, password
├── phone, role (default: 'user')
├── profile_photo_path
├── two_factor_secret, two_factor_recovery_codes
└── email_verified_at, timestamps

brands
└── id, name, slug, timestamps

types
└── id, name, slug, timestamps

items
├── id, name, slug
├── brand_id (FK → brands)
├── type_id  (FK → types)
├── features, price, star, review
└── timestamps

images
├── id, path
├── item_id (FK → items)
└── timestamps

bookings
├── id, snap_token, order_id
├── name, start_date, end_date, total_day
├── address, city, zip
├── payment_type, payment_status, bank
├── total_price
├── item_id (FK → items)
├── user_id (FK → users)
└── timestamps
```

---

## 🚀 Instalasi & Setup

### Prasyarat
Pastikan environment kamu sudah memiliki:
- **PHP** >= 8.3
- **Composer** >= 2.x
- **Node.js** >= 18.x & npm
- **MySQL** >= 8.x

### Langkah Instalasi

**1. Clone repository**
```bash
git clone https://github.com/mrzcyber/Vrom.git
cd Vrom
```

**2. Install dependencies PHP**
```bash
composer install
```

**3. Salin file environment**
```bash
cp .env.example .env
```

**4. Generate application key**
```bash
php artisan key:generate
```

**5. Konfigurasi database & environment**

Edit file `.env` sesuai konfigurasi lokal kamu (lihat bagian [Environment Variables](#-environment-variables)).

**6. Jalankan migrasi database**
```bash
php artisan migrate
```

**7. (Opsional) Jalankan seeder**
```bash
php artisan db:seed --class=ItemSeeder
```

**8. Buat symlink storage**
```bash
php artisan storage:link
```

**9. Install dependencies frontend & build aset**
```bash
npm install
npm run build
```

**10. Jalankan server development**
```bash
composer run dev
```

> Perintah `composer run dev` akan menjalankan Laravel server, queue listener, log viewer, dan Vite secara bersamaan menggunakan `concurrently`.

Atau jalankan secara terpisah:
```bash
php artisan serve
npm run dev
php artisan queue:listen
```

Akses aplikasi di: `http://localhost:8000`

---

## 🔑 Environment Variables

Salin `.env.example` ke `.env` dan isi nilai berikut:

```env
# Aplikasi
APP_NAME=Vrom
APP_ENV=local
APP_KEY=                        # Di-generate otomatis via artisan key:generate
APP_DEBUG=true
APP_URL=http://localhost

# Database (MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vrom
DB_USERNAME=root
DB_PASSWORD=

# Midtrans Payment Gateway
MIDTRANS_SERVER_KEY=            # Isi dengan Server Key dari dashboard Midtrans
MIDTRANS_CLIENT_KEY=            # Isi dengan Client Key dari dashboard Midtrans
MIDTRANS_IS_PRODUCTION=false    # Ubah ke true untuk environment production

# Email (untuk verifikasi & notifikasi)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS="noreply@vrom.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Cara mendapatkan Midtrans Key:
1. Daftar/login di [dashboard.midtrans.com](https://dashboard.midtrans.com)
2. Pilih environment **Sandbox** (untuk development) atau **Production**
3. Pergi ke **Settings → Access Keys**
4. Salin **Server Key** dan **Client Key**

---

## 📖 Cara Penggunaan

### Alur Customer
1. Buka halaman utama → lihat katalog kendaraan populer
2. Klik kendaraan → lihat detail, foto, harga, dan fitur
3. Klik **"Rent Now"** → isi form checkout (nama, alamat, tanggal sewa)
4. Sistem otomatis menghitung total harga (harga/hari × jumlah hari × 1.1 pajak)
5. Redirect ke halaman pembayaran → klik tombol bayar via Midtrans Snap
6. Pilih metode transfer bank (BCA, BNI, BRI, Mandiri, Permata, dll)
7. Setelah pembayaran berhasil → halaman sukses tampil
8. Cek riwayat pemesanan di halaman **Profil**

### Alur Admin
1. Login dengan akun berole `admin`
2. Akses `/admin/dashboard`
3. Kelola data Brand, Type, dan Item (kendaraan) melalui route resource
4. Monitor dan kelola data Booking

---

## 🔐 Role & Akses

| Role | Akses |
|------|-------|
| `user` | Landing, Detail, Checkout, Payment, Profil |
| `admin` | Semua akses user + seluruh panel `/admin/*` |

Role diatur melalui kolom `role` pada tabel `users` (default: `'user'`).

Middleware `admin` memproteksi seluruh route di bawah prefix `/admin`.

---

## 💳 Pembayaran (Midtrans)

Vrom menggunakan **Midtrans Snap** sebagai payment gateway. Alur pembayaran:

1. Saat checkout berhasil, sistem membuat record Booking dan memanggil `Snap::getSnapToken()`
2. Order ID di-generate dengan format: `VR-00001` (prefix VR + ID booking 5 digit)
3. Pengguna diarahkan ke halaman payment yang menampilkan Snap popup
4. Midtrans mengirim callback ke endpoint `/payment/callback` setelah transaksi selesai
5. Status booking diupdate menjadi `success`, `pending`, atau `failed`

**Metode pembayaran yang diaktifkan:**
- BCA Virtual Account
- BNI Virtual Account
- BRI Virtual Account
- Mandiri Bill Payment
- Permata Virtual Account
- Other VA


---

## 🧪 Testing

Project ini menggunakan **Pest PHP** sebagai testing framework.

```bash
# Jalankan semua test
composer run test

# Atau langsung dengan artisan
php artisan test
```

---

---

<div align="center">
  <p>Dibuat dengan ❤️ menggunakan Laravel</p>
</div>
