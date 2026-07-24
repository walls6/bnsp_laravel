# Dokumentasi Uji Kompetensi

## A. Tools Software
- XAMPP untuk Apache, MySQL, dan PHP.
- Visual Studio Code sebagai editor.
- Composer untuk dependency management.
- Laravel untuk framework backend.
- Bootstrap untuk tampilan.

## B. Bahasa Pemrograman
- PHP untuk logika aplikasi.
- HTML, CSS, Blade untuk tampilan.
- JavaScript minimal untuk interaksi sederhana.

## C. Framework
Laravel digunakan untuk routing, controller, model, migration, dan autentikasi. Bootstrap 5 dipakai untuk desain UI yang rapi dan responsif.

## D. Library Pihak Ketiga
Library PDF yang dipakai adalah barryvdh/laravel-dompdf. Library ini digunakan untuk membuat laporan inventaris dalam format PDF.

## E. Implementasi OOP
- Class: model Category dan Item.
- Object: instance model yang dipakai di controller.
- Inheritance: User extends Authenticatable.
- Encapsulation: properti protected pada model dan request validation.
- Model: menyimpan logika data dan relasi.
- Controller: mengatur alur request dan response.

## F. Implementasi Database
- MySQL digunakan sebagai database server.
- Migration digunakan untuk membuat tabel.
- Eloquent ORM dipakai untuk CRUD dan relasi.
- Relasi: Category hasMany Item, Item belongsTo Category.

## G. Debugging
Contoh error yang sering muncul:
- Error 404 karena route salah -> cek route dan nama route.
- SQLSTATE[HY000] [1045] -> cek kredensial database di .env.
- Duplicate entry pada kode barang -> gunakan validasi unique.
- Auth redirect loop -> cek middleware dan route guest/auth.

## H. Unit Testing / Pengujian
| Skenario | Hasil yang diharapkan |
|---|---|
| Login benar | User masuk ke dashboard |
| Login salah | Menampilkan error login |
| Tambah kategori | Data kategori tersimpan |
| Tambah barang | Data barang tersimpan |
| Edit barang | Data barang berubah |
| Hapus barang | Data barang hilang |
| Pencarian barang | Hasil sesuai kata kunci |
| Filter kategori | Hasil sesuai kategori |
| Export PDF | File PDF berhasil terunduh |
| Logout | User keluar dan diarahkan ke login |
