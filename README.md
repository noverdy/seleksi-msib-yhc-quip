# Seleksi Program Magang Bersertifikat Kampus Merdeka - Yayasan Hasnur Centre - Programmer - YHC

| About Me    |                          |
|-------------|--------------------------|
| Nama        | Noverdi Anugrah Ramadhan |
| Asal Kampus | Universitas Brawijaya    |
| Kota Asal   | Kab. Tanah Bumbu         |

## Prerequisites

1. Apache Web Server
2. MySQL
3. Composer
4. Node Package Manager (NPM)

## How to Run Locally

1. Clone the repository using this command:
    > ```git clone https://github.com/noverdy/seleksi-msib-yhc-quip.git```
2. Copy the environment file from .env.example to .env and customize it according to your setup.
3. Install the dependencies using these commands:
    > ```npm install```
    
    > ```composer install```
4. Migrate the database using this command:
    > ```php artisan migrate```
5. Run this command to start the app:
    > ```npm run dev```

    > ```php artisan serve```
6. Browse to `localhost:8000` in your browser.
7. (OPTIONAL) Run this command to seed the database with fake data.
    > ```php artisan db:seed```


## Screenshot Program
<br>

> Tampilan Login
![Login](./public/screenshots/login.png)

> Login Dengan Kredensial Yang Salah
![Login Failed](./public/screenshots/login-gagal.png)

> Tampilan Awal
![Tampilan Awal](./public/screenshots/awal.png)

> Tampilan Detail Mahasiswa
![Detail Mahasiswa](./public/screenshots/detail.png)

> Tampilan Edit Mahasiswa
![Edit Mahasiswa](./public/screenshots/edit.png)

> Tampilan Setelah Edit
![Edit Sukses](./public/screenshots/edit-sukses.png)

> Tampilan Tambah Mahasiswa
![Tambah Mahasiswa](./public/screenshots/tambah.png)

> Tampilan Setelah Tambah
![Tambah Sukses](./public/screenshots/hasil-tambah.png)

> Pencarian Berdasarkan Nama
![Search Nama](./public/screenshots/cari.png)

> Pencarian Berdasarkan Program Studi
![Search Prodi](./public/screenshots/cari-2.png)

> Pencarian Berdasarkan Nama dan Program Studi
![Search Nama dan Prodi](./public/screenshots/cari-3.png)

> Hapus Data Mahasiswa
![Hapus Data](./public/screenshots/hapus.png)

> Hapus Data Mahasiswa Hingga Habis
![Hapus Data](./public/screenshots/hapus-2.png)