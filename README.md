# NAUREEN MINI GARDEN SAMARINDA 

<img width="3780" height="1890" alt="Salinan dari Naureen Mini Garden - PBW (Banner Horizontal)" src="https://github.com/user-attachments/assets/b17f4922-b0c3-4792-834f-f4e72975f31f" />

# Deskripsi Website

Website Naureen Mini Garden merupakan sistem informasi berbasis web yang digunakan sebagai media informasi dan promosi destinasi wisata edukasi dan rekreasi keluarga di Kota Samarinda. Website ini menyediakan berbagai informasi penting mengenai fasilitas wisata, kegiatan edukasi, harga tiket, lokasi wisata, serta ulasan pengunjung.

Selain itu, website ini juga dilengkapi dengan sistem administrasi yang memungkinkan pengelola untuk mengelola data berita kegiatan dan komentar pengunjung secara digital sehingga informasi dapat diperbarui dengan mudah dan cepat.

# Tujuan Website 

Tujuan dari pembuatan aplikasi ini adalah:

- Menyediakan media informasi digital mengenai Naureen Mini Garden
- Mempermudah pengunjung dalam memperoleh informasi wisata
- Membantu pengelola dalam mengelola data kegiatan dan komentar
- Mendukung promosi wisata secara online
- Meningkatkan efisiensi pengelolaan informasi wisata

# Perancangan Database

Perancangan database pada sistem Website Naureen Mini Garden bertujuan untuk menyimpan dan mengelola data yang digunakan dalam sistem secara terstruktur dan mudah diakses. Database yang digunakan dalam sistem ini adalah MySQL, yang berfungsi sebagai media penyimpanan data seperti data admin, data berita kegiatan, dan data ulasan pengunjung.

Database dirancang dengan struktur yang sederhana karena sistem yang dikembangkan masih berskala kecil dan hanya digunakan oleh satu admin sebagai pengelola. Setiap tabel dalam database memiliki fungsi masing-masing dan dapat berjalan secara mandiri tanpa menggunakan relasi antar tabel. Dengan perancangan database ini, proses pengelolaan data pada website dapat dilakukan dengan lebih mudah, cepat, dan efisien.


## Struktur Tabel Database

Database db_nmg terdiri dari beberapa tabel utama yang digunakan untuk mendukung jalannya sistem website, yaitu:

1. Tabel Admin

    Tabel admin digunakan untuk menyimpan data akun admin yang memiliki hak akses untuk mengelola website. Data pada tabel ini digunakan saat proses login ke dalam sistem. Tabel ini berfungsi untuk memastikan bahwa hanya pengguna yang memiliki akun admin yang dapat mengakses panel administrasi. Fungsi Tabel Admin:
  - Menyimpan data akun admin
  - Digunakan untuk proses login
  - Mengamankan akses sistem
  - Struktur Field Tabel Admin

2. Tabel Berita

    Tabel berita digunakan untuk menyimpan data kegiatan atau informasi yang akan ditampilkan pada website. Data pada tabel ini akan muncul pada halaman berita atau kegiatan terbaru. Tabel ini memungkinkan admin untuk menambahkan, mengedit, dan menghapus informasi kegiatan secara digital melalui panel administrasi. Fungsi Tabel Berita:
  - Menyimpan data kegiatan
  - Menampilkan informasi berita pada website
  - Mendukung fitur tambah, edit, dan hapus berita
    
3. Tabel Komentar
   
    Tabel komentar digunakan untuk menyimpan data ulasan atau komentar yang diberikan oleh pengunjung pada website. Data pada tabel ini akan ditampilkan pada halaman ulasan setelah disetujui oleh admin. Tabel ini mendukung interaksi antara pengunjung dan pengelola website melalui fitur ulasan. Fungsi Tabel Komentar:
  - Menyimpan ulasan pengunjung
  - Menampilkan komentar pada website
  - Mendukung fitur persetujuan (ACC) komentar

# Autentikasi & Manajemen Akun

Sistem website Naureen Mini Garden menyediakan fitur autentikasi untuk menjaga keamanan akses ke panel administrasi. Proses login dilakukan menggunakan username dan password yang hanya dimiliki oleh admin.

# Admin

Admin dapat masuk ke dalam sistem melalui halaman login dengan memasukkan username dan password yang valid. Sistem akan memverifikasi data login sebelum memberikan akses ke dashboard. Admin bertanggung jawab dalam mengelola akun yang digunakan untuk mengakses sistem. Pada sistem ini, akun admin bersifat terbatas dan hanya digunakan oleh pengelola utama website.

