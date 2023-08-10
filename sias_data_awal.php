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
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.submenu{
  text-align: left;
  margin-left: 30px;
}
.hal-hal{
  margin-top:5px;
}
</style>
            <h2>1. Data Awal</h2>
                <p> Persiapan Aplikasi Accounting / SIAS dibutuhkan data awal sebagai master data aplikasi, yang akan dibantu menggunakan dokumen excel untuk mempermudah input data master sehingga implementasi dapat dilakukan secara efektif dan efisien. Untuk persiapan implementasi, jenis data awal sesuai menu pada aplikasi antara lain :
            <h3>1.1. Input akun</h3>
            Ada 2 cara untuk penginputan akun yakni dengan manual atau dengan uploud excel. 
            Langkah Pertama, klik Data awal → akun
            <br><br>1.1.1. Klik akun</br>
                <img src="img/sias1.jpg"> <br>
            <br>1.1.2	Pilihan Pertama, Membuat akun melalui Upload Excel dengan menyesuaikan template  yang telah disediakan oleh sistem</br>
            <img src="img/sias2.jpg"> 
            <br><b>a. Menginput dengan upload excel</b></br>
            <br>1. Klik Upload Excel untuk mengupload akun yang dibutuhkan dengan menyesuaikan template yang telah di sediakan oleh sistem
            <img src="img/sias3.jpg" alt="sias3"></br> 
             <br>2.	Download Template excel dengan klik simbol excel lalu sesuaikan template dengan akun yang dibutuhkan atau digunakan nantin
             <img src="img/sias4.jpg" alt="input_excel.jpg"></br>
             <br>3.	Sesuaikan template excel dengan akun yang dibutuhkan atau akan di upload guna memasukkan ke sistem
             <img src="img/sias5.jpg" alt="template.php"></br>
             <br>4.	Klik gambar folder pada sistem untuk mengupload template excel yang sudah disesuaikan sebelumnya. 4.	Klik gambar folder pada sistem untuk mengupload template excel yang sudah disesuaikan sebelumnya. 
             <img src="img/sias6.jpg" alt="upload"></br>
             <br>5.	Klik Browse → lalu cari file template → save.
             <img src="img/sias7.jpg" alt="save"></br>
             <br>6.	Cari file template akun yang sudah di save tadi untuk di upload pada sistem lalu <b>klik upload.</b>
             <img src="img/sias8.jpg" alt="sa"></br>
             <br>7.	Lalu klik upload</br>
             <img src="img/sias9.jpg" alt="s"></br>
             <br>8.	Setelah template excel tadi terupload sistem akan membaca dan menilai atau memvalidasi data yang telah terupload, apabila data masih belum valid sistem akan memberi pendapat penyebab data belum valid. Data yang belum valid tidak dapat disave oleh sistem
             <img src="img/sias10.jpg" alt="sav"></br>
             <br>9.	Setelah semua telah dipastikan valid oleh sistem maka dapat <b>klik save</b> untuk menyimpan data upload pada sistem 
             <img src="img/sias11.jpg" alt=""></br>
        <br></p>     
