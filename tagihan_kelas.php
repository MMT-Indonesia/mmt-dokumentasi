<?php require_once("header.php") ?>
<section class="doc_documentation_area onepage_doc_area" id="sticky_doc">
    <div class="overlay_bg"></div>
    <div class="container-fluid pl-60 pr-60">
        <div class="row doc-container">
            <div class="col-lg-2 doc_mobile_menu doc-sidebar display_none">
                <?php require_once("aside.php") ?>
            </div>
            <style>
.table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.th, td {
  padding: 5px;
  text-align: left;
}
            </style>
            <div class="col-lg-10 col-md-10">
                <!-- KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->

                <h1> 1. Data Awal </h1>
                <p>Untuk persiapan Aplikasi Tagihan/Pembayaran dibutuhkan data awal sebagai master data aplikasi,
                   yang akan dibantu menggunakan dokumen excel untuk mempermudah input data master sehingga
                   implementasi dapat dilakukan secara efektif dan efisien. Pada menu data awal meliputi antaralain:</p>
                <h3>1.1 Kelas</h3>
                <p> Pada menu kelas meliputi data dari kelas yang ada pada sekolah masing masing seperti
                    tampilan berikut : <p>
                <br> 1.1.1 Klik Data Awal → Klik Kelas </br><p>
                Pada menu ini akan membuat kelas sesuai dengan kebutuhan masing masing kelas</p>
                <img src="img/tagihan1.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>1.1.2 Untuk menambah atau membuat kelas Dalam proses entry data kelas yaitu dengan melakukan tekan pada tombol Tambah yang ada pada kanan atas. 
                           <br> Proses tambah dataini memerlukan kode kelas dan nama kelas seperti data berikut :</p>
               <img src="img/tagihan2.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
               <p>1.1.3	Isi kelas → Isi nama kelas→ Lalu klik save</p>
               <img src="img/tagihan3.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
               <p>1.1.4	Untuk mengubah data kelas dengan melakukan tekan tombol action edit yang ada ada bagian kiri tabel data kemudian akan muncul data dari yang akan diedit.</p>
               <img src="img/tagihan4.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
               <p>1.1.5	Untuk melakukan hapus data dapat klik Del disamping tombol edit. Perlu diketahui ketika hapus data maka data tidak dapat dikembalikan lagi. Pastikan bahwa muncul pop up konfirmasi kemudian tekan Oke untuk melakukan hapus data seperti berikut:</p>
               <img src="img/tagihan5.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
               <p><b>Contoh Pengisian</b>
               <img src="img/tagihan6.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
               <ol type='a'>
               <li> Klik kelas</li>
               <li>Isi kelas = 1</li>
               <li>Isi nama kelas = 1 Abu Bakar</li>
               <li>Lalu klik save</li>
               </ol>
               <p><b>1.2 Siswa</b>
               <p>Pada menu siswa merupakan daftar dari siswa keseluruhan dari setiap sekolah. Pada menu siswa ini dapat melakukan entry data dengan beberapa metode.</p>
                <p><b>1.2.1 Input Siswa</b></p>
                Ada 2 cara untuk penginputan akun yakni dengan manual atau dengan uploud excel. Langkah Pertama, klik Data awal → Siswa</p>
                <img src="img/tagihan7.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p><b>1.2.2</b> Tampilan pada menu ini dapat di sesuaikan pada 2 kolom bagian kiri, dapat di sesuaikan dengan kebutuhan</p>
                <img src="img/tagihan8.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>Untuk menginput nama siswa dapat menggunakan 2 metode yaitu input manual dan upload dengan template excel</p>
                <p><b>1.2.3 </b> Untuk input manual</p>
                <img src="img/tagihan9.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>Jika ingin menambahkan Siswa pada aplikasi secara manual, maka pilih <b>“Tambah Data”</b> kemudian isikan data sesuai kolom yang di tampilkan, antara lain:</P>
                <ul>
              <li> NIS                     </li>
              <li> Nama                    </li>
              <li> Mobile / Nomor Telepon  </li>
              <li> Tahun Angkatan          </li>
              <li> Kelas                   </li>
              <li> Status                  </li>
              <li> Lalu Save               </li>              
            </ul>
            <img src="img/tagihan10.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p><b>Contoh Pengisian Manual</b><p>
            <img src="img/tagihan11.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <ol type='a'>
               <li>Klik Siswa</li>
               <li>Klik tambah siswa</li>
               <li>Isi Nama siswa = Tubagus Rajendra</li>
               <li>Mobile = 0812345678</li>
               <li>Angkatan = 2022</li>
               <li>Kelas = Tahfidz 1</li>
               <li>Statusnya = aktif</li>
               <li>Lalu klik save</li>
               </ol>
            <p><b>1.2.3 </b>Uploud Siswa dengan Cara Upload File Excel</p>
            <p>Sistem telah menyediakan template data excel untuk mengisi data siswa dengan cara upload data. Pilih <b>“Upload Excel”</b> kemudian arahkan ke directory yang menyimpan template excel file data aset untuk diupload ke aplikasi.</p>
            <p>a. Klik Upload</p>
            <img src="img/tagihan12.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p> b.Download Template Excel agar dapat disesuaikan dengan </p>
            <img src="img/tagihan 13.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p>c.Lalu Upload file excel tersebut di menu yang sama</P>
            <img src="img/tagihan14.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p>d.Klik Browse untuk upload file yang telah di sesuaikan dengan sistem</p>
            <img src="img/tagihan15.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p>e.Lalu Klik Upload </p>
            <img src="img/tagihan16.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p>f.Setelah semua tervalidasi oleh sistem maka dapat disave untuk data siswanya</P>
            <img src="img/tagihan16.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p><b>Contoh Pengisian Upload </b></p>

            <table style="width:100%">
        <tr>
            <th>no</th>
            <th>nis</th>
            <th>nama</th>
            <th>T.angkatan</th>
            <th>kelas</th>
            <th>status</th>