### Fitur Admin

Admin merupakan pengguna yang memiliki kontrol penuh terhadap sistem website Naureen Mini Garden. Admin bertanggung jawab dalam mengelola seluruh informasi yang ditampilkan pada website, seperti data kegiatan, fasilitas, dan ulasan pengunjung. Admin memiliki peran penting dalam menjaga keakuratan dan kelengkapan informasi pada website. 

#### Manajemen Berita / Kegiatan (CRUD)

Fitur ini meliputi:

- Menambahkan berita atau kegiatan baru
- Mengedit data berita
- Menghapus berita
- Mengunggah gambar kegiatan
- Menampilkan berita pada halaman website

Fitur ini digunakan untuk memastikan bahwa informasi kegiatan yang tersedia pada website selalu diperbarui dan relevan dengan kondisi terbaru di tempat wisata.

#### Manajemen Komentar Pengunjung

Admin dapat mengelola ulasan atau komentar yang diberikan oleh pengunjung pada website.

Fitur ini meliputi:

- Melihat daftar komentar pengunjung
- Menyetujui (ACC) komentar
- Menghapus komentar yang tidak sesuai

Fitur ini berfungsi untuk menjaga kualitas informasi dan memastikan bahwa komentar yang ditampilkan pada website bersifat positif dan sesuai.

## Pengunjung 

Pengunjung merupakan pengguna umum yang mengakses website Naureen Mini Garden untuk memperoleh informasi mengenai tempat wisata, fasilitas, serta kegiatan yang tersedia. Pengunjung tidak perlu melakukan login untuk menggunakan fitur pada website.

#### Melihat Halaman Beranda

Pengunjung dapat melihat halaman utama website yang menampilkan gambaran umum mengenai Naureen Mini Garden. Pada halaman ini ditampilkan informasi penting seperti deskripsi tempat wisata, jam operasional, harga tiket masuk, serta lokasi wisata. Fitur ini digunakan untuk memberikan informasi awal kepada pengunjung mengenai layanan dan fasilitas yang tersedia.

Informasi yang ditampilkan meliputi:

- Deskripsi singkat Naureen Mini Garden
- Jam operasional wisata
- Harga tiket masuk
- Lokasi wisata
- Tombol navigasi menuju fasilitas

#### Tentang Naureen Mini Garden

Halaman Tentang merupakan halaman yang menampilkan informasi mengenai sejarah dan latar belakang berdirinya Naureen Mini Garden sebagai salah satu destinasi wisata edukasi dan rekreasi di Kota Samarinda. Halaman ini memberikan gambaran kepada pengunjung mengenai awal mula pengembangan tempat wisata serta tujuan didirikannya Naureen Mini Garden sebagai sarana wisata keluarga yang mengedepankan konsep edukasi dan pelestarian lingkungan.

#### Melihat Keunggulan Wisata

Pengunjung dapat melihat bagian keunggulan wisata yang menampilkan alasan mengapa tempat wisata ini layak untuk dikunjungi. Bagian ini menampilkan berbagai daya tarik wisata seperti suasana alam, spot foto, dan kegiatan edukasi. Fitur ini bertujuan untuk memberikan gambaran kepada pengunjung mengenai manfaat dan pengalaman yang dapat diperoleh ketika berkunjung.

Informasi yang ditampilkan meliputi:

- Wisata keluarga
- Spot foto menarik
- Suasana alam
- Kegiatan edukasi

#### Melihat Fasilitas Wisata

Pengunjung dapat melihat daftar fasilitas yang tersedia di Naureen Mini Garden. Setiap fasilitas ditampilkan dalam bentuk gambar dan deskripsi singkat agar mudah dipahami oleh pengunjung. Fitur ini membantu pengunjung mengetahui layanan yang tersedia sebelum datang ke lokasi wisata.

Fasilitas yang ditampilkan meliputi:

- Spot foto estetik
- Terapi ikan
- Gazebo dan cottage
- Pemancingan
- Paket edukasi
- Fasilitas pendukung

#### Melihat Detail Wisata

Pengunjung dapat melihat informasi lebih lengkap mengenai fasilitas atau kegiatan tertentu dengan menekan tombol Lihat Detail pada halaman fasilitas. Fitur ini digunakan untuk menampilkan penjelasan lebih rinci mengenai layanan wisata tanpa membuat halaman utama terlalu padat.