<p><b>Contoh : Data yang akan di upload</b></p>         
<table>
  <tr>
    <th>No.</th>
    <th>Kode Induk</th>
    <th>Nama Akun Induk</th>
    <th>Kode Akun Detail</th>
    <th>Nama Akun Detail</th>
    <th>Kode Akun Sub Detail</th>
    <th>Nama Akun Sub Detail</th>
    <th>Kode Rincian Sub Detail</th>
    <th>Nama Rincian Sub Detail</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-11</td>
    <td>Kas Setara Kas</td>
    <td>1-110001</td>
    <td>Kas Tangan</td>
    <td></td>
    <td> </td>
  </tr>
  <tr>
  <td></td>
  <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-11</td>
    <td>Kas Setara Kas</td>
    <td>1-110002</td>
    <td>Kas Bank</td>
    <td>1-110002-1</td>
    <td>Kas Bank Tabungan </td>
  </tr>
  <tr>
  <td></td>
  <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-11</td>
    <td>Kas Setara Kas</td>
    <td>1-110002</td>
    <td>Kas Bank</td>
    <td>1-110002-2</td>
    <td>Kas Bank Giro </td>
  </tr>
  <tr>
  <td></td>
  <td>1.1</td>
  <td>Aser Lancar</td>
    <td>1-12</td>
    <td>Piutang</td>
    <td>1-120001</td>
    <td>Piutang pembayaran Siswa</td>
    <td>1-120001-1</td>
    <td>Piutang DPP </td>
  </tr>
  <tr>
    <td></td>
    <td>1.1</td>
  <td>Aser Lancar</td>
    <td>1-12</td>
    <td>Piutang</td>
    <td>1-120001</td>
    <td>Piutang pembayaran Siswa</td>
    <td>1-120001-2</td>
    <td>Piutang SPP </td>
  </tr>
  <tr>
  <td></td>
    <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-12</td>
    <td>Piutang</td>
    <td>1-120001</td>
    <td>Piutang pembayaran Siswa</td>
    <td>1-120001-3</td>
    <td>Piutang Kegiatan </td>
  </tr>
  <tr>
  <td></td>
    <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-12</td>
    <td>Piutang</td>
    <td>1-120002</td>
    <td>Piutang Internal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-12</td>
    <td>Piutang</td>
    <td>1-120003</td>
    <td>Piutang Eksternal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.1</td>
    <td>Aser Lancar</td>
    <td>1-13</td>
    <td>Bangunan Dalam Proses</td>
    <td>1-130001</td>
    <td>Bangunan Dalam Proses</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-21</td>
    <td>Peralatan</td>
    <td>1-210001</td>
    <td>Peralatan Kantor</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-21</td>
    <td>Peralatan</td>
    <td>1-210002</td>
    <td>Peralatan Penunjang Pembelajaran</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-21</td>
    <td>Peralatan</td>
    <td>1-210003</td>
    <td>Peralatan Labratorium</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-21</td>
    <td>Peralatan</td>
    <td>1-210004</td>
    <td>Peralatan Ruang Serbaguna</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-21</td>
    <td>Peralatan</td>
    <td>1-210053</td>
    <td>Peralatan Kantin</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-22</td>
    <td>Kendaraan</td>
    <td>1-220001</td>
    <td>Mobil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-22</td>
    <td>Kendaraan</td>
    <td>1-220001</td>
    <td>Motor</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-23</td>
    <td>Gedung</td>
    <td>1-230001</td>
    <td>Gedung Utama</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-24</td>
    <td>Tanah</td>
    <td>1-240001</td>
    <td>Tanah</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250001</td>
    <td>Akm Peny Peralatan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250002</td>
    <td>Akm Peny Peralatan Penunjang Pembelajaran</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250003</td>
    <td>Akm Peny Peralatan Laboratorium</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250004</td>
    <td>Akm Peny Peralatan Ruang Serbaguna</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250005</td>
    <td>Akm Peny Peralatan Kantin</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250006</td>
    <td>Akm Peny Peralatan Mobil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250007</td>
    <td>Akm Peny Peralatan Motor</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>1.2</td>
    <td>Aser Tetap</td>
    <td>1-25</td>
    <td>Akm Peny Peralatan</td>
    <td>1-250008</td>
    <td>Akm Peny Peralatan Gedung</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>2.1</td>
    <td>Kewajiban</td>
    <td>2-11</td>
    <td>Kewajiban Jangka Pendek</td>
    <td>2-110001</td>
    <td>Kewajiban Internal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>2.1</td>
    <td>Kewajiban</td>
    <td>2-11</td>
    <td>Kewajiban Jangka Pendek</td>
    <td>2-110002</td>
    <td>Kewajiban Eksternal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>2.1</td>
    <td>Kewajiban</td>
    <td>2-12</td>
    <td>Kewajiban Jangka Panjang</td>
    <td>2-120001</td>
    <td>Kewajiban Internal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>2.1</td>
    <td>Kewajiban</td>
    <td>2-12</td>
    <td>Kewajiban Jangka Panjang</td>
    <td>2-120002</td>
    <td>Kewajiban Eksternal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>3.1</td>
    <td>Aset Neto</td>
    <td>3-11</td>
    <td>Aset Neto</td>
    <td>3-110001</td>
    <td>Aset Neto Tanpa Pembatas</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>3.1</td>
    <td>Aset Neto</td>
    <td>3-11</td>
    <td>Aset Neto</td>
    <td>3-110002</td>
    <td>Aset Neto Dengan Pembatas</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-11</td>
    <td>Pendapatan Pembayaran Siswa</td>
    <td>4-110001</td>
    <td>Pendapatan SPP</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-11</td>
    <td>Pendapatan Pembayaran Siswa</td>
    <td>4-110002</td>
    <td>Pendapatan DPP</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-11</td>
    <td>Pendapatan Pembayaran Siswa</td>
    <td>4-110003</td>
    <td>Pendapatan Kegiatan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-12</td>
    <td>Pendapatan Internal</td>
    <td>4-120001</td>
    <td>Pendapatan Sewa</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-13</td>
    <td>Pendapatan Eksternal</td>
    <td>4-130001</td>
    <td>Pendapatan Dana Eksternal</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-14</td>
    <td>Pendapatan Penghapusan Aset Tetap</td>
    <td>4-140001</td>
    <td>Pendapatan Penghapusan Aset Tetap</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>4.1</td>
    <td>Pendapatan</td>
    <td>4-15</td>
    <td>Pendapatan Lain-lain</td>
    <td>4-150001</td>
    <td>Penerimaan Dana Lain-lain</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110001</td>
    <td>Biaya Standart proses</td>
    <td>6-110001-1</td>
    <td>Administrasi Kelas</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110002</td>
    <td>Biaya Standart Kompetensi Nasional</td>
    <td>6-110002-1</td>
    <td>upacara Bendera 17 Agustus</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110003</td>
    <td>Biaya Standart Sarana Dan Prasarana</td>
    <td>6-110003-1</td>
    <td>Opreasional sarana rutin</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110003</td>
    <td>Biaya Standart Sarana Dan Prasarana</td>
    <td>6-110003-2</td>
    <td>Pembelian Alat Tulis Kantor</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110004</td>
    <td>Biaya Standart Pembiayaan</td>
    <td>6-110004-1</td>
    <td>Biaya cetak Dan Fotocopy</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110004</td>
    <td>Biaya Standart Pembiayaan</td>
    <td>6-110004-2</td>
    <td>Biaya Honoranium Guru & Karyawan</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110005</td>
    <td>Biaya Standart Penilaian</td>
    <td>6-110005-1</td>
    <td>Biaya PTS</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-11</td>
    <td>Biaya Standart Nasional Pendidikan</td>
    <td>6-110005</td>
    <td>Biaya Standart Penilaian</td>
    <td>6-110005-2</td>
    <td>Biaya PAS</td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120001</td>
    <td>Biaya Peny Peralatan Kantor</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120002</td>
    <td>Biaya Penyewaan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>Biaya Penunjang Pembelajaran</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120003</td>
    <td>Biaya Peny Peralatan Laboratoirum</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120004</td>
    <td>Biaya Peny Peralatan Ruang Serbaguna</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120005</td>
    <td>Biaya Peny Peralatan Kantin</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120006</td>
    <td>Biaya Peny Mobil</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120007</td>
    <td>Biaya Peny Motor</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-12</td>
    <td>Biaya Penyewaan</td>
    <td>6-120008</td>
    <td>Biaya Peny Gedung</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-13</td>
    <td>Biaya Penghapusan Aset Tetap</td>
    <td>6-130001</td>
    <td>Biaya Kerugian Penjualan Aset</td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-14</td>
    <td>Biaya Lain-lain</td>
    <td>6-140001</td>
    <td>Biaya Bank</td>
    <td>6-140001-1</td>
    <td>Administrasi Bank</td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-14</td>
    <td>Biaya Lain-lain</td>
    <td>6-140002</td>
    <td>Biaya Bos</td>
    <td>6-140002-1</td>
    <td>Penyusunan Laporan Bos</td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-14</td>
    <td>Biaya Lain-lain</td>
    <td>6-140003</td>
    <td>Biaya Potongan Pemby Siswa</td>
    <td>6-140003-1</td>
    <td>Biaya potongan DPP</td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-14</td>
    <td>Biaya Lain-lain</td>
    <td>6-140003</td>
    <td>Biaya Potongan Pemby Siswa</td>
    <td>6-140003-2</td>
    <td>Biaya potongan SPP</td>