</tr>
<tr>
    <td>1</td>
    <td>1001</td>
    <td>Tubagus Gyuze</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>2</td>
    <td>1002</td>
    <td>Mirza Mafiah Huddin</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>3</td>
    <td>1003</td>
    <td>Viona Emraldi Hergantoro</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>4</td>
    <td>1004</td>
    <td>Rejendra Adinata</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>5</td>
    <td>1005</td>
    <td>Hasna Fitria Rahmadani</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>6</td>
    <td>1006</td>
    <td>Syakira Attamimi</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>7</td>
    <td>1007</td>
    <td>Vanessa Nur Asyifa</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>8</td>
    <td>1008</td>
    <td>Alkhalifi Ahnaf Ramadhan</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>9</td>
    <td>1009</td>
    <td>Muhammad Ayub Ar Rayyan</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>10</td>
    <td>1010</td>
    <td>Karina Aulia Rizki</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>11</td>
    <td>1011</td>
    <td>Abidzar Uwaisyah</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
<tr>
    <td>12</td>
    <td>1012</td>
    <td>Javiyan Bhanu Pradana</td>
    <td>2022</td>
    <td>1 Abu Bakar</td>
    <td>1</td>
</tr>
</table>
<p>a.Klik Ikon Folder atau disebelah kanan template excel</p>
<img src="img/tagihan18.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>b.Lalu cari file template yang akan di upload tersebut</p>
<img src="img/tagihan19.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>c.Lalu klik tombol upload</p>
<img src="img/tagihan20.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>d.Akan muncul tampilan akun yang diupload dan akan di validasi lalu klik save</p>
<img src="img/tagihan21.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
</p><b>Hal Yang Perlu Diperhatikan saat upload Excel</b></p>
<br>-Data yang telah di upload tidak muncul semua ditampilan pastikan koneksi internet stabil lalu upload ulang</br>
<br>-Data tidak valid di tampilan menu validasi akan berwarna merah dan menerangkan penyebab tidak valid</br>
<br>-Gagal save perhatikan tampilan valid, ketika data semua sudah valid baru dapat dilakukan save</br>
<p><b>1.3Tahun Pelajaran</b></p>
<p>Pada menu tahun ajaran merupakan pembuatan data tahun ajaran yang dikemudian akan diaktifkan untuk melakukan setting pendataan</p>
<p><b>1.3.1</b>Klik Data Awal → Klik Tahun Pelajaran</p>
<img src="img/tagihan22.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>Pada menu ini akan membuat Tahun Pelajaran sesuai dengan kebutuhan masing masing kelas</P>
<p><b>1.3.2	</b>Klik tambah untuk menambah atau membuat Tahun Pelajaran disebelah kanan atas</p>
<img src="img/tagihan24.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.3.3</b>	Isi Tahun Ajar → Isi Deskripsi → Lalu klik save</p>
<img src="img/tagihan25.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.3.4</b>	Pada menu ini terdapat button <b>Edit</b> dan <b>Del</b> untuk mengubah serta menyesuaikan dengan kebutuhan sekolah</P>
<img src="img/tagihan26.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
</p><b>Contoh Pengisian Tahun Pelajaran</b></p>
<img src="img/tagihan27.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<ol type='a'>
               <li> Klik Tahun Pelajaran</li>
               <li>Klik Tambah Data</li>
               <li>Isi Tahun Ajar dengan 2022/2023</li>
               <li>Isi Deskripsi dengan Tahun Ajaran 2022/2023</li>
               <li>Lalu klik save</li>
               </ol>
