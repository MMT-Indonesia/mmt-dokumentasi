<?php require_once("header.php") ?>
<section class="doc_documentation_area onepage_doc_area" id="sticky_doc">
    <div class="overlay_bg"></div>
    <div class="container-fluid pl-60 pr-60">
        <div class="row doc-container">
            <div class="col-lg-2 doc_mobile_menu doc-sidebar display_none">
                <?php require_once("aside.php") ?>
            </div>
            <div class="col-lg-10 col-md-10">
                <!-- KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    <h2>2. Saldo Awal</h2>
<p>
Untuk memulai aplikasi Accounting / SIAS, dibutuhkan data saldo awal sebagai jumlah angka untuk pertama kali melakukan pencatatan transaksi dalam neraca. Penetapan saldo awal akan berpengaruh pada laporan-laporan yang nantinya dihasilkan melalui sistem informasi akuntansi.
 Setelah persiapan implementasi, jenis data saldo awal sesuai menu pada aplikasi antara lain : 
<h3>2.1 Anggaran</h3>
Data ini berisikan mengenai saldo awal anggaran pada periode yang maksud. Data yang diinput kedalam aplikasi antara lain periode, anggaran pendapatan, anggaran belanja. <br>
<br>2.1.1 Klik Anggaran <br>
<img src="img/anggaran1.jpg" alt=""><br>
<br>2.1.2 Klik detail Untuk Melihat Secara Keseluruhan
<img src="img/anggaran2.jpg" alt=""><br>
<br>2.1.3	Untuk mengisi data Anggaran Pendapatan sesuai periode yang di maksud, pilih tombol <b>“Pendapatan”</b>, kemudian isikan nilai sesuai pos akun pendapatan yang ditampilkan oleh aplikasi, lalu pilih <b>“Save”</b>.
<img src="img/anggaran3.jpg" alt=""> <br>
<br>2.1.4	Sama halnya dengan pengisian Anggaran Pendapatan, Untuk mengisi data 
Anggaran Belanja, pilih tombol <b>“Belanja”</b>, kemudian isikan nilai sesuai pos akun belanja yang ditampilkan aplikasi, lalu pilih <b>“Save”</b>.
<img src="img/anggaran4.jpg" alt=""> <br>
<br><h3>&nbsp;2.2 Aset tetap</h3>
Data yang digunakan untuk mengelola aset. Berisikan Akun, Akun Beban Penyusutan, Akun Penyusutan, Tanggal Beli, 
Nama Barang, Jumlah, Harga Beli, Total, Tanggal Susut Awal, Usia, Umur Ekonomis, Lokasi Aset, Kode Aset, Penyusutan, Keterangan. Tampilan data pada aplikasi bisa dipilih sesuai periode bulan perolehan / pembelian asetnya.<br>
<br>2.2.1 Klik Aset Tetap<br>
<img src="img/aset1.jpg" alt=""><br>
<br>Adapun pengisian data aset tetap ada 2 cara yakni dengan manual atau dengan uploud excel. <br>
<br>2.2.2 Upload Aset Secara Manual <br>
<img src="img/aset2.jpg" alt=""><br>
<br>Jika ingin menambahkan data aset pada aplikasi secara manual, maka pilih 
<b>“Tambah Data”</b> kemudian isikan data sesuai kolom yang di tampilkan, antara lain:
<ol>
    <li>Tanggal Beli</li>
    <li>Jumlah Barang Atau Aset</li>
    <li>Harga beli(Isi Harga Satuanya)</li>
    <li>Umur Ekonomis(Dalam Bulan)</li>
    <li>Nama Barang</li>
    <li>Pilih Kategori Akun Aset</li>
    <li>Pilih Kategori Akun Beban Penyusutan</li>
    <li>Pilih Kategori Akun Penyusutan</li>
    <li>Centang Penyusutan, Apabila Akun Tersebut Memiliki Nilai Susut </li>
    <li>Pilih Lokasi Aset</li>
    <li>Klik Save</li>