</tr>
<tr>
  <td></td>
    <td>6.1</td>
    <td>Biaya</td>
    <td>6-14</td>
    <td>Biaya Lain-lain</td>
    <td>6-140003</td>
    <td>Biaya Potongan Pemby Siswa</td>
    <td>6-140003-3</td>
    <td>Biaya potongan Kegiatan</td>
</tr>
</table>
<div class="submenu">
<br> a. Klik ikon folder atau di sebelah kanan template excel</br>
<img src="img/sias12.jpg" alt="tmplate excel"></br>
<br> b. Lalu klik Browse
<br><img src="img/sias13.jpg" alt="browse"></br>
<br> c. Lalu cari file template yang akan di upload tersebut
<img src="img/sias14.jpg" alt="tmplate excel"></br>
<br> d. Lalu klik tombol upload
<br><img src="img/sias15.jpg" alt="upload"></br>
<br> e.	Akan muncul tampilan akun yang diupload dan akan di validasi 
<img src="img/sias16.jpg" alt="tmplate excel"></br>
<br> f.	Lalu klik save untuk menyimpan akun tersebut pada sistem 
<img src="img/sias18.jpg" alt="upload"></br>
</div>
<div class="hal-hal">
<br><b>Hal yang perlu diperhatikan :</b></br>
<br></br>
<img src="img/sias19.jpg" alt="hal penting">
<br></br>
<ol>
  <li>Data atau file excel yang telah di upload tidak muncul semua ditampilan pastikan koneksi internet stabil lalu upload ulang.</li>
  <li>Data tidak valid di tampilan menu validasi akan berwarna merah dan menerangkan penyebab tidak valid.</li>
  <li>Gagal save perhatikan tampilan valid, ketika data semua sudah valid baru dapat dilakukan save. </li>
