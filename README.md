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
