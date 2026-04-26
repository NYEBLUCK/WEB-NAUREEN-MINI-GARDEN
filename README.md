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