</ol>
</div>
<p>
  1.1.3 Pilihan Kedua, Menginput Akun dengan cara manual. Dengan cara User Menginputkan satu persatu, mulai dari akun induk, detail, subdetail, dan rincian.
   Perlu diperhatikan ketika memasukkan data rincian bahwa akun subdetail sudah ada. 
</p>
<br>1. Klik Data Awal→ akun <br>
<img src="img/sias_akun1.jpg" alt="snadba">
<br><br>2. Klik Induk (apabila belum ada) → isi kode induk → isi nama induk → save
<img src="img/sias_akun2.jpg" alt="">
<img src="img/sias_akun3.jpg" alt=""><br>
<br>3. Klik detail (apabila belum ada)→ pilih kode induk → kode detail akan keluar otomatis → isi nama detail akun → Save
<img src="img/sias_akun4.jpg" alt="">
<img src="img/sias_akun5.jpg" alt=""><br>
<br>4.	Klik Subdetail (apabila belum ada) → Pilih Akun Detail → Kode Sub Detail akan keluar secara Otomatis → Isi Nama Sub Detail Akun → Save 
<img src="img/sias_akun6.jpg" alt="">
<img src="img/sias_akun7.jpg" alt=""><br>
<br>5.	Klik Rincian (apabila belum ada) → Pilih Akun Sub Detail → Kode Rincian akan keluar secara Otomatis → Isi Nama Rincian Akun → Save
<img src="img/sias_akun8.jpg" alt="">
<img src="img/sias_akun9.jpg" alt=""><br>
<p><br><h3>&nbsp;&nbsp;1.2. Periode</h3>
<div class="periode">
<br>Berisikan data terkait periode masa pencatatan transaksi keuangan. Pilih tombol tambah pada tampilan menu, kemudian isikan data Periode dan nama periodenya, lalu pilih <b>“Save”</b><br>
<br>1.2.1 Klik Data Awal → Klik Periode
<img src="img/sias_akun10.jpg" alt=""><br>
<br>1.2.2	Untuk menambah atau membuat periode klik Tambah data di pojok kanan atas
<img src="img/sias_akun11.jpg" alt=""><br>
<br>1.2.3	Isi Periode dan nama Periode lalu save 
<img src="img/sias_akun12.jpg" alt=""><br>
<br>Dalam Menu Periode ini digunakan sebagai acuan untuk periode atau masa pencatatan dan laporan atas transaksi. Dan Dalam menu ini terdapat edit dan hapus yang berguna untuk mengubah terkait penamaan dan periodenya. 
</div></p>
<p><br><h3>&nbsp;&nbsp;1.3 Lokasi Aset</h3>
<div class="lok-aset">
<br>Data yang digunakan untuk mengelola aset. Diisi dengan kode lokasi, nama lokasi, dan keterangan. Untuk menambahkan data, pilih tombol tambah pada tampilan menu kemudian isikan data kode lokasi, nama lokasi, dan keterangan, lalu pilih <b>“Save”</b><br>
<br>1.3.1 Klik Data Awal → Lokasi Aset 
<img src="img/sias_akun13.jpg" alt=""><br>
<br>1.3.2	Klik Tambah data pada pojok kanan atas 
<img src="img/sias_akun14.jpg" alt=""><br>
<br>1.3.3	Isi Kode Lokasi → Isi Nama Lokasi → Isi Keterangan → Save 
<img src="img/sias_akun15.jpg" alt=""><br>
<br><u><b>Contoh Pengisian Lokasi aset</b></u>
<img src="img/sias_akun16.jpg" alt=""><br>
<br><ol type="a">
  <li>Kode Lokasi = 001</li>
  <li>Nama lokasi = Ruang Kepala Sekolah</li>
  <li>Keterangan = Ruang Kepala Sekolah</li>
  <li>Lalu Klik Save</li>
