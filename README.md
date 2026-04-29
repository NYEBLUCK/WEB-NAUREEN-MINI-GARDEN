<img width="3780" height="1890" alt="Salinan dari Naureen Mini Garden - PBW (Banner Horizontal)" src="https://github.com/user-attachments/assets/b17f4922-b0c3-4792-834f-f4e72975f31f" />

---

# Website Informasi Wisata Naureen Mini Garden ── ⟡ ˙🌱 ̟

Website Naureen Mini Garden merupakan sistem informasi berbasis web yang digunakan sebagai media informasi dan promosi destinasi wisata edukasi dan rekreasi keluarga di Kota Samarinda, Kalimantan Timur. Website ini menyediakan berbagai informasi penting seperti fasilitas wisata, kegiatan edukasi, harga tiket, lokasi, serta ulasan pengunjung, sehingga pengunjung bisa mendapatkan informasi dengan lebih lengkap dan terstruktur.

Selain itu, website ini juga dilengkapi dengan sistem administrasi untuk mengelola data berita dan komentar pengunjung secara digital. Pengelola jadi lebih mudah dalam memperbarui informasi yang ditampilkan.

---
## ↳ Latar Belakang

Naureen Mini Garden belum memiliki website resmi sebagai media informasi digital. Selama ini promosi hanya dilakukan melalui media sosial seperti Instagram dan TikTok, sehingga informasi belum tersampaikan secara terstruktur kepada masyarakat.

---

## ↳ Tujuan Website 

Tujuan dari pembuatan aplikasi ini adalah:

- Menyediakan media informasi digital yang lengkap mengenai Naureen Mini Garden
- Mempermudah pengunjung dalam memperoleh informasi wisata
- Membantu pengelola dalam mengelola data kegiatan dan komentar secara digital
- Mendukung promosi wisata secara online
- Membuat pengelolaan informasi menjadi lebih praktis

--- 

## ↳ Fitur Website
Website Naureen Mini Garden memiliki dua jenis pengguna utama, yaitu pengunjung dan administrator, dengan fitur sebagai berikut:

### Fitur Pengunjung 
- **Halaman Beranda:** Menampilkan informasi umum seperti fasilitas, kegiatan terbaru, jam operasional, harga tiket, dan lokasi wisata
- **Informasi Fasilitas Wisata:** Menampilkan berbagai fasilitas seperti spot foto, terapi ikan, gazebo, pemancingan, dan fasilitas lainnya
- **Informasi Kegiatan & Paket Edukasi:** Menyajikan kegiatan edukasi serta pilihan paket yang tersedia
- **Berita Terbaru:** Menampilkan informasi kegiatan atau event terbaru di Naureen Mini Garden
- **Ulasan Pengunjung:** Pengunjung dapat melihat dan memberikan ulasan berupa nama, email, rating, dan komentar
- **Informasi Lokasi:** Menampilkan alamat lengkap serta peta lokasi wisata

### Fitur Administrator
- **Login Admin:** Digunakan untuk masuk ke dalam sistem menggunakan username dan password
- **Dashboard Admin:** Halaman utama setelah login untuk mengakses menu pengelolaan data
- **Kelola Berita:** Menampilkan dan mengelola daftar berita yang tersedia
- **Tambah Berita:** Menambahkan data kegiatan atau artikel baru ke dalam sistem
- **Edit & Hapus Berita:** Mengubah atau menghapus data berita yang sudah ada
- **Kelola Komentar/Ulasan:** Menampilkan dan menghapus komentar dari pengunjung
- **Manajemen Konten:** Mengatur seluruh data yang ditampilkan pada website

---
## Teknologi yang Digunakan
- PHP Native (MVC)
- MySQL Database
- HTML, CSS, JavaScript
- Bootstrap 5
- Vue JS

---

## ↳ Sruktur Folder
Pada pengembangan website Naureen Mini Garden, sistem dibangun menggunakan konsep MVC (Model View Controller). Arsitektur MVC digunakan untuk memisahkan antara bagian pengolahan data, tampilan antarmuka, dan logika program sehingga sistem menjadi lebih terstruktur dan mudah dikembangkan.

