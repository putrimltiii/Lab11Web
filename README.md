# Lab11Web
# Nama: Putri Melati Ramadhaniati
# NIM: 312410194
# Kelas: TI.24.A1

# Struktur Folder
<img width="241" height="475" alt="image" src="https://github.com/user-attachments/assets/813a5d35-66c3-4ba0-8ef4-4aaaec5b0603" />

# .htaccess
<img width="549" height="254" alt="image" src="https://github.com/user-attachments/assets/ca48d4cc-5285-4369-b5fd-0f52ce5c04e3" />

# Config.php
<img width="405" height="222" alt="image" src="https://github.com/user-attachments/assets/d4779194-3ef9-4915-ad3b-81c7c5a166b7" />

# Index.php
<img width="835" height="621" alt="image" src="https://github.com/user-attachments/assets/d0af2e57-1876-4a00-b4bc-bec252cd5b8b" />

# Class/Database.php
<img width="1003" height="908" alt="image" src="https://github.com/user-attachments/assets/f6bb6611-a90e-4cac-bcbc-151b4a8276e7" />
<img width="964" height="832" alt="image" src="https://github.com/user-attachments/assets/cf48fca7-f031-43d9-bc73-50633e2228ec" />
<img width="881" height="297" alt="image" src="https://github.com/user-attachments/assets/b2d3e314-a0e4-4dab-937b-5e7f656e263f" />

# Class/Form.php
<img width="1079" height="908" alt="image" src="https://github.com/user-attachments/assets/bd8100b0-c9ae-4cb6-959d-895a18b67bd5" />
<img width="1446" height="696" alt="image" src="https://github.com/user-attachments/assets/d29436b2-300f-4e80-9f3d-010431fea12a" />
<img width="867" height="268" alt="image" src="https://github.com/user-attachments/assets/16dab84a-a575-4eed-812e-de3315a8415c" />

# Modul/Artikel
<img width="662" height="199" alt="image" src="https://github.com/user-attachments/assets/593249c7-29e9-4a7f-b8d1-628c609b2384" />

# Module/Index.php
<img width="837" height="698" alt="image" src="https://github.com/user-attachments/assets/89353195-cec5-4e37-9f85-4b8e950035e7" />

# Module/Tambah.php
<img width="794" height="624" alt="image" src="https://github.com/user-attachments/assets/ed9a9ec2-1337-4eb3-8f91-46d8fc527406" />

# Module/Ubah.php
<img width="785" height="701" alt="image" src="https://github.com/user-attachments/assets/30d41892-fd1d-4032-a0f0-ae468db58387" />

# Template/Header.php
<img width="805" height="480" alt="image" src="https://github.com/user-attachments/assets/546b62a5-8235-4d53-a87d-16060ea47d6a" />

# Template/Footer.php
<img width="545" height="196" alt="image" src="https://github.com/user-attachments/assets/e60bd74f-6179-46dd-9863-ac3cf1a0a52b" />

# Template/Sidebar.php
<img width="766" height="647" alt="image" src="https://github.com/user-attachments/assets/7caf2686-604c-4dd9-b01c-b399f05af74e" />

# Halaman Artikel (http://localhost/lab11_php_oop/artikel/index)
<img width="1919" height="464" alt="image" src="https://github.com/user-attachments/assets/d349e58d-4bf6-4a43-a9f7-bca71c71ce46" />
## Penjelasan: 
<h3>Data Artikel</h3>
<p>
    Halaman ini menampilkan seluruh data artikel yang tersimpan di dalam database.
    Data ditampilkan dalam bentuk tabel yang berisi ID artikel, judul, dan isi artikel.
</p>
<p>
    Dari halaman ini, Anda juga dapat memilih untuk mengubah artikel dengan menekan 
    tombol <b>Ubah</b> pada baris data yang ingin diedit. Jika ingin menambah artikel baru, 
    klik menu <b>Tambah Artikel</b> di navigasi atas.
</p>