<p><b>1.4 Akun</b></p>
<p>Menu ini dapat menambah akun akuntansi akan tetapi hanya akun <b>Subdetail</b>dan<b> Rincian</b> Yang akan langsung terhubung dengan sistem akuntansi / SIAS</p>
<p><b>1.4.1</b>	Klik Data Awal → Klik Akun</p>
<p><b>1.4.2</b>	Pada menu ini dapat menambah akun akan tetapi hanya jenis<b> subdetail</b> dan <b>rincian</b></P>
<img src="img/tagihan29.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>Pada menu ini apabila akan menambah akun akan tersinkron juga dengan akun yang ada di SIAS</P>
<p><b>1.4.3</b>	Klik tambah<b> subdetail </b> untuk menambah <b>subdetail</b></p>
<img src="img/tagihan30.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.4.4</b>	Lalu pilih akun subdetailnya → Kode rincian akan terisi otomatis → Sesuaikan Nama
<b>rincian</b> lalu save</p>
<img src="img/tagihan31.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.4.5</b>Untuk tambah rincian pengisiannya hampir sama</P>
<p><b>Contoh Pengisian Sub Detail</b><p>
<img src="img/tagihan32.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<ol type='a'>
               <li>Klik akun</li>
               <li>Klik tambah subdetail</li>
               <li>Akun detail = Kas Setara Kas</li>
               <li>Kode Sub Detail Akan Terisi Otomatis</li>
               <li>Nama subdetail = Bank Lainnya</li>
               <li>Lalu save </li>
               </ol>
<P>NB
<br>-Ketika melakukan penambahan akun disini baik subdetail maupun rincian akan menambah juga akun pada SIAS karena tersinkron</br></p>
<p><b>1.5 Pos Tagihan</b></p>
<p>Pada Pos Tagihan memiliki fungsi untuk membuat tagihan kepada siswa, tagihan ini akan dibayarkan oleh siswa</P>
<p><b>1.5.1</b>Klik Data Awal → Klik Pos Tagihan</p>
<img src="img/tagihan33.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>Pada menu ini akan membuat tagihan kepada siswa</p>
<p><b>1.5.2</b>Klik tambah untuk membuat tagihan disebelah kanan atas</p>
<img src="img/tagihan34.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.5.3</b>	Kode akan terisi otomatis → Isi Nama pos → Pilih Jenis (Bulanan, Tahunan, Cicilan) → Pilih Akun Penerimaan, Akun Piutang, Akun Potongan → Lalu isi deskripsi dan save</p>
<img src="img/tagihan35.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>Contoh Pengisian Pos Tagihan</b></p>
<ol type='a'>
               <li>Klik Pos Tagihan</li>
               <li>Klik Tambah</li>
               <li>Isi Nama Pos dengan SPP</li>
               <li>Pilih Jenis Bulanan</li>
               <li>Pilih Akun Penerimaan = 4-110001 akun pendapatan SPP</li>
               <li>Pilih Akun Piutang = 1-120001-2 akun piutang pendapatan SPP</li>
               <li>Pilih Akun potongan = 6-140003-2 Biaya potongan pendapatan SPP</li>
               <li>Isi deskripsi dengan Penerimaan SPP</li>
               <li>lalu Save</li>
               </ol>
               <p><b>1.6Tagihan Siswa</b></p>
               <p>Pada tagihan siswa memiliki fungsi untuk menambahkan tagihan dari pembuatan pos tagihan kepada siswa untuk berjalannya frekuensi tagihan</p>
               <p><b>1.6.1</b>	Klik Data Awal → Klik Tagihan Siswa</b>
               <img src="img/tagihan36.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p>Pada menu ini dapat membuat tagihan yang telah dibuat untuk di tagihan ke masing- masing siswa</p>