</ol>
<br><img src="img/aset3.jpg" alt=""> <br>
<br> <b><u>Contoh Pengisian:</u></b><br>
<img src="img/aset4.jpg" alt="">
<ol type="a">
    <li>Tanggal Beli = 1 Juli 2022 </li>
    <li>Jumlah = 1 </li>
    <li>Harga Beli = Rp 300.000.000 </li>
    <li>Umur Ekonomis = 60 bulan </li>
    <li>Nama Barang = Mobil Kijang Inova </li>
    <li>Akun Aset = 1-220001 Mobil </li>
    <li>Akun Beban Penyusutan = 6-120006 Biaya Penyusutan Mobil</li>
    <li>Centang Penyusutan</li>
    <li>Lokasi Aset = 101 Lingkungan Sekolah </li>
    <li>klik Save</li>
</ol><br>
<br>2.2.3 Upload Aset Dengan Cara Upload File Excel
<br>SIstem telah menyediakan template data excel untuk mengisi data aset dengan cara upload data. Pilih “Upload Excel” kemudian arahkan ke directory yang menyimpan
 template excel file data aset untuk diupload ke aplikasi
 <br>a. Klik upload excel
<br><img src="img/aset5.jpg" alt=""> <br>
 <br>b. lalu download templatenya agar dapat sesuai dengan sistem 
 <img src="img/aset6.jpg" alt=""><br>
 <br>c. Lalu upload file excel tersebut di menu yang sama 
 <br><img src="img/aset7.jpg" alt=""><br>
 <br>d. Klik browse untuk upload file yang telah disesuaikan dengan template
 <br><img src="img/aset8.jpg" alt=""><br>
 <br>e. Lalu klik upload
 <br><img src="img/aset9.jpg" alt=""><br>
 <br>f. Setelah semua tervalidasi oleh sistem maka dapat disave untuk data asetnya
 <br><img src="img/aset10.jpg" alt="">
</p>
<p>
<br><b><u>Contoh: Data yang akan di upload</u></b>
<br>
<table>
<tr>
    <th>NO.</th>
    <th>KODE AKUN</th>
    <th>AKUN BEBAM</th>
    <th>AKUN PENYUSUTAN</th>
    <th>TGL_BELI</th>
    <th>NAMA BARANG</th>
    <th>JUMLAH</th>
    <th>HARGA</th>
    <th>UMUR EKONOMIS</th>
    <th>KETERANGAN</th>
    <th>PENYUSUTAN</th>
</tr>
<tr>
    <td>1</td>
    <td>1-220001</td>
    <td>6-120006</td>
    <td>1-250006</td>
    <td>1/7/2021</td>
    <td>Mobil Kijang Inova</td>
    <td>1</td>
    <td>Rp. 300.000.000</td>
    <td>60</td>
    <td>Mobil Kijang Inova</td>
    <td>Y</td>
</tr>
<tr>
    <td>2</td>
    <td>1-230001</td>
    <td>6-120008</td>
    <td>1-250008</td>
    <td>1/7/2021</td>
    <td>Gedung Utama</td>
    <td>500</td>
    <td>Rp. 5.000.000</td>
    <td>60</td>
    <td>Gedung Utama</td>
    <td>Y</td>
</tr>
<tr>
    <td>3</td>
    <td>1-240001</td>
    <td></td>
    <td></td>
    <td>1/7/2021</td>
    <td>Tanah</td>
    <td>1200</td>
    <td>Rp. 10.000.000</td>
    <td></td>
    <td>tanah</td>
    <td>N</td>
</tr>
<tr>
    <td>4</td>
    <td>1-210001</td>
    <td>6-120001</td>
    <td>1-250001</td>
    <td>1/7/2021</td>
    <td>Meja Kantor</td>
    <td>3</td>
    <td>Rp. 450.000</td>
    <td>60</td>
    <td>Meja Kantor</td>
    <td>Y</td>
