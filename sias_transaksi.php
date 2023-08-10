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

                <p>
                    <h2>3. Transaksi</h2>
                    Menu transaksi dalam aplikasi berfungsi untuk melakukan semua pencatatan transaksi keuangan berdasarkan pos transaksinya. Aplikasi Akuntansi / SIAS. <br>
                     <br><h3>3.1 Pencatatan Kas Kecil</h3>
                     Menu ini berfungsi untuk menampilkan rekap data pencatatan transaksi kas kecil yang dimana transaksi terebur secara rutin keluar disetiap bulannya. Rekap data transaksi 
                     yang ditampilkan meliputi hari/tanggal transaksi, Nomor Transaksi, Akun Debet, Nominal dan Keterangan. <br>
                     <br>3.1.1 Klik Transaksi → Klik pencatatan kas kecil
                     <img src="img/transaksi1.jpg" alt=""><br>
                     <br>3.1.2	Pilih bulan tampilan <br>
                     <img src="img/transaksi2.jpg" alt=""><br>
                     <br>3.1.3	Klik tambah data <br>
                     <img src="img/transaksi3.jpg" alt=""><br>
                     <br>3.1.4	Kolom No. Transaksi akan terisi secara otomatis sesuai setting penomoran pada aplikasi, demikian pula kolom tanggal (otomatis terisi tanggal input) tetapi bisa juga diisi sesuai kebutuhan user. Selanjutnya Isi tanggal 
                     → Pilih akun debet → isi nominal → isi keterangan sesuai dengan kebutuhan →  klik <b>“Save”</b>
                     <img src="img/transaksi4.jpg" alt=""><br>
                     <br>3.1.5	Apabila ada yang perlu dirubah dapat klik edit, jika sudah benar klik proses posting
                     <img src="img/transaksi5.jpg" alt=""><br>
                     <br>3.1.6	Proses posting ini untuk membuat bukti kas keluar atau BKK yang akan berhubungan pada menu transaksi pengeluaran untuk penjurnalan
                     <br><img src="img/transaksi6.jpg" alt=""><br>
                     <br>3.1.7	Klik rekap untuk melihat riwayat pencatatan kas kecil 
                     <img src="img/transaksi7.jpg" alt=""><br>
                     <br><b><u>Contoh Pengisian:</u></b>
                     <br><img src="img/transaksi8.jpg" alt=""><br>
                     <br>a.	Isi tanggal =  1 Agustus 2022 
                        <br>b.	Akun debet =  6-110003-1 Operasional Sarana Rutin 
                        <br>c.	Nominal =  Rp.700.000 
                        <br>d.	Isi Kolom Keterangan = Biaya Listrik 
                        <br>e.	Klik Save 
                        <br>f.	setelah semuanya benar dan tidak ada yang dirubah lalu klik posting. <br>
                    <img src="img/transaksi9.jpg" alt=""><br>
                        <br>g.	Dan cek di rekap posting untuk memastikan sudah terinput 
                        <img src="img/transaksi10.jpg" alt=""><br>
                        <br><b>Yang Perlu diperhatikan:</b>
                        menu ini dapat diedit sebelum dilakukan posting
                </p>
                <p>
                    <h3>3.2 Pembayaran Siswa</h3>
                    Menampilkan rekap data penerimaan SPP peserta didik yang terkoneksi dengan aplikasi tagihan Madinapay. Rekap data yang ditampilkan meliputi nomor, NIS, nama, POS, tagihan, nominal, potongan, bayar, tanggal bayar, jenis pembayaran (tahunan / bulanan), kelas, tahun ajaran
                    (menyesuaikan periode), no VA, referensi bank, nomor transaksi, akun, akun piutang dan akun potongan. Perlu diketahui bahwa menu ini sinkron dengan sistem Tagihan, sehingga untuk menggunakan menu ini maka perlu dilakukan transaksi pembayaran pada sistem Tagihan. <br>
                    <br>3.2.1	Klik Transaksi → Klik pembayaran siswa 
                    <br><img src="img/transaksi2.1.jpg" alt=""><br>
                    <br>3.2.2	Tampilan menu ini berdasarkan tanggal yang tertera pada pojok kiri dan dapat dipilih. User dapat mencari data 
                    yang akan diproses sesuai kolom yang disediakan. Kemudian setelah rekap data ditampilkan pilih “Proses Posting” untuk mendapatkan nomor BKM (otomatis dari aplikasi). Pilih “OK” untuk validasi nomor BKM dari sistem. 
                    <br><img src="img/transaksi2.2.jpg" alt=""><br>
                    <br>3.2.3	Setelah tampilan sudah sesuai klik posting untuk meposting transaksi tersebut
                    <br><img src="img/transaksi2.3.jpg" alt=""><br>
                    <br>3.2.4	Kemudian pilih “Rekap Posting” untuk menampilkan rekap data hasil proses posting (sudah mendapatkan nomor BKM). Sesuai tampilan berikut : 
                    <br><img src="img/transaksi2.4.jpg" alt=""><br>
                    <br>3.2.5	Proses posting ini untuk membuat bukti kas masuk atau BKM yang akan berhubungan pada menu transaksi penerimaan untuk penjurnalan 
                    <br><img src="img/transaksi2.5.jpg" alt=""><br>
                    <br>3.2.6	Lalu untuk kebutuhan pelaporan dan lainnya, data yang ditampilkan bisa di tampilkan dalam file excel dengan memilih tombol “Export” 
                    <br><img src="img/transaksi2.6.jpg" alt=""><br>
                    <br>Klik search untuk mencari berdasarkan nama siswa atau jenis tagihannya 
                    <br><img src="img/transaksi2.7.jpg" alt=""><br>
                  <br><b><u>Contoh Soal dan Pengisian:</u></b>
                   <br>Pada Tanggal 2 Agustus 2021, Sekolah Menerima Pembayaran SPP dari Siswa 
                   Tubagus Gyuze Kelas 1 Abu Bakar SEBESAR Rp. 500.000,- 
                    <br>a.	Pastikan bahwa telah terjadi transaksi tersebut pada sistem Tagihan agar dapat diproses disistem SIAS 
                    <br>b.	Pilih tanggal yang ada di pojok kanan → 2 Agustus → posting 
                    <br>c.	Lalu klik rekap posting  
                    <br>d.	Atur tanggal bayar 1 Agustus untuk mengecek  
                    <br>e.	Kalau sudah semua klik back 
                <br><b>Hal yang perlu diperhatikan</b>
                <br> a)Menu ini memudahkan bendahara untuk pencatatan penerimaan pembayaran siswa yang ada di sistem tagihan karena langsung disinhkronkan dengan sias.
                 Jadi bendahara tidak perlu input manual guna meminimalisir kesalahan pencatatan. 
                </p>
            <p>
               <h3>3.3 Input Penerimaan Kas</h3> 
               Pencatatan transaksi penerimaan kas dilakukan pada menu ini. Rekap data yang ditampilkan meliputi nomor, hari / tanggal (otomatis hari ini), 
               nomor BKM (otomatis), akun kredit (pilihan), nominal, keterangan dan status (Draft). <br>
                <br>3.3.1 Klik Input Penerimaan Kas 
                <br><img src="img/transaksi3.1.jpg" alt=""><br>
                <br>3.3.2 Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi3.2.jpg" alt=""><br>
                <br>3.3.3 Klik Tambah data untuk menginput penerimaan 
                <br><img src="img/transaksi3.3.jpg" alt=""><br>
                <br>3.3.4 Lalu isi tanggal → akun kredit → nominal → keterangannya → save. 
                <br><img src="img/transaksi3.4.jpg" alt=""><br>
                <br>3.3.5 Proses posting ini untuk membuat bukti kas masuk atau BKM yang akan berhubungan pada menu transaksi 
                penerimaan untuk penjurnalan. Pilih “BKM” untuk mencetak hasil input data penerimaan kas yang sudah mendapatkan nomor BKM sebagai bukti pemasukan kas yang disahkan dengan tandatangan dari kepala sekolah dan bendahara sekolah. 
                <br><img src="img/transaksi3.5.jpg" alt=""><br>
                <br>3.3.6 Setelah itu dapat mencetak pengajuan pengeluaran guna di tanda tangani oleh kepala sekolah dengan klik bagian BKM. 
                <br><img src="img/transaksi3.6.jpg" alt=""><br>
                Berikut Output BKM (Bukti Kas Masuk) 
                <br><img src="img/transaksi3.7.jpg" alt=""><br>
                <br><b>Contoh:</b>
                <br>Pada Tanggal 3 Agustus 2021, Sekolah A menerima Bantuan dari PRM terdekat yang diperuntukan untuk Siswa yang maraih Rangking 1 dikelas 11 sebesar Rp. 10.000.000,- 
                <br>a.	Klik tambah data 
                <br><img src="img/transaksi3.8.jpg" alt=""><br>
                <br>b.	Isi tanggal 3 Agustus 2022 
                <br><img src="img/transaksi3.9.jpg" alt=""><br>
                <br>c.	Isi akun kredit = 4-130001 Pendapatan Eksternal 
                <br>d.	Nominal =  10.000.000 
                <br>e.	Keterangan =  Bantuan PRM untuk siswa rangking 1-10 
                <br>f.	Klik save 
            <br><b><u>Hal Yang Perlu Diperhatikan:</u></b>
            <br>Menu ini tidak hanya untuk input manual penerimaan pembayaran siswa,
             bisa juga untuk input penerimaan yang datang dari luar seperti halnya penerimaan dana donatur atau dana pemerintahan seperti BOS/BOSDA/BPOPP dsb. 
            </p>
            <p>
                <h3>3.4 Input Pengeluara Kas</h3>
                Data inputan dimenu ini meliputi nomor, hari / tanggal (otomatis hari ini), nomor BKM (otomatis), akun debet (pilihan), nominal, keterangan, pembelian aset (checklist), pembangunan (checklist) dan status (Draft). <br>
                <br>3.4.1	Klik Input Pengeluaran Kas 
                <br><img src="img/transaksi4.1.jpg" alt=""><br>
                <br>3.4.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan. 
                <br><img src="img/transaksi4.2.jpg" alt=""><br>
                <br>3.4.3	Klik Tambah data untuk menginput pengeluaran 
                <br><img src="img/transaksi4.3.jpg" alt=""><br>
                <br>3.4.4	Lalu isi tanggal → akun debet → nominal → nama penerima → keterangannya → save 
                <br><img src="img/transaksi4.4.jpg" alt=""><br>
                <br>3.4.5	Kolom Centang yang tersedia berfungsi saat ada Pengeluaran untuk pembelian aset atau untuk Pembangunan Gedung. Jadi Apabila Trnsaksi pengeluaran tidak berhubungan dengan pembelian aet atau pembangunan gedung maka tidak perlu dicentang. 
                <br><img src="img/transaksi4.5.jpg" alt=""><br>
                <br>3.4.6	Proses posting ini untuk membuat bukti kas keluar atau BKK yang akan berhubungan pada menu transaksi pengeluaran untuk penjurnalan 
                <br><img src="img/transaksi4.6.jpg" alt=""><br>
                <br>3.4.7	Setelah itu dapat mencetak pengajuan pengeluaran guna di tanda tangani oleh kepala sekolah dengan klik bagian BKK 
                <br><img src="img/transaksi4.7.jpg" alt=""><br>
                <br><img src="img/transaksi4.8.jpg" alt=""><br>

                <br>Berikut Output BKK (Bukti Kas Keluar)
                <br><img src="img/transaksi4.9.jpg" alt=""><br> 
                <br><b>Contoh:</b>
                Pada Tanggal 4 Agustus 2021, Pak Adhi Kepala Lab membeli Peralatan Laboratorium Sebesar Rp. 50.000.000,- 
                <br>a.	Klik tambah data 
                <br><img src="img/transaksi4.10.jpg" alt=""><br>
                <br>b.	Isi tanggal 4 Agustus 2022 
                <br><img src="img/transaksi4.11.jpg" alt=""><br>
                <br>c.	Isi akun debet = 1-210003 Peralatan Laboratorium 
                <br>d.	Nominal = Rp 50.000.000 
                <br>e.	Penerima =  Pak Adhi 
                <br>f.	Keterangan = Pembelian Peralatan Laboratorium 
                <br>g.	Centang Pembelian Aset dikarenakan melakukan pembelian aset 
                <br>h.	Klik save
                <br>Pada Tanggal 6 Agustus 2021, Waka Sarpras Mengajukan Permohonan Dana untuk Membangunan Musholah Sekolah sebesar Rp. 150.000.000,- 
                <br><img src="img/transaksi4.12.jpg" alt=""><br>  
                <br>a.	Isi akun debet = 1-130001 Bangunan Dalam Proses 
                <br>b.	Nominal = Rp 150.000.000 
                <br>c.	Penerima =  Wakasarpras 
                <br>d.	Keterangan = Permohonan Pembangunan Mushola 
                <br>e.	Centang Pembangunan dikarenakan melakukan Pembangunan 
                <br>f.	Klik save 
                <br>g.	Klik BKK dan di cetak untuk diajukan dan di tanda tangani oleh kepala sekolah
                <br><img src="img/transaksi4.13.jpg" alt=""><br>
                <br><img src="img/transaksi4.14.jpg" alt=""><br>
                <br><b>Yang Perlu diperhatikan :</b>
                <br>a) Menu ini untuk input pengeluaran yang dilakukan dan membuat BKK agar dapat terhubung dengan transaksi pengeluaran untuk pembuatan jurnal. 
                <br>b)	Pada menu ini juga terdapat kotak pembelian aset dan pembangunan yang juga masing-masing terhubung dengan menu pembelian aset dan jurnal penyelesaian pembangunan. 
            </p>

            <p>
                <h3>3.5 Persetujuan Pencairan Giro</h3>
                Data persetujuan pencairan meliputi nomor, tanggal (otomatis hari ini), jenis (pilihan), bank, nomor slip, nominal, keterengan dan nomor BKK (pilihan). <br>
                <br>3.5.1	Klik Persetujuan Pencairan Cek/Giro 
                <br><img src="img/transaksi5.1.jpg" alt=""><br>
                <br>3.5.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan  
                <br><img src="img/transaksi5.2.jpg" alt=""><br>
                <br>3.5.3	Klik Tambah Data  
                <br><img src="img/transaksi5.3.jpg" alt=""><br>
                <br>3.5.4	Kemudian isi jenis → isi tanggal → isi Bank →isi No Slip/Cek/Giro →Pilih BKK → klik tambah → lalu save 
                <br><img src="img/transaksi5.4.jpg" alt=""><br>
                <br>3.5.5	Setelah itu klik voucher untuk mencetak pencairan cek/giro  
                <br><img src="img/transaksi5.5.jpg" alt=""><br>
                <br>3.5.6	Setelah itu, File excel yang berisikan Blangko Pencairan Cek/Giro secara otomatis akan terdownload.  
                <br><img src="img/transaksi5.6.jpg" alt=""><br>
            </p>
            <p>
                <br>
                <h3>3.6 Transaksi Penerimaan Kas</h3>
                Dimenu ini User Menjurnal kan input penerimaan yang sudah di inputkan di menu Input Penerimaan Kas. <br>
                <br>3.6.1	Klik transaksi penerimaan kas  
                <br><img src="img/transaksi6.1.jpg" alt=""><br>
                <br>3.6.2	Tampilan dapat disesuaikan dengan bulan yang diinginkan  
                <br><img src="img/transaksi6.2.jpg" alt=""><br>
                <br>3.6.3	Klik Tambah Data   
                <br><img src="img/transaksi6.3.jpg" alt=""><br>
                <br>3.6.4	Pilih BKM yang diinginkan  
                <br><img src="img/transaksi6.4.jpg" alt=""><br>
                <br>a.	No Jurnal Akan Otomatis Muncul 
                <br>b.	Pilih BKM yang akan ditransaksikan 
                <br>c.	Otomatis keterangan dan akun kredit akan terisi sesuai BKM yang dipilih 
                <br>d.	Sesuaikan tanggal transaksi 
                <br>e.	Sesuaikan anggaran transaksi 
                <br>f.	Sesuaikan akun debet 
                <br>g.	Lalu isi nominal sesuai dengan total yang ada 
                <br>h.	Klik tambah 
                <br>i.	Lalu di save <br>
                <br><b>Contoh</b>
                <br><img src="img/transaksi6.5.jpg" alt=""><br>
                <br>a.	Tanggal 1 Agustus 2022 
                <br>b.	Pilih BKM 001/BKM/08/2022 
                <br>c.	Pilih Anggaran = Penerimaan SPP 
                <br>d.	Pilih Akun Debet = kas tangan 
                <br>e.	Isi Nominal sesuai dengan total Rp 500.000 
                <br>f.	Lalu klik tambah 
                <br>g.	Kemudian klik save 
                <br>h.	Data akan terjurnal dan dapat dilihat di tampilan
                <br><img src="img/transaksi6.6.jpg" alt="">
                <br><b>Yang Perlu Diperhatikan:</b>
                <br>a)	Menu ini akan menjurnal transaksi, sehingga tidak dapat melakukan edit di BKM  
                <br>b)	Apabila ingin mengedit di BKM maka hapus terlebih dahulu jurnal yang sudah dijurnalkan kemudia kembali ke menu input penerimaan kas untuk mengedit transaksi tersebut.
            </p>
            <p>
                <h3>3.7 Transaksi Pengeluaran Kas</h3>
                Dimenu ini User Menjurnal kan input Pengeluaran yang sudah di inputkan di menu Input Pengeluaran Kas. <br>
                <br>3.7.1	Klik transaksi pengeluaran kas 
                <br><img src="img/transaksi7.1.jpg" alt=""> <br>
                <br>3.7.2	Tampilan dapat disesuaikan dengan bulan yang diinginkan 
                <br><img src="img/transaksi7.2.jpg" alt=""> <br>
                <br>3.7.3	Klik Tambah data  
                <br><img src="img/transaksi7.3.jpg" alt=""> <br>
                <br>3.7.4	Pilih BKK yang diinginkan 
                <br><img src="img/transaksi7.4.jpg" alt=""> <br>
                <br>a.	No Jurnal Akan Otomatis Muncul 
                <br>b.	Pilih BKK yang akan ditransaksikan 
                <br>c.	Otomatis keterangan dan akun Debet akan terisi sesuai BKM yang dipilih 
                <br>d.	Sesuaikan tanggal transaksi 
                <br>e.	Sesuaikan anggaran transaksi 
                <br>f.	Sesuaikan akun kredit 
                <br>g.	Lalu isi nominal sesuai dengan total yang ada 
                <br>h.	Klik tambah 
                <br>i.	Lalu di save 
                <br><b>Contoh:</b>
                <br><img src="img/transaksi7.5.jpg" alt=""> <br>
                <br>a.	Tanggal 31 Agustus 2022 
                <br>b.	Pilih BKK 001/BKK/08/2022 
                <br>c.	Pilih Anggaran = Biaya Sarana dan Prasarana 
                <br>d.	Pilih Akun kredit = kas tangan 
                <br>e.	Nominal sesuai dengan total Rp 700.000 
                <br>f.	Lalu klik tambah  
                <br>g.	Kemudian Klik save 
                <br>h.	Data akan terjurnal dan dapat dilihat di tampilan
                <br><img src="img/transaksi7.6.jpg" alt=""> <br>
                <br>Permohonan Pengajuan Pembangunan Mushola yang diajukan oleh Wakasarpras 
                tanggal 6 Agusutus telah di setujui oleh Kepala Sekolah ditanggal 8 Agustus dan keuangan dapat menginput ke jurnal pengeluaran 
                <br><img src="img/transaksi7.7.jpg" alt=""> <br>
                <br>a.	Tanggal 8 Agustus 2022 
                <br>b.	Pilih BKK 003/BKK/08/2022 
                <br>c.	Pilih Anggaran = Biaya Sarana dan Prasarana 
                <br>d.	Pilih Akun kredit = kas Bank 
                <br>e.	Nominal sesuai dengan total Rp 150.000.000 
                <br>f.	Lalu klik tambah  
                <br>g.	Kemudian Klik save 
                <br>h.	Data akan terjurnal dan dapat dilihat di tampilan
                <br><img src="img/transaksi7.8.jpg" alt=""> <br> 
                <br><b>Yang perlu diperhatikan:</b> 
                <br>a)	Menu ini akan menjurnal transaksi, sehingga tidak dapat melakukan edit di BKK 
                <br>b)	Apabila ingin mengedit di BKK maka hapus terlebih dahulu jurnal yang sudah dijurnalkan kemudia kembali ke menu input pengeluaran kas untuk mengedit transaksi tersebut.  
            </p>
            <p>
                <h3>3.8 Transaksi jurnal umum </h3>
                Menu ini menampilkan rekap transaksi yang sudah di jurnal secara akunting. Data transaksi untuk jurnal umum meliputi nomor memo (otomatis), tanggal (otomatis hari ini), 
                anggaran (pilihan), Nomor BKM / BKK (sesuai jenis transaksi), akun debet / akun kredit (sesuai jenis transaksi), dan keterangan. <br>
                <br>3.8.1	Klik Jurnal umum 
                <br><img src="img/transaksi8.1.jpg" alt=""><br>
                <br>3.8.2	Pada menu ini dapat melakukan apa yang seperti dimenu transaksi penerimaan dan pengeluaran kas 
                <br>3.8.3	Tampilan pada menu ini dapat di sesuaikan dengan bulan yang diinginkan
                <br><img src="img/transaksi8.2.jpg" alt=""><br>
                <br>3.8.4	Klik Tambah Data 
                <br><img src="img/transaksi8.3.jpg" alt=""><br>
                <br>3.8.5	Juga dapat memasukkan BKM atau BKK seperti menu sebelumnya
                <br><img src="img/transaksi8.4.jpg" alt=""><br>
                <br>Apabila memilih BKM maka otomatis kolom kredit akan terisi sebaliknya juga begitu klik BKK maka kolom debet akan otomatis terisi. Begitu pula kolom nominal juga akan otomatis muncul. 
                <br>3.8.6	Pilih Akun Debet apabila BKM sedangkan pilih Akun Kredit apabila BKK. 
                <br>3.8.7	Keterangan dapat disesuaikan 
                <br>3.8.8	Lalu klik tambah 
                <br>3.8.9	Lalu save <br>
            <br><b>Contoh :</b>
            <br>Pada Tanggal 1 Agustus 2022, Sekolah melakukan pindah buku dari kas bank ke kas kecil sebesar Rp. 5.000.000,- 
            <br><img src="img/transaksi8.5.jpg" alt=""><br>
            <br>a.	Klik Jurnal umum 
            <br>b.	Sesuai tanggal transaksi  1 - 08 -2022 
            <br>c.	Pilih Akun Kredit = Kas Bank 
            <br>d.	Isi Keterangan =  Kas Tangan 
            <br>e.	Isi Nominal = 5.000.000 
            <br>f.	Lalu klik tambah 
            <br>g.	Kemudian save 
            <br><img src="img/transaksi8.6.jpg" alt=""><br>
            <br><b>Yang Perlu Diperhatikan:</b>
            <br>a)	Menu ini dapat sama dilakukan seperti yang dilakukan seperti pada menu transaksi penerimaan dan transaksi pengeluaran. 
            <br>b)	Menu ini dapat membuat jurnal tanpa harus mengisi anggaran BKM atau BKK seperti untuk membuat Jurnal penyesuaian atau Jurnal Pembalik. 
            </p>
            <p>
                <h3>3.9 Jurnal Penyelesaian Pembangunan</h3>
                Menu ini berfungsi untuk menjurnal transaksi pembangunan gedung. Sebelumnya dimenu Input Pengeluaran Kas user membuat transaksi pengeluaran kas dengan mencentang pembangunan. Maka dimenu ini user menjurnal transaksi tersebut. Sebelum dijurnal makan bangunan atau gedung tersebut dinamakan bangunan dalam proses, saat banguna atau gedung sudah selesai maka user wajib membuat jurnal pembalik aset agar gedung tersebut menjadi aset tetap
                <br><br>3.9.1	Klik Jurnal penyelesaian pembangunan 
                <br><img src="img/transaksi9.1.jpg" alt=""><br>
                <br><br>3.9.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi9.2.jpg" alt=""><br>
                <br><br>3.9.3	Klik Tambah data untuk menginput transaksi pembangunan yang sebelumnya sudah dibuat dengan mencentang kotak pembangunan pada saat input transaksi pengeluaran
                <br><img src="img/transaksi9.3.jpg" alt=""><br>
                <br><br>3.9.4	Klik tambah data 
                <br><img src="img/transaksi9.4.jpg" alt=""><br>
                <br><br>3.9.5	Saat pembangunan sudah selesai disini akan diakui bahwa akan menjadi aset 3.9.6 Maka menu ini akan mengisi umur ekonomisnya  
                <br><b>Contoh:</b><br>Pembangunan Mushola di lantai dasar gedung yang telah disetujui telah selesai pada tanggal 31 Oktober 2022 
                <br><img src="img/transaksi9.5.jpg" alt=""><br>
                <br>a.	Klik tambah data 
                <br>b.	Pilih Transaksi 
                <br>c.	Isi tanggal  31-10 - 2022 (Tanggal Gedung sudah jadi) 
                <br>d.	Keterangan isi Penyelesaian Pembangunan 
                <br>e.	Nama diisi Mushola Sekolah 
                <br>f.	Umur ekonomisnya 240 
                <br>g.	Pilih Akun beban = Beban Penyusutan Gedung 
                <br>h.	Pilih Akun aset = Gedung  
                <br>i.	Pilih Akun penyustan = Akumulasi Penyusutan Gedung 
                <br>j.	Total akan muncul sesuai total yang sudah diinput dimenu Input Pengeluaran Kas 
                <br>k.	Lalu klik tambah 
                <br>l.	Dan save <br>
                <b>Yang perlu diperhatikan:
                </b>
                <br>Menu ini juga dapat membuat apabila pembangunan menggunakan hutang atau diperoleh dari bantuan 
            </p>
            <p>
                <h3>3.10 Pembelian aset tetap</h3>
                Data pembelian aset meliputi nomor jurnal (otomatis), tanggal beli (otomatis hari ini), umur ekonomis, penyusutan (checklist), jumlah, harga, nama barang, keterangan, BKK (pilihan), anggaran (pilihan), akun bebas penyusutan (pilihan), 
                akun penyusutan (pilihan), akun debet / akun kredit (pilihan) dan nominal. 
                <br><br>3.10.1	Klik Pembelian aset tetap
                <br><img src="img/transaksi10.1.jpg" alt=""><br>
                <br>3.10.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi10.2.jpg" alt=""><br>
                <br>3.10.3	Klik Tambah data untuk menginput transaksi pembelian aset yang sebelumnya sudah dibuat dengan mencentang kotak pembelian pada saat input transaksi pengeluaran.
                <br><img src="img/transaksi10.3.jpg" alt=""><br>
                <br>3.10.4	Saat pembelian sudah selesai disini akan diakui bahwa akan menjadi aset 
                <br>3.10.5	Maka menu ini akan mengisi umur ekonomisnya 
                <br><img src="img/transaksi10.4.jpg" alt=""><br>
                <br>a.	Klik tambah data 
                <br>b.	Pilih BKK 002/BKK/08/2022 
                <br>c.	Sesuaikan tanggal pembelian aset 
                <br>d.	Umur ekonomisnya 60 
                <br>e.	Kolom penyusutan di centang 
                <br>f.	Jumlah diisi 1 
                <br>g.	Harga diisi Rp 50.000.000 (Harga diisi harga satuan) 
                <br>h.	Nama barang diisi Set Peralatan Laboratorium
                <br>i.	Pilih Anggaran = Investasi Peralatan Laboratorium 
                <br>j.	Pilih akun beban penyusutan diisi = Beban Penyusutan Peralatan Laboratorium 
                <br>k.	Pilih Akun penyusutan = akumulasi penyusutan peralatan Laboratorium Akun debet otomatis terisi karena sudah mengisi BKK 
                <br>l.	Pilih Akun kredit = kas Bank 
                <br>m.	Nominal diisi sesuai dengan nilai BKK (Nilai BKK = Nilai Barang = Nilai Total) 
                <br>n.	Lalu klik tambah 
                <br>o.	Kemudian save 
                <br><img src="img/transaksi10.5.jpg" alt=""><br>
                <br><b>Yang Perlu diperhatikan :</b>
                <br>Menu ini juga dapat membuat apabila pembelian aset menggunakan hutang atau diperoleh dari bantuan.
            </p>
            <p>
                <h3>3.11 Penghapusan aset tetap</h3>
                Data penghapusan aset meliputi nomor jurnal (otomatis), tanggal (otomatis hari ini), aset tetap (pilihan), nama barang, jumlah, harga, tanggal beli, umur ekonomis, jumlah pemusnahan, tipe (pilihan), akun (pilihan) dan nominal. <br>
                <br>3.11.1	Klik penghapusan aset tetap
                <br><img src="img/transaksi11.1.jpg" alt=""><br>
                <br>3.11.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi11.2.jpg" alt=""><br>
                <br>3.11.3	Pada menu ini juga terdapat panduan mengenai pemusnahan aset dengan ppt di icon pojok kanan 
                <br><img src="img/transaksi11.3.jpg" alt=""><br>
                <br>3.11.4	Klik tambah data untuk membuat penghapusan data 
                <br><img src="img/transaksi11.4.jpg" alt=""><br>
                <br>3.11.5	Sesuaikan tanggalnya 
                <br><img src="img/transaksi11.5.jpg" alt=""><br> 
                <br>a.	Aset tetap diisi aset mana yang akan dihapus 
                <br>b.	Nama barang, jumlah, harga, tanggal beli, umur ekonomis bulan akan otomatis terisi sesuai dengan aset tetap yang kita pilih 
                <br>c.	Sesuaikan jumlah pemusnahan 
                <br>d.	Nilai perolehan, susut per bulan, akumulasi penyusutan, dan nilai akan muncul dan terhitung otomatis 
                <br>e.	Lalu pilih akun debet 
                <br>f.	Akun debet sesuaikan  
                <br>g.	Nominalnya juga di sesuaikan  
                <br>h.	Ketika sudah lalu klik tambah 
                <br>i.	Kembali lagi ganti akun debet dengan kredit 
                <br>j.	Lalu akunnya disesuaikan kembali  
                <br>k.	Nominalnya juga di sesuaikan kembali klik tambah  
                <br>l.	Lalu save 
                <br><b>Contoh :</b>
                <br><img src="img/transaksi11.6.jpg" alt=""><br> 
                <br>a.	Klik penghapusan aset 
                <br>b.	Klik tambah data 
                <br>c.	Sesuaikan Tanggal penghapusan aset 
                <br>d.	Aset tetap pilih kursi sekolah 
                <br>e.	Nama barang, jumlah, harga, tanggal beli, dan umur ekonomis bulan akan otomatis terisi 
                <br>f.	Jumlah pemusnahan kita tulis 10 karena akan dihapus semua 
                <br>g.	Tipe isi debet 
                <br>h.	Akun debet kas tangan kita isi Rp 4.000.000 karena kita menjual seharga tersebut 
                <br>i.	Lalu klik tambah 
                <br>j.	Lalu kita ganti kas tangan tadi dengan akumulasi penyusutan peralatan penunjang pembelajaran 
                <br>k.	Untuk nominal kita sesuaikan dengan yang ada ditampilan misal Rp 208.340 
                <br>l.	Lalu klik tambah 
                <br>m.	Lalu kita ganti akumulasi penyusutan tadi dengan beban kerugian piutang 
                <br>n.	Lalu nominalnya diisi Rp 583.320 karena nilai buku dari aset tersebut adalah Rp. 4.791.660 sesuai dengan yang ada di tampilan 
                <br>o.	Lalu klik tambah 
                <br>p.	Lalu kita ganti tipe akun dengan kredit 
                <br>q.	Akunnya kita isi peralatan penunjang pembelajaran 
                <br>r.	Ketika sudah semua lalu klik save 
                <br><img src="img/transaksi11.7.jpg" alt=""><br>
                <br><b>Yang Perlu diperhatikan :</b>
                <br>Perlu diperhatikan ketika membuat jurnal apakah pemusnahan aset itu dijual untung atau rugi, dan apakah dihibahkan karena jurnalnya akan berbeda cara menjurnalnya. System sudah menyiapkan PPT yang berisikan Jurnal penghapusan  aset.
            </p>
            <p>
                <h3>3.12 Penyusutan Aset Tetap</h3>
                Data tersebut akan otomastis terintegrasi dengan pembelian aset dan meliputi nomor, tanggal beli, nama barang, umur ekonomis, usia, jumlah, harga satuan, nilai perolehan, susut per bulan, keterangan, aktiva, akun, akun beban, akun penyusutan dan penyusutan.br <br>
                <br>3.12.1	Klik penyusutan aset tetap 
                <br><img src="img/transaksi12.1.jpg" alt=""><br>
                <br>3.12.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi12.2.jpg" alt=""><br>
                <br>3.12.3	Dengan klik proses maka aset pada bulan tersebut akan di susutkan  
                <br><img src="img/transaksi12.3.jpg" alt=""><br>
                <br>3.12.4	Dan semua aset akan otomatis terjurnal oleh sistem. Apabila sudah di proses akan muncul tanda centang disamping bulan yg diproses tadi. 
                <br>3.12.5	Untuk mengecek bisa klik jurnal yang ada di pojok kanan atas 
                <br><img src="img/transaksi12.4.jpg" alt=""><br>
                <br><img src="img/transaksi12.5.jpg" alt=""><br>
                <br><b>Contoh  :</b>
                <br>a.	Klik penyusutan aset tetap 
                <br>b.	Lalu pilih bulan 31 Juli 2022 
                <br>c.	Klik proses untuk membuat jurnal 
                <br>d.	Sistem otomatis akan menjurnal seluruh aset di bulan tersebut 
                <br>e.	Klik jurnal di pojok kanan atas untuk mengecek jurnal penyusutannya 
                <br><b>Yang Perlu diperhatikan :</b> 
                <br>Menu ini akan membuat jurnal otomatis atas aset pada bulan tersebut
            </p>
            <p>
                <h3>3.13 Kode & Lokasi Aset </h3>
                Menu ini untuk mensetting lokasi aset, apabila ada aset yang belum terdeteksi lokasi nya dimana aset tersebut. Maka dimenu ini membantu user untuk enyeting lokasi aset tersebut. <br>
                <br>3.13.1	Klik kode & Lokasi aset 
                <br><img src="img/transaksi13.1.jpg" alt=""><br>
                <br>3.13.2	Tampilan pada menu ini berdasarkan bulan yang tertera pada pojok kiri dan dapat dipilih sesuai kebutuhan 
                <br><img src="img/transaksi13.2.jpg" alt=""><br>
                <br>3.13.3	Menu ini untuk menampilkan dan mengedit lokasi aset yang sudah terdaftar namun belum terdaftar lokasi aset tersebut 
                <br><img src="img/transaksi13.3.jpg" alt=""><br>
                <br>3.13.4	Menu ini menampilkan kode dan lokasi aset yang dimiliki 
                <br><img src="img/transaksi13.4.jpg" alt=""><br>
            </p>
                <!-- END KOMPONEN YANG PERLU DI TAMBAH ATAU UBAH -->
            </div>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<?php require_once("script.php") ?>