<p><b>1.6.2</b>	Untuk tampilan dapat diatur di pilihan siswa sebelah kiri dan dapat di search sesuai nama siswan atau NISnya</p>
<img src="img/tagihan37.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.6.3</b>	Klik Tambah untuk menambah atau membuat tagihan ke siswa</p>
<img src="img/tagihan38.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.6.4	</b>Sesuaikan untuk pembuatan tagihan siswa</P>
<p><b>1.6.5</b>	Lalu isi pos tagihan yang akan di tagihkan ke siswa</p>
<p><b>1.6.6	</b>Ketika sudah klik save</p>
<img src="img/tagihan39.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.6.7	</b>Untuk mengubah klik ubah lalu sesuaikan yang ingin diubah setelah itu save</p>
<p><b>1.6.8</b>	Pada menu ini juga terdapat upload yakni upload tagihan & Tunggakan, serta upload terbayar dengan template yang telah di sediakan sistem</p>
<img src="img/tagihan40.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.6.9</b>	Menu prev untuk mencetak tagihan atau tunggakan siswa</p>
<p><b>1.6.10</b>Menu cari untuk memfilter tampilan sesuai kebutuhan</p>
<p><b>Contoh Pengisian Manual</b></p>
<ol type='a'>
               <li>Klik Tagihan</li>
               <li>Klik Tambah</li>
               <li>Buat Tagihan per pilih dengan semua siswa</li>
               <li>Tahun ajaran pilih 2022/2023</li>
               <li>Online payment pilih ya</li>
               <li>Lalu Centang Infaq pembangunan dan isi nominal dengan Rp. 4.000.000</li>
               <li>Lalu Centang SPP dan isi nominal dengan Rp. 500.000</li>
               <li>Lalu Centang Kegiatan siswa dan isi nominal dengan Rp. 2.000.000</li>
               <li>Lalu klik save maka tagihan tersebut akan masuk ke setiap siswa</li>
               </ol>
<p><b>Contoh Pengisian Upload Tagihan dan tunggakan</b></P>

<table style="width:100%">
<tr>
            <th>no</th>
            <th>nis</th>
            <th>pos_tagihan</th>
            <th>Nama_tagihan</th>
            <th>nominal</th>
            <th>Potongan</th>
            <th>Jenis Tagihan</th>
            <th>Tahun_Ajaran</th>
            <th>Bulan</th>
</tr>
<tr>
    <td>1</td>
    <td>4565</td>
    <td>002</td>
    <td>SPP Mei 2022</td>
    <td>250000</td>
    <td>0</td>
    <td>1</td>
    <td>2021/2022</td>
    <td>17</td>
</tr>
<tr>
    <td>1</td>
    <td>4565</td>
    <td>003</td>
    <td>SPP Juni 2022</td>
    <td>500000</td>
    <td>0</td>
    <td>1</td>
    <td>2021/2022</td>
    <td>18</td>
</tr>
<tr>
<td>1</td>
    <td>4565</td>
    <td>003</td>
    <td>SPP April 2022</td>
    <td>500000</td>
    <td>0</td>
    <td>1</td>
    <td>2021/2022</td>
    <td>16</td>