</ol>
<br>Kode lokasi ini digunakan sebagai acuan untuk penempatan letak aset agar dapat memetakan aset yang dimiliki. Dan Dalam menu ini terdapat edit dan hapus yang berguna untuk mengubah terkait Kode Lokasi, Nama Lokasi dan Keterangannya. </br>
</div></p>

<p><br><h3>&nbsp;&nbsp;1.4 Setting Aplikasi</h3>
<div class="sett-apl">
<br>Setting Aplikasi digunakan untuk mengisi data identitas sekolah diantaranya, nama unit, alamat, kepala sekolah, NIP Kepala Sekolah, staff keuangan, NIP staff.<br>
<br>1.4.1	Klik Setting → edit 
<img src="img/sias_akun17.jpg" alt=""><br>
<br>1.4.2	Klik Edit<br>  
<img src="img/sias_akun18.jpg" alt=""><br>
<br>1.4.3	Isi Alamat → Kepala Sekolah →NIP Kepala Sekolah → Kepala Keuangan →NIP 
Kepala Keuangan → Pilih Periode → Kota → Save 
<img src="img/sias_akun19.jpg" alt=""><br>
<br><u><b>Contoh isi setting aplikasi</b></u>
<img src="img/sias_akun20.jpg" alt=""><br>
<br><ol type="a">
  <li>Alamat  = Perum Mutiara Residance No. 25  </li>
  <li>Kepala Sekolah  = Ahmad </li>
  <li>NIP Kepala Sekolah = 000.111 </li>
  <li>Kepala Keuangan = Chairul </li>
  <li>NIP Kepala Keuangan = 111.000 </li>
  <li>Periode = pilih 2022/2023 </li>
  <li>Kota = surabaya </li>
  <li>Lalu klik save</li>
</ol>
<br>Setting Aplikasi digunakan untuk mengisi data identitas sekolah diantaranya, nama unit, alamat, kepala sekolah, NIP Kepala Sekolah, staff keuangan, NIP staff. Serta di Menu ini User dapat mengganti Periode Sekolah. Apabila User ingin melihat laporan tahun sebelumnya. User hanya tinggal mengganti tahun atau periode nya saja. </br>
</div></p>
            <!-- END KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
            </div>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<?php require_once("script.php") ?>