# Halaman Tambah Artikel (http://localhost/lab11_php_oop/artikel/tambah)
<img width="1919" height="470" alt="image" src="https://github.com/user-attachments/assets/5a0e3c83-4d09-4a04-ad1a-b3f658fa907c" />
## Penjelasan: 
<h3>Tambah Artikel Baru</h3>
<p>
    Pada halaman ini, Anda dapat menambah data artikel baru melalui form yang telah disediakan.
    Form ini dibuat secara dinamis menggunakan class <i>Form</i> yang telah dirancang 
    pada praktikum sebelumnya.
</p>
<p>
    Setelah data diisi dan tombol <b>Simpan</b> ditekan, data akan otomatis dimasukkan 
    ke dalam tabel <b>artikel</b> di database <b>latihan_oop</b>. Jika penyimpanan berhasil, 
    akan muncul notifikasi bahwa artikel telah berhasil ditambahkan.
</p>


# Halaman Ubah Artikel (http://localhost/lab11_php_oop/artikel/ubah?id=1)
<img width="1919" height="481" alt="image" src="https://github.com/user-attachments/assets/a9c37309-dd41-483b-8702-bf5a69f18753" />
# Penjelasan: 
<h3>Ubah Data Artikel</h3>
<p>
    Halaman ini digunakan untuk mengubah data artikel berdasarkan ID yang dipilih.
    Ketika halaman dibuka, sistem mengambil data artikel dari database dan 
    menampilkannya pada form sehingga Anda dapat langsung memperbarui isinya.
</p>
<p>
    Setelah menekan tombol <b>Update</b>, sistem akan menyimpan perubahan tersebut 
    ke dalam database menggunakan method <i>update()</i> dalam class <b>Database</b>.
</p>

## Buat Tabel users & Insert Data Dummy (User Admin)
<img width="1516" height="720" alt="image" src="https://github.com/user-attachments/assets/9da469d0-512a-4316-824f-0c1eab19639e" />
<img width="1919" height="516" alt="image" src="https://github.com/user-attachments/assets/08afce93-4b96-4393-aea3-b0d5136f0abc" />

## Update Routing (index.php)
<img width="955" height="948" alt="image" src="https://github.com/user-attachments/assets/63a4f8e4-b40e-443f-bea9-9a78d4281ca1" />

## Module/user/login.php
<img width="1486" height="922" alt="image" src="https://github.com/user-attachments/assets/75e647a8-1be0-452f-b5b3-88d6526f49ba" />
<img width="1464" height="889" alt="image" src="https://github.com/user-attachments/assets/82f02bb0-1935-4ca6-8937-e4ecb9ab4c8d" />
<img width="1466" height="198" alt="image" src="https://github.com/user-attachments/assets/d9a946b3-9f67-441c-8f78-c56dbc1fd6ad" />

## Module/user/logout.php
<img width="765" height="189" alt="image" src="https://github.com/user-attachments/assets/30a7ebba-8261-42a9-b769-d078f2eda0f1" />

## Update Template (header.php)
<img width="1182" height="941" alt="image" src="https://github.com/user-attachments/assets/5dbc0bde-fa61-4085-8b0b-44c177a1d085" />

## Halaman Login
<img width="1919" height="1016" alt="image" src="https://github.com/user-attachments/assets/07fafc59-b901-40fa-98f4-fae8e07cbe27" />

## Home
<img width="1919" height="1018" alt="image" src="https://github.com/user-attachments/assets/b0d942fd-43aa-4be0-8bd1-13e36a31956e" />

## Data Artikel
<img width="1919" height="1017" alt="image" src="https://github.com/user-attachments/assets/1ef53653-188f-4a5b-888d-cde80b8128e7" />

## Halaman Profile
<img width="1919" height="1017" alt="image" src="https://github.com/user-attachments/assets/e44c164d-91db-4882-9a01-ef0974b31eef" />

## Logout Administrator (Kembali Kehalaman Login)
<img width="1919" height="958" alt="image" src="https://github.com/user-attachments/assets/e7fb8665-0fb7-43e3-92b4-e680492cf7cc" />


















