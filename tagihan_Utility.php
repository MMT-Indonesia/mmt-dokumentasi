<?php require_once("header.php") ?>
<section class="doc_documentation_area onepage_doc_area" id="sticky_doc">
    <div class="overlay_bg"></div>
    <div class="container-fluid pl-60 pr-60">
        <div class="row doc-container">
            <div class="col-lg-2 doc_mobile_menu doc-sidebar display_none">
                <?php require_once("aside.php") ?>
            </div>
            <div class="col-lg-10 col-md-10">
                <h1><b>Utility</b></h1>
                <P><b>4.1</b>Naik kelas</P>
                <p>Untuk melakukan migrasi data ditahun ajaran baru dengan melakukan naik kelas. Untuk melakukan <b>naik kelas harus terdapat kelas yang bernama “LULUS”</b></P>
                <img src="img/tagihan91.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>Untuk melakukan naik kelas dapat melalui 2 metode yakni</p>
                <p> <b>a.</b>Per siswa</p>
                <img src="img/tagihan92.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>Apabila persiswa dapat menekan asal kelas kemudian tujuan kelas dan memilih siswa yang akan diluluskan</p>
                <p><b>b.</b>Per Kelas</p>
                <img src="img/tagihan93.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p>Untuk perkelas dapat memilih asal dan tujuan kelas kemudian proses</p>
                <p><b>4.2User Previlege</b></p>
                <p>Menu ini berfungsi untuk menyeting Sub User, apabila Tagihan digunakan beberapa orang. Maka setiap orang bisa dibuatkan user dan password sendiri. Dengan pilihan menu yang sudah dipilihkan.</p>
                <p><b>4.2.1</b>	Klik Utility → User Previlage</p>
                <img src="img/tagihan94.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <p></b>4.22</b></p>
                <p><b>4.2.3</b>	Pada menu ini dapat menambah atau menghapus user</p>
                <p><b>4.2.4	Pada menu ini juga dapat mengatur user tersebut dapat mengakses menu tertentu</b></p>
                <p><b>4.2.5</b>	Klik save untuk menyimpan</p>
                <p><b>Contoh Pengisian</b>
                <img src="img/tagihan95.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
                <ol type='a'>
               <li>Klik User previlage</li>
               <li>Klik tambah</li>
               <li>Username diisi bendahara</li>
               <li>Nama diisi bendahara</li>
               <li>NIP diisi 000.111</li>
               <li>Lalu password diisi 12345</li>
               <li>Konfirmasi password yang telah dibuat dengan mengisi ulang 12345</li>
               <li>Lalu centang akses hanya pada menu report</li>
               <li>Lalu klik save</li> 
            </ol>
            <p>NB
            <br>-Pada menu ini tidak dapat mengubah username, apabila ingin mengubah username harus membuat akun user baru
            <br>-Pada menu ini dapat menghapus user dan mensetting akses user</br></p>
            <p><b>4.3User</b></p>
            <p>Menu User berfungsi untuk menganti user dan password induk user.</p>
            <p><b>4.3.2</b>Klik Utility → User</P>
            <img src="img/tagihan96.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p><b>4.3.3</b>Pada menu ini dapat mengubah nama user yang sedang digunakan</P>
            <p><b>4.3.4</b>	Pada menu ini juga dapat mengganti password user yang sedang digunakan</p>
            <P><b>4.3.5</b>Klik save untuk menyimpan</p>
            <p><b>Contoh Pengisian</b></p>
            <ol type='a'>
               <li>Klik User </li>
               <li>Nama awal user sekolah diganti dengan bendahara</li>
               <li>Lalu password diganti 12345</li>
               <li>Lalu klik save </li>
            </ol>
             <p>NB
             <br>Pada menu ini tidak dapat mengubah username, apabila ingin mengubah username harus membuat akun user baru, untuk membuat user baru ada pada menu user previlage</br></p>
            <p><b>4.4Activity Log</b></p>
            <p>Menu ini akan menampilkan aktivitas yang dilakukan oleh setiap user yang mengakses tagihan</p>
            <p><b>4.4.1</b>Klik Activity Log</p>
            <img src="img/tagihan97.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p><b>4.4.2</b>	Pada menu ini akan menampilkan aktivitas transaksi user</p>
            <p><b>4.4.3</b>	Pada menu ini akan terlihat user melakukan transaksi atas nama siswa lengkap beserta dengan jamnya</p>
            <img src="img/tagihan98.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p><b>4.4.4</b>	Pada menu ini juga dapat di filter tampilan dengan berdasarkan username, fitur, dan activity</p>
            <img src="img/tagihan99.jpg" alt="img/produk.png" class="img-fluid d-block m-auto" width="700px">
            <p>NB
            <br>-Menu ini akan menampilkan seluruh riwayat aktivitas yang dilakukan oleh user mulai dari input siswa, tagihan, hingga cancel transaksi beserta dengan waktu</br></p>

            <!-- END KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
        </div>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<?php require_once("script.php") ?>