```bash
naureen-mini-garden/
│
├── app/
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── BeritaController.php
│   │   └── ReviewController.php
│   │
│   └── models/
│       ├── BeritaModel.php
│       ├── ReviewModel.php
│       └── UserModel.php
│
├── assets/
│   ├── css/
│   │   └── [Kumpulan file .css]
│   │
│   ├── images/
│   │   └── [Kumpulan file gambar statis]
│   │
│   └── uploads/
│       └── [Kumpulan file gambar berita yang diunggah]
│
├── config/
│   └── koneksi.php
│
├── Views/
│   ├── beranda.php
│   ├── berita.php
│   ├── detail.php
│   ├── login.php
│   ├── tentang.php
│   │
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── edit_berita.php
│   │   ├── kelola_berita.php
│   │   ├── kelola_review.php
│   │   └── tambah_berita.php
│   │
│   └── templates/
│       ├── footer_public.php
│       ├── navbar_admin.php
│       ├── navbar_public.php
│       └── sidebar_admin.php
│
├── .htaccess
└── index.php
```

---

## ↳ Perancangan Database

Database pada website Naureen Mini Garden menggunakan MySQL sebagai sistem pengelolaan data yang berfungsi untuk menyimpan dan mengelola seluruh informasi yang ditampilkan pada website.

Database ini terdiri dari tiga tabel utama, yaitu **users**, **berita**, dan **reviews**.

- Tabel **users** digunakan untuk menyimpan data akun admin yang berfungsi untuk proses login dan pengamanan akses ke sistem.
- Tabel **berita** digunakan untuk menyimpan data kegiatan atau informasi yang ditampilkan pada website serta mendukung fitur tambah, edit, dan hapus data.
- Tabel **reviews** digunakan untuk menyimpan ulasan atau komentar dari pengunjung, yang akan ditampilkan pada website setelah disetujui oleh admin.

Adapun struktur masing-masing tabel adalah sebagai berikut:

| Tabel   | Field Utama |
|---------|------------|
| users   | id, username, password, nama_lengkap, created_at |
| berita  | id, judul, tanggal_kegiatan, deskripsi, gambar, tanggal_posting, updated_at |
| reviews | id, nama, email, rating, ulasan, status, created_at |

---

## ↳ Tampilan Website

### Halaman Pengunjung
| Beranda | Tentang | Detail Wisata | Berita |
|--------|--------------|---------|--------|
| <img width="200" height="500" alt="screencapture-naureen-mini-garden-test-views-beranda-php-2026-04-28-00_14_13" src="https://github.com/user-attachments/assets/759eb1e6-120c-484c-a8e6-8e976dd3e01a" /> |<img width="200" height="300" alt="image" src="https://github.com/user-attachments/assets/560092bd-7f85-41c3-8a7c-79eff633152f" /> |<img width="200" height="1100" alt="screencapture-naureen-mini-garden-great-site-net-views-detail-php-2026-04-29-19_35_07 (1)" src="https://github.com/user-attachments/assets/255245c4-2d6d-4475-84f8-6c28d9c33272" />| <img width="192" height="367" alt="screencapture-naureen-mini-garden-test-views-berita-php-2026-04-28-00_15_22" src="https://github.com/user-attachments/assets/0d2024e0-2d24-493b-9ca2-29cc51f42ba3" /> |
---

### Halaman Admin

| Login | Dashboard |
|-------|----------|
| <img width="500" height="275" alt="image" src="https://github.com/user-attachments/assets/1da03e3e-d896-4939-aa92-636a863cf564" /> | <img width="500" height="275" alt="image" src="https://github.com/user-attachments/assets/1334f5dc-a3eb-4960-a1a8-2d14db763513" /> |

| Kelola Berita | CRUD Berita |
|---------------|-----------------|
| <img width="500" height="275" alt="image" src="https://github.com/user-attachments/assets/d927673d-5c67-4d6c-bdc3-c0914d142551" /> | <img width="500" height="275" alt="image" src="https://github.com/user-attachments/assets/817f0bec-008b-44cd-8ad5-c02c3c52b248" />|

| Kelola Komentar |
|---------------|
|<img width="500" height="275" alt="image" src="https://github.com/user-attachments/assets/418250dc-4b0f-4411-8f9a-217a969fd591" />|

---

## ↳ Kesimpulan

Website Naureen Mini Garden merupakan sistem informasi berbasis web yang dirancang untuk memberikan informasi mengenai fasilitas, kegiatan, dan layanan wisata kepada pengunjung secara mudah dan terstruktur. Sistem ini juga membantu admin dalam mengelola data berita dan ulasan pengunjung melalui dashboard yang tersedia. Dengan menggunakan konsep Model View Controller (MVC), website ini memiliki struktur yang lebih terorganisir, mudah dikembangkan, serta mendukung proses digitalisasi pengelolaan informasi wisata secara efektif dan efisien.

---

## ↳ Anggota Kelompok 1

1. Dwi Pebriyanto Pradana [2409116012]
2. Rahmad Ramadhan [2409116018]
3. Zahra Aulia Rahmah [2409116020]
4. Dilla Maharani [2409116023]