</tr>
<tr>
<td>1</td>
    <td>4565</td>
    <td>001</td>
    <td>SPP Maret 2022</td>
    <td>2500000</td>
    <td>0</td>
    <td>1</td>
    <td>2021/2022</td>
    <td>15</td>
</tr>
<td>1</td>
    <td>4565</td>
    <td>002</td>
    <td>SPP Febuari 2022</td>
    <td>7500000</td>
    <td>0</td>
    <td>1</td>
    <td>2021/2022</td>
    <td>14</td>
</tr>
</table>
<ol type='a'>
               <li>Klik Tagihan</li>
               <li>Klik Upload Tagihan & Tunggakan</li>
               <li>Download template dan sesuaikan dengan kebutuhan</li>
               <li>Untuk panduan pengisian bulan ada pada template excel sheet 2</li>
               <li>Klik Ikon Folder atau disebelah kanan template excel</li>
               <li>Lalu cari file template yang akan di upload tersebut</li>
               <li>Lalu Centang SPP dan isi nominal dengan Rp. 500.000</li>
               <li>Lalu klik tombol upload</li>
               <li>Akan muncul tampilan akun yang diupload dan akan di validasi</li>
               <li>Lalu klik save untuk menyimpan akun tersebut pada sistem</li>
            </ol>
<p><b>Contoh Upload Terbayar</b></p>
<ol type='a'>
               <li>Klik Tagihan</li>
               <li>Klik Upload Tagihan Terbayar</li>
               <li>Sebelum melakukan upload hapus terlebih dahulu tagihan terbayar yang akan diupload</li>
               <li>Download template dan sesuaikan dengan kebutuhan</li>
               <li>Untuk panduan pengisian bulan ada pada template excel sheet 2</li>
               <li>Klik Ikon Folder atau disebelah kanan template excel</li>
               <li>Lalu cari file template yang akan di upload tersebut</li>
               <li>Lalu klik tombol upload</li>
               <li>Akan muncul tampilan akun yang diupload dan akan di validasi</li>
               <li>Lalu klik save untuk menyimpan akun tersebut pada sistem </li>
            </ol>
<p>NB: Masalah Saat Upload
<br>-Saat upload tunggakan tahun sebelumnya maka tunggakan akan masuk ke piutang dan akan terjurnal otomatis di sias, begitu pula apabila tunggakan atau piutang tersebut dihapus maka di sias juga akan terhapus
<br>-Data yang telah di upload tidak muncul semua ditampilan pastikan koneksi internet stabil lalu upload ulang
<br>-Data tidak valid di tampilan menu validasi akan berwarna merah dan menerangkan penyebab tidak valid
<br>-Gagal save perhatikan tampilan valid, ketika data semua sudah valid baru dapat dilakukan save</br></p>
<p><b>1.7 Setting Tahun Ajaran <P></b>
<p>Setting tahun ajaran meliputi data profile sekolah seperti alamat, tahun ajaran yang digunakan, setting Virtual Account, hingga setting untuk printer yang digunakan untuk menyesuaikan bentuk kwitansi yang akan di cetak.</p>
<p><b>1.7.1</b> Klik Data Awal → Klik Setting</p>
<p><b>1.7.2	</b>Edit</p>
<img src="img/tagihan41.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<img src="img/tagihan42.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>1.7.3</b>Isi Alamat → Pilih Tahun Ajar yang ingin digunakan → Pilih Versi print yang ingin digunakan (akan berpengaruh terhadapa cetak kwitansi nantinya) → Lalu Save</p>
<img src="img/tagihan43.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<p><b>Contoh isi Setting Tahun Ajaran</b></p>
<img src="img/tagihan44.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
<ol type='a'>
               <li>Klik Setting</li>
               <li>Pilih tahun ajaran 2022/2023</li>
               <li>Pilih Versi print default</li>
               <li>Lalu klik save </li>
            </ol>
            <p>NB
            <br>-Setting Aplikasi digunakan untuk mengatur tahun ajaran serta mensetting cetak kwitansi dari sistem</br></p>


<!-- END KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
            </div>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<?php require_once("script.php") ?>