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
Database ini menggunakan sistem Relational Database Management System berbasis MySQL, dengan nama database yang digunakan adalah db_nmg.
Secara konseptual, database ini dirancang untuk mendukung sebuah Content Management System sederhana dengan tiga entitas utama yang berdiri sendiri:
- Entitas Admin (users): Bertugas mengelola hak akses ke dashboard (halaman belakang/ back-end).
- Entitas Konten (berita): Bertugas menyimpan data publikasi wisata, kegiatan, dan produk.
- Entitas Interaksi (reviews): Bertugas menampung umpan balik pengunjung dengan sistem moderasi.

---

## ↳ Struktur Tabel Database
Database db_nmg terdiri dari beberapa tabel utama yang digunakan untuk mendukung jalannya sistem website, yaitu:

1. Tabel users

    Tabel users digunakan untuk menyimpan data akun admin yang memiliki hak akses untuk mengelola website. Data pada tabel ini digunakan saat proses login ke dalam sistem. Tabel ini berfungsi untuk memastikan bahwa hanya pengguna yang memiliki akun admin yang dapat mengakses panel administrasi. Fungsi Tabel user:
      - Menyimpan data akun admin
      - Digunakan untuk proses login
      - Mengamankan akses sistem
      - Struktur Field Tabel Admin

2. Tabel Berita

    Tabel berita digunakan untuk menyimpan data kegiatan atau informasi yang akan ditampilkan pada website. Data pada tabel ini akan muncul pada halaman berita atau kegiatan terbaru. Tabel ini memungkinkan admin untuk menambahkan, mengedit, dan menghapus informasi kegiatan secara digital melalui panel administrasi. Fungsi Tabel Berita:
      - Menyimpan data kegiatan
      - Menampilkan informasi berita pada website
      - Mendukung fitur tambah, edit, dan hapus berita
    
3. Tabel reviews

    Tabel reviews digunakan untuk menyimpan data ulasan atau komentar yang diberikan oleh pengunjung pada website. Data pada tabel ini akan ditampilkan pada halaman ulasan setelah disetujui oleh admin. Tabel ini mendukung interaksi antara pengunjung dan pengelola website melalui fitur ulasan. Fungsi Tabel reviews:
      - Menyimpan ulasan pengunjung
      - Menampilkan komentar pada website
      - Mendukung fitur persetujuan (ACC) komentar

--- 

## ↳ Tampilan Website 

## Pengujung

### Melihat Halaman Beranda

<img width="1896" height="891" alt="image" src="https://github.com/user-attachments/assets/5b30a9f0-deb9-4990-9f49-c2acf5d03deb" />

### Melihat Keunggulan Wisata

<img width="1897" height="801" alt="image" src="https://github.com/user-attachments/assets/ea4bb686-f547-4850-ae83-e9d124c97e27" />

### Melihat Fasilitas Wisata

<img width="1899" height="825" alt="image" src="https://github.com/user-attachments/assets/25b6a522-fcc8-48bf-82f3-80cf624ff4f6" />

### Melihat Berita atau Kegiatan

<img width="589" height="815" alt="image" src="https://github.com/user-attachments/assets/2f8dd054-29e1-481d-b5f9-4d7611ee5ee3" />

### Memberikan Ulasan / Komentar

<img width="1894" height="891" alt="image" src="https://github.com/user-attachments/assets/f3d7956e-e974-497d-b52d-1f399dd06ae6" />

### Melihat Informasi Lokasi dan Kontak

<img width="1894" height="561" alt="image" src="https://github.com/user-attachments/assets/200a89bb-cd9c-4637-8777-0cc319d3f721" />

### Tentang Naureen Mini Garden 

<img width="1896" height="881" alt="image" src="https://github.com/user-attachments/assets/5ea54aed-16ae-4e0a-8aaa-e680e9461b63" />

<img width="1901" height="888" alt="image" src="https://github.com/user-attachments/assets/e985e64f-ead0-4e6b-8c93-ad2a7c77dbf5" />

### Melihat Detail Wisata

<img width="1897" height="886" alt="image" src="https://github.com/user-attachments/assets/4ff8524a-3ded-4d7f-887f-04ce00c0b7d3" />

<img width="1898" height="887" alt="image" src="https://github.com/user-attachments/assets/ad73727d-621e-4a5f-acd4-c02e142a7fb8" />

<img width="1900" height="888" alt="image" src="https://github.com/user-attachments/assets/ebbe6cd3-64e0-43b6-92bf-0ff2c343200c" />

<img width="1891" height="878" alt="image" src="https://github.com/user-attachments/assets/49d86438-6f8d-41b2-8faa-4301220a7ef0" />

<img width="1893" height="883" alt="image" src="https://github.com/user-attachments/assets/3d2084c9-ab37-489e-9d55-935bd9160405" />

<img width="1900" height="796" alt="image" src="https://github.com/user-attachments/assets/ccb94d4d-ed64-4b72-b449-ca623c64cb57" />

<img width="1898" height="882" alt="image" src="https://github.com/user-attachments/assets/1f2b287c-ec20-4f44-8ac7-7cead2b086af" />

<img width="1897" height="881" alt="image" src="https://github.com/user-attachments/assets/8c1f7a8e-50e8-49b9-b98f-4569993211b2" />

<img width="1893" height="885" alt="image" src="https://github.com/user-attachments/assets/2511cff0-23b4-4ba7-8298-3f9742b1f011" />

<img width="1897" height="883" alt="image" src="https://github.com/user-attachments/assets/f21da199-5cb0-41b1-a4b0-323236d3674d" />

## Admin 

### Halaman Login

<img width="1912" height="886" alt="image" src="https://github.com/user-attachments/assets/d164ba8f-0fc5-45e7-a65c-091d156528f2" />

### Dashboard 

<img width="1916" height="882" alt="image" src="https://github.com/user-attachments/assets/72edf61d-5e47-47c1-bee9-64ec211c801a" />

### Tampilan Kelola Berita 

<img width="1919" height="883" alt="image" src="https://github.com/user-attachments/assets/34c76140-8850-4cdb-bee9-a05a204011f6" />

### CRUD Kelola Berita 

<img width="1919" height="883" alt="image" src="https://github.com/user-attachments/assets/8e568e35-08e0-4949-bb83-dd32e95f5598" />

### Tampilan Kelola Reviews

<img width="1915" height="881" alt="image" src="https://github.com/user-attachments/assets/55665436-1b59-4430-a5fc-7ebcaa860a40" />

## ↳ Kesimpulan

Website Naureen Mini Garden merupakan sistem informasi berbasis web yang dirancang untuk memberikan informasi mengenai fasilitas, kegiatan, dan layanan wisata kepada pengunjung secara mudah dan terstruktur. Sistem ini juga membantu admin dalam mengelola data berita dan ulasan pengunjung melalui dashboard yang tersedia. Dengan menggunakan konsep Model View Controller (MVC), website ini memiliki struktur yang lebih terorganisir, mudah dikembangkan, serta mendukung proses digitalisasi pengelolaan informasi wisata secara efektif dan efisien.

## ↳ Anggota Kelompok 1

1. Dwi Pebriyanto Pradana [2409116012]
2. Rahmad Ramadhan [2409116018]
3. Zahra Aulia Rahmah [2409116020]
4. Dilla Maharani [2409116023]