Informasi yang ditampilkan meliputi:

- Nama fasilitas
- Deskripsi fasilitas
- Harga layanan
- Gambar fasilitas

#### Melihat Berita atau Kegiatan

Pengunjung dapat melihat informasi kegiatan atau aktivitas terbaru yang tersedia pada website. Informasi ini ditampilkan dalam bentuk artikel yang berisi gambar dan deskripsi kegiatan. Fitur ini digunakan sebagai media informasi bagi pengunjung mengenai kegiatan terbaru di Naureen Mini Garden.

Informasi yang ditampilkan meliputi:

- Judul kegiatan
- Tanggal kegiatan
- Gambar kegiatan
- Deskripsi kegiatan

#### Memberikan Ulasan / Komentar

Pengunjung dapat memberikan ulasan atau komentar mengenai pengalaman mereka setelah berkunjung ke tempat wisata. Komentar yang diberikan oleh pengunjung akan disimpan dalam sistem dan hanya akan ditampilkan pada website setelah disetujui oleh admin. Fitur ini digunakan untuk meningkatkan interaksi antara pengunjung dan pengelola serta menjadi bahan evaluasi dalam meningkatkan kualitas layanan.

Data yang diinput oleh pengunjung meliputi:

- Nama pengunjung
- Email
- Rating
- Komentar

#### Melihat Informasi Lokasi dan Kontak

Pengunjung dapat melihat informasi lokasi wisata serta peta lokasi yang terhubung dengan Google Maps. Informasi ini membantu pengunjung dalam menemukan lokasi tempat wisata dengan lebih mudah.

Informasi yang ditampilkan meliputi:

- Alamat wisata
- Peta lokasi
- Kontak pengelola

# Sruktur Folder Naureen Mini Garden

Pada pengembangan website Naureen Mini Garden, sistem dibangun menggunakan konsep MVC (Model View Controller). Arsitektur MVC digunakan untuk memisahkan antara bagian pengolahan data, tampilan antarmuka, dan logika program sehingga sistem menjadi lebih terstruktur dan mudah dikembangkan.

```bash
NAUREEN-MINI-GARDEN/
│
├── app/
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── BeritaController.php
│   │   └── ReviewController.php
│   │
│   ├── models/
│   │   ├── BeritaModel.php
│   │   ├── ReviewModel.php
│   │   └── UserModel.php
│
├── assets/
│   ├── css/
│   ├── images/
│   └── uploads/
│
├── config/
│   └── koneksi.php
│
├── Views/
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── kelola_berita.php
│   │   ├── tambah_berita.php
│   │   ├── edit_berita.php
│   │   └── kelola_review.php
│   │
│   └── templates/
│       ├── beranda.php
│       ├── berita.php
│       ├── detail.php
│       ├── login.php
│       └── tentang.php
│
├── index.php
└── README.md
```

# Tampilan Website 

## Pengujung

### Melihat Halaman Beranda

<img width="1896" height="891" alt="image" src="https://github.com/user-attachments/assets/5b30a9f0-deb9-4990-9f49-c2acf5d03deb" />

### Melihat Keunggulan Wisata

<img width="1897" height="801" alt="image" src="https://github.com/user-attachments/assets/ea4bb686-f547-4850-ae83-e9d124c97e27" />

### Melihat Fasilitas Wisata

<img width="1899" height="825" alt="image" src="https://github.com/user-attachments/assets/25b6a522-fcc8-48bf-82f3-80cf624ff4f6" />

### Melihat Berita atau Kegiatan

BOLOOOMMM

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

# Kesimpulan

Website Naureen Mini Garden merupakan sistem informasi berbasis web yang dirancang untuk memberikan informasi mengenai fasilitas, kegiatan, dan layanan wisata kepada pengunjung secara mudah dan terstruktur. Sistem ini juga membantu admin dalam mengelola data berita dan ulasan pengunjung melalui dashboard yang tersedia. Dengan menggunakan konsep Model View Controller (MVC), website ini memiliki struktur yang lebih terorganisir, mudah dikembangkan, serta mendukung proses digitalisasi pengelolaan informasi wisata secara efektif dan efisien.

# Anggota Kelompok 1

1. Dwi Pebriyanto Pradana [2409116012]
2. Rahmad Ramadhan [2409116018]
3. Zahra Aulia Rahmah [2409116020]
4. Dilla Maharani [2409116023]