</tr>
<tr>
    <td>5</td>
    <td>1-210002</td>
    <td>6-120002</td>
    <td>1-250002</td>
    <td>1/7/2021</td>
    <td>Set Proyektor</td>
    <td>6</td>
    <td>Rp. 5.000.000</td>
    <td>60</td>
    <td>Set Proyektor</td>
    <td>Y</td>
</tr>
<tr>
    <td>6</td>
    <td>1-210003</td>
    <td>6-120003</td>
    <td>1-250003</td>
    <td>1/7/2021</td>
    <td>Komputer</td>
    <td>10</td>
    <td>Rp. 7.000.000</td>
    <td>60</td>
    <td>Komputer</td>
    <td>Y</td>
</tr>
<tr>
    <td>7</td>
    <td>1-210004</td>
    <td>6-120004</td>
    <td>1-250004</td>
    <td>1/7/2021</td>
    <td>Kipas Angin</td>
    <td>2</td>
    <td>Rp. 400.000</td>
    <td>60</td>
    <td>Kipas Angin</td>
    <td>Y</td>
</tr>
<tr>
    <td>8</td>
    <td>1-210005</td>
    <td>6-120005</td>
    <td>1-250005</td>
    <td>1/7/2021</td>
    <td>Etalase Kantin</td>
    <td>3</td>
    <td>Rp. 500.000</td>
    <td>60</td>
    <td>Etalase Kantin</td>
    <td>Y</td>
</tr>
</table><br>

<br>a. klik ikon untuk upload file
<br><img src="img/aset11.jpg" alt=""><br>
<br>b. lalu cari file template yang akan di upload tersebut
<br><img src="img/aset12.jpg" alt=""><br>
<br>c. lalu klik tombol upload
<br><img src="img/aset13.jpg" alt=""><br>
<br>d. akan muncul tampilan akun yang di upload dan akan di validasi lalu klik save 
<br><img src="img/aset14.jpg" alt=""><br>
<br><b> Hal Yang Harus Diperhatikan saat upload data excel </b><br>
<br>Data tidak valid di tampilan menu validasi akan berwarna merah dan menerangkan penyebab tidak valid, perbaiki dan upload ulang agar data dapat valid. <br>
<br><img src="img/aset15.jpg" alt="">
<br>Gagal save, perhatikan tampilan valid, ketika data semua sudah valid baru dapat dilakukan save. 
</p>
<p>
    <h3>2.3 Saldo Posisi Keuangan</h3>
    Setelah semua data dan saldo awalterinput di aplikasi maka saldo awal posisi keuangan pada periode yang di maksud bisa ditampilkan seperti gambar berikut. 
    <br>2.3.1 Klik Saldo → Klik saldo posisi keuangan
    <br><img src="img/aset16.jpg" alt=""><br>
    <br>2.3.2 Lalu isi setiap akun yang ada sesuai dengan laporan keuangan sekolah terakhir, setelah semua terisi pastikan jumlah debet dan kredit sama. Lalu save.
    <br><img src="img/aset17.jpg" alt=""><br>
    <br><b>Contoh Pengisian</b>
    <ol type="a">
        <li>Isi kas kecil = 10.000.000 </li>
        <li>Isi kas bank =  950.000.000 </li>
        <li>Isi Piutang SPP = 3.000.000 </li>
        <li>Isi Aset Neto Tanpa Pembatas =  1.670.493.707 </li>
        <li>Isi Aset Neto Dengan Pembatas = 14.500.000 </li>
        <li>Pastikan jumlah debet dan kredit sama </li>
        <li>Lalu klik save </li>
    </ol><br>
    <br><img src="img/aset18.jpg" alt="">
</p>
<p>
    <b>Yang Perlu diperhatikan:</b><br>
    <br>a)	Pada kolom piutang tidak perlu diisi karena jumlahnya akan sinkron dengan sistem yang ada di tagihan,
     untuk melihat jumlah yang sinkron di menu report → posisi keuangan. 
    <br>b)	Pada kolom Aset juga tidak perlu diisi karena Aset sudah input dimenu Aset tetap. 
    </p>

                <!-- END KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
            </div>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<?php require_once("script.php") ?>