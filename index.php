<?php
$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sistem Inventori Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #333;
        }

        a {
            color: #004080;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header {
            background: #004080;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        nav a {
            color: #fff;
            font-weight: bold;
        }

        nav a.active {
            text-decoration: underline;
        }

        .btn {
            padding: 12px 24px;
            background: #004080;
            color: #fff;
            border: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }

        .btn:hover {
            background: #0066cc;
            cursor: pointer;
        }

        section {
            margin-bottom: 30px;
        }

        h1,
        h2 {
            color: #004080;
            margin-top: 0;
        }

        footer {
            background: #004080;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f0f0f0;
        }

        .img-fitur {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .img-fitur:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
            transition: all 0.3s ease;
        }

        .img_db {
            display: block;
            max-width: 100%;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #ddd;
        }

        .img_db:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            cursor: zoom-in;
        }

        .divisi-tim-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-around;
            margin-top: 20px;
        }

        .divisi {
            flex: 1;
            min-width: 280px;
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .divisi h3 {
            color: #007BFF;
            margin-bottom: 15px;
        }

        .anggota {
            margin-bottom: 20px;
        }

        .anggota img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .anggota h4 {
            margin: 5px 0 2px;
        }

        .anggota p {
            font-size: 14px;
            color: #555;
        }

        @media (max-width: 600px) {
            .anggota-row {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">Inventori Sekolah</div>
        <nav>
            <ul>
                <?php $menus = ['home' => 'Beranda', 'about' => 'Tentang', 'fitur' => 'Fitur', 'struktur' => 'Struktur DB', 'kontak' => 'Kontak']; ?>
                <?php foreach ($menus as $key => $label): ?>
                    <li><a href="?page=<?= $key ?>" <?= ($page == $key ? 'class="active"' : '') ?>><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?php
        switch ($page) {
            case 'home':
        ?>
                <section>
                    <h1>Sistem Informasi Inventori Sekolah</h1>
                    <p>
                        Sistem Informasi Inventori Sekolah adalah solusi digital berbasis web yang dikembangkan khusus untuk mendukung proses manajemen aset dan barang sekolah secara modern dan terstruktur.
                        Sistem ini dirancang untuk mencatat, memantau, serta melaporkan seluruh barang milik sekolah—mulai dari <strong>peralatan kelas, perlengkapan laboratorium, komputer, meja kursi, hingga alat olahraga</strong>.
                    </p>
                    <p>
                        Dengan sistem ini, pihak sekolah tidak lagi bergantung pada pencatatan manual yang berisiko tinggi terhadap <em>kehilangan data</em>, <em>duplikasi pencatatan</em>, atau <em>kesulitan pelacakan</em>. Semua data tersimpan dalam satu database dan dapat diakses melalui dashboard interaktif, lengkap dengan statistik, riwayat peminjaman, dan laporan otomatis.
                    </p>
                    <p>
                        Sistem ini sangat cocok diterapkan di lingkungan:
                    <ul>
                        <li>Sekolah Dasar (SD)</li>
                        <li>Sekolah Menengah Pertama (SMP)</li>
                        <li>Sekolah Menengah Atas/Kejuruan (SMA/SMK)</li>
                    </ul>
                    </p>
                    <p>
                        Selain itu, sistem ini juga dapat dikustomisasi sesuai kebutuhan sekolah—baik dari sisi jenis aset, struktur organisasi, hingga jenis laporan yang dihasilkan. Semua ini mendukung proses akreditasi, audit internal, dan efisiensi pengelolaan barang secara menyeluruh.
                    </p>
                    <a class="btn" href="?page=fitur">Lihat Fitur</a>
                </section>

            <?php
                break;

            case 'about':
            ?>
                <section>
                    <h2>Tentang Sistem Ini</h2>
                    <p>
                        Sistem Informasi Inventori Sekolah merupakan inisiatif digitalisasi yang bertujuan meningkatkan efisiensi pengelolaan barang dan aset sekolah secara menyeluruh. Sistem ini menjawab tantangan yang selama ini dihadapi oleh pihak sekolah dalam hal pencatatan, pelacakan, hingga pelaporan inventaris.
                    </p>
                    <p>
                        Umumnya, pencatatan inventaris masih dilakukan secara manual menggunakan buku tulis, formulir cetak, atau spreadsheet yang rawan akan:
                    <ul>
                        <li>Data tidak sinkron antar petugas atau antar tahun ajaran.</li>
                        <li>Kesalahan dalam penghitungan stok atau kondisi barang.</li>
                        <li>Kesulitan membuat laporan akurat saat audit atau akreditasi.</li>
                        <li>Kehilangan riwayat peminjaman dan pengembalian barang.</li>
                    </ul>
                    </p>
                    <p>
                        Sistem ini hadir dengan solusi digital terintegrasi berbasis web, yang memungkinkan setiap data barang terekam secara real-time dan terstruktur. Berikut keunggulannya:
                    <ul>
                        <li><strong>Lebih akurat:</strong> Data barang mencakup nama, jumlah, kondisi, lokasi, kategori, dan riwayat perubahan.</li>
                        <li><strong>Terpusat:</strong> Semua data disimpan dalam satu database sekolah, mencegah duplikasi dan konflik data.</li>
                        <li><strong>Akses online:</strong> Dapat diakses oleh petugas dari komputer mana saja dalam jaringan lokal atau hosting online.</li>
                        <li><strong>Audit dan pelacakan:</strong> Setiap tindakan terekam dengan tanggal dan pengguna yang melakukan.</li>
                        <li><strong>Laporan otomatis:</strong> Sistem menyajikan laporan peminjaman, kondisi barang, hingga per lokasi/kategori.</li>
                    </ul>
                    </p>
                    <p>
                        Dari sisi pengembangan, sistem ini dibangun dengan teknologi standar dan terbuka:
                    <ul>
                        <li><strong>Frontend:</strong> HTML5, CSS3 dengan desain yang bersih dan profesional.</li>
                        <li><strong>Backend:</strong> PHP sebagai pemroses logika dan MySQL sebagai basis data.</li>
                        <li><strong>Struktur modular:</strong> Setiap bagian (barang, kategori, lokasi, laporan) terpisah dan mudah dikembangkan.</li>
                        <li><strong>Keamanan:</strong> Hak akses login, validasi input, serta logout session untuk menjaga data tetap aman.</li>
                    </ul>
                    </p>
                    <p>
                        Sistem ini juga dapat digunakan pada berbagai jenis sekolah, dan tersedia dalam repositori GitHub <a href="https://github.com/irfanarmansyah29/Sistem-Invetori-Sekolah" target="_blank"><strong>irfanarmansyah29</strong></a> untuk dikembangkan lebih lanjut. Struktur folder yang jelas, dokumentasi penggunaan, serta contoh database disediakan agar mudah diimplementasikan.
                    </p>
                    <p>
                        Dengan adanya sistem ini, sekolah dapat beralih dari sistem pencatatan konvensional menuju sistem informasi modern yang mendukung transparansi, efisiensi, dan akuntabilitas dalam pengelolaan aset sekolah.
                    </p>
                </section>

            <?php
                break;

            case 'fitur':
            ?>
                <section>
                    <h2>Fitur Utama Sistem Inventori Sekolah</h2>
                    <p>Sistem ini terdiri dari beberapa modul utama yang dirancang untuk saling terintegrasi dan mudah digunakan oleh pihak sekolah. Berikut penjelasan fitur beserta tangkapan layarnya:</p>

                    <h3>1. Dashboard Summary</h3>
                    <p>
                        Dashboard menampilkan informasi ringkas seperti jumlah total barang, jumlah kategori, jumlah lokasi penyimpanan, dan riwayat peminjaman. Memberikan gambaran umum terhadap kondisi inventaris sekolah dalam satu halaman.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/dashboard.png" alt="Dashboard Inventori Sekolah" class="img-fitur">

                    <h3>2. Manajemen Kategori</h3>
                    <p>
                        Admin dapat menambahkan, mengubah, dan menghapus kategori barang seperti Elektronik, Meubelair, Alat Tulis, dll. Setiap barang dihubungkan dengan salah satu kategori ini untuk memudahkan pengelompokan.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/data_kategori.png" alt="Data Kategori" class="img-fitur">

                    <h3>3. Manajemen Lokasi</h3>
                    <p>
                        Mengelola informasi lokasi penyimpanan barang seperti Ruang Kelas, Perpustakaan, Lab Komputer, dan lainnya. Ini membantu sekolah dalam memetakan penyebaran aset secara fisik.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/data_lokasi.png" alt="Data Lokasi" class="img-fitur">

                    <h3>4. Inventori Barang</h3>
                    <p>
                        Fitur inti untuk mencatat barang inventaris. Setiap entri mencakup nama barang, jumlah, kategori, lokasi, tanggal pembelian/input, dan deskripsi. Dilengkapi tombol edit dan hapus data.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/data_barang.png" alt="Data Barang" class="img-fitur">

                    <h3>5. Peminjaman & Pengembalian</h3>
                    <p>
                        Mencatat barang yang dipinjam oleh guru atau staff, termasuk tanggal pinjam dan tanggal pengembalian. Sistem ini juga mengatur stok otomatis ketika terjadi peminjaman.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/peminjaman.png" alt="Peminjaman" class="img-fitur">

                    <h3>6. Pengguna dan Hak Akses</h3>
                    <p>
                        Sistem memiliki level akses seperti <strong>Admin</strong> (akses penuh) dan <strong>Petugas</strong> (terbatas). Setiap pengguna harus login untuk menggunakan fitur sistem.
                    </p>
                    <p><em>(Tampilan login ada di berkas proyek GitHub, belum ada screenshot khusus.)</em></p>

                    <h3>7. Laporan Dinamis</h3>
                    <p>
                        Laporan barang, peminjaman, dan kondisi barang dapat dicetak secara langsung atau disimpan dalam format CSV/PDF. Bisa difilter berdasarkan kategori, lokasi, dan rentang tanggal.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/laporan.png" alt="Laporan Inventori" class="img-fitur">
                    <h3>8. Login & Logout Sistem</h3>
                    <p>
                        Untuk menjaga keamanan data inventori, sistem dilengkapi dengan fitur <strong>login dan logout</strong>. Setiap pengguna yang ingin mengakses sistem harus memasukkan <strong>username</strong> dan <strong>password</strong> yang telah didaftarkan sebelumnya oleh admin.
                    </p>
                    <p>
                        Setelah login berhasil, pengguna akan diarahkan ke dashboard utama sesuai dengan <strong>perannya</strong>:
                    <ul>
                        <li><strong>Admin:</strong> Dapat mengelola seluruh fitur dan data.</li>
                        <li><strong>Petugas:</strong> Hanya memiliki akses ke fitur-fitur tertentu seperti input barang dan peminjaman.</li>
                    </ul>
                    </p>
                    <p>
                        Tersedia juga fitur <strong>logout</strong> yang akan mengakhiri sesi pengguna dan menghindari akses tidak sah jika perangkat ditinggalkan dalam keadaan terbuka.
                    </p>

                    <h4>Tampilan Form Login</h4>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/login.png" alt="Tampilan Login" class="img-fitur">

                    <p>
                        Form login ini dilengkapi dengan latar belakang bergambar, input username dan password, serta tombol <em>Login</em>. Sistem akan melakukan validasi otomatis dan menolak kredensial yang tidak sesuai.
                    </p>
                    <h3>9. Manajemen Pengguna</h3>
                    <p>
                        Fitur ini memungkinkan admin untuk menambahkan, mengubah, dan menghapus data pengguna sistem, baik itu admin tambahan maupun petugas. Setiap pengguna memiliki hak akses berbeda tergantung perannya. Terdapat form input username, nama lengkap, dan password.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/data_pengguna.png" alt="Data Pengguna" class="img-fitur">

                    <h3>10. Export Data Inventori</h3>
                    <p>
                        Sistem memungkinkan pengguna untuk mengekspor data barang, kategori, lokasi, peminjaman, atau laporan ke dalam format <strong>CSV atau PDF</strong>. Fitur ini memudahkan dokumentasi dan pelaporan ke pihak sekolah atau auditor.
                    </p>
                    <p>
                        Fungsi ekspor ini tersedia langsung di tampilan tabel data atau halaman laporan.
                    </p>

                    <h3>11. Validasi Otomatis & Notifikasi</h3>
                    <p>
                        Sistem dilengkapi validasi otomatis untuk mencegah input data ganda, stok negatif, atau format yang salah. Selain itu, pengguna akan menerima notifikasi berupa pesan konfirmasi ketika berhasil menyimpan, menghapus, atau mengubah data.
                    </p>

                    <h3>12. Riwayat Aktivitas Transaksi</h3>
                    <p>
                        Sistem menyimpan riwayat lengkap dari setiap peminjaman dan pengembalian barang. Informasi ini dapat dilihat berdasarkan tanggal, nama peminjam, nama barang, dan status (dipinjam/dikembalikan).
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/riwayat_transaksi.png" alt="Riwayat Transaksi" class="img-fitur">

                    <h3>13. Pencarian & Filter Data</h3>
                    <p>
                        Di setiap halaman data (barang, peminjaman, kategori, lokasi), tersedia fitur <strong>pencarian cepat</strong> dan <strong>filtering</strong> berdasarkan kolom tertentu. Ini mempermudah pengguna untuk menemukan data yang mereka butuhkan dalam jumlah besar.
                    </p>

                    <h3>14. Sistem Responsif</h3>
                    <p>
                        Antarmuka sistem sudah didesain agar responsif dan bisa diakses dari berbagai perangkat seperti laptop, tablet, dan smartphone. Tampilan akan menyesuaikan ukuran layar pengguna untuk kenyamanan penggunaan.
                    </p>

                    <h3>15. Reset Otomatis & Cetak Nota</h3>
                    <p>
                        Pada fitur transaksi atau peminjaman, tersedia fungsi <strong>reset harian</strong> untuk menyegarkan data dan <strong>cetak nota</strong> sebagai bukti fisik peminjaman atau pengembalian barang.
                    </p>
                    <img src="https://raw.githubusercontent.com/irfanarmansyah29/Sistem-Invetori-Sekolah/main/img/cetak_nota.png" alt="Cetak Nota" class="img-fitur">



                    <p>
                        Seluruh fitur ini saling terhubung dan dirancang dengan antarmuka yang ringan, responsif, dan ramah pengguna. Setiap bagian telah disesuaikan dengan kebutuhan inventarisasi sekolah.
                    </p>

                </section>

            <?php
                break;

            case 'struktur':
            ?>
                <section>
                    <h2>Struktur Database Sistem Inventori</h2>
                    <p>Sistem Informasi Inventori Sekolah ini dibangun di atas basis data relasional MySQL dengan struktur tabel utama sebagai berikut:</p>

                    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                        <thead style="background-color: #f0f0f0;">
                            <tr>
                                <th>Nama Tabel</th>
                                <th>Fungsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>users</strong></td>
                                <td>Sistem login dengan autentikasi dan hak akses berbasis peran (<em>admin</em>, <em>petugas</em>). Field: <code>id_user</code>, <code>nama</code>, <code>username</code>, <code>password</code>, <code>role</code>.</td>
                            </tr>
                            <tr>
                                <td><strong>kategori</strong></td>
                                <td>Menyimpan daftar kategori barang seperti Elektronik, Meubelair, dll. Field: <code>id_kategori</code>, <code>nama_kategori</code>.</td>
                            </tr>
                            <tr>
                                <td><strong>lokasi</strong></td>
                                <td>Data lokasi fisik barang, seperti Lab Komputer, Ruang Guru, dll. Field: <code>id_lokasi</code>, <code>nama_lokasi</code>.</td>
                            </tr>
                            <tr>
                                <td><strong>barang</strong></td>
                                <td>Menyimpan data inventaris barang: <code>id_barang</code>, <code>nama_barang</code>, <code>id_kategori</code> (FK), <code>id_lokasi</code> (FK), <code>jumlah</code>, <code>kondisi</code>, <code>tanggal_input</code>.</td>
                            </tr>
                            <tr>
                                <td><strong>peminjaman</strong></td>
                                <td>Mencatat riwayat barang yang dipinjam: <code>id_pinjam</code>, <code>id_barang</code> (FK), <code>peminjam</code>, <code>tanggal_pinjam</code>, <code>tanggal_kembali</code>, <code>status</code>.</td>
                            </tr>
                            <tr>
                                <td><strong>pengembalian</strong></td>
                                <td>Menangani pengembalian barang dari peminjaman. Biasanya tergabung di tabel <em>peminjaman</em> atau dibuat terpisah jika detail lebih kompleks dibutuhkan.</td>
                            </tr>
                            <tr>
                                <td><strong>log_aktivitas</strong></td>
                                <td>Opsional. Menyimpan histori login/logout, pengelolaan data oleh pengguna. Contoh field: <code>id_log</code>, <code>id_user</code>, <code>aktivitas</code>, <code>waktu</code>.</td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                        Struktur ini mengacu pada repositori <a href="https://github.com/irfanarmansyah29/Sistem-Invetori-Sekolah" target="_blank"><strong>irfanarmansyah29</strong></a> yang menyediakan skema database dengan relasi antar tabel yang jelas dan menggunakan <strong>foreign key</strong> untuk menjamin integritas data.
                    </p>

                    <p>
                        Seluruh tabel dirancang modular dan bisa dikembangkan lebih lanjut, misalnya penambahan tabel <em>barang_rusak</em>, <em>notifikasi</em>, atau <em>jadwal pemeliharaan</em> agar sistem dapat mengakomodasi kebutuhan sekolah secara komprehensif.
                    </p>
                </section>
                <section id="erd">
                    <h2>Entity Relationship Diagram (ERD)</h2>
                    <p>Berikut adalah gambaran hubungan antar tabel yang digunakan dalam Sistem Informasi Inventori Sekolah. ERD ini membantu memahami struktur database dan relasi foreign key antar data.</p>

                    <img src="ERD_Inventori_Sekolah.png" alt="ERD Inventori Sekolah" class="img_db">

                    <p>
                        Diagram ini mencakup entitas seperti <strong>users, kategori, lokasi, barang, peminjaman</strong>, dan <strong>log_aktivitas</strong> yang saling terhubung secara terstruktur. Relasi ini menjaga integritas data dan memudahkan pengembangan lebih lanjut.
                    </p>
                </section>



            <?php
                break;

            case 'kontak':
            ?>
                <section id="kontak">
                    <h2>Kontak & Dukungan</h2>
                    <p>
                        Jika Anda ingin melakukan <strong>implementasi di sekolah lain</strong>, membutuhkan <strong>pelatihan penggunaan sistem</strong>, atau memiliki permintaan <strong>kustomisasi fitur</strong>, silakan hubungi tim pengembang melalui informasi berikut:
                    </p>

                    <ul>
                        <li><strong>Nama Narahubung:</strong> Irfan Armansyah</li>
                        <li><strong>Posisi:</strong> Koordinator Tim Pengembang & Full Stack Developer</li>
                        <li><strong>Email:</strong> <a href="mailto:irfanarmansyah701@gmail.com">irfanarmansyah701@gmail.com</a></li>
                        <li><strong>Telepon/WhatsApp:</strong> (+62 831-5200-4408) <a href="https://wa.me/6281234567890" target="_blank" class="btn-wa">Hubungi via WhatsApp</a></li>
                        <li><strong>Alamat Kampus:</strong> Jl. Raya Tengah No.80, RT.6/RW.1, Gedong, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13760 </li>
                        <li><strong>GitHub Project:</strong> <a href="https://github.com/irfanarmansyah29/Sistem-Invetori-Sekolah" target="_blank">irfanarmansyah29/Sistem-Invetori-Sekolah</a></li>
                    </ul>

                    <p>
                        Sistem ini dapat dikembangkan lebih lanjut untuk keperluan yang lebih luas, seperti <em>pengelolaan aset tingkat kabupaten, pelaporan otomatis ke dinas pendidikan</em>, atau integrasi dengan <strong>QR Code dan RFID</strong> untuk manajemen barang cerdas.
                    </p>

                    <p>
                        Anda juga bisa berkontribusi langsung ke pengembangan melalui GitHub. Pull request dan laporan bug sangat dihargai untuk membuat sistem ini terus berkembang.
                    </p>
                </section>
                <section id="tim-pengembang">
                    <h2>Tim Pengembang Sistem</h2>
                    <p>Pengembangan Sistem Informasi Inventori Sekolah ini melibatkan 8 anggota yang terbagi dalam tiga divisi: Frontend, Backend, dan Database. Setiap orang memiliki peran penting dalam keberhasilan proyek ini.</p>

                    <div class="divisi-tim-container">
                        <div class="divisi">
                            <h3>Frontend & UI/UX</h3>
                            <div class="anggota">
                                <img src="irfan.jpg" alt="Irfan Armansyah">
                                <h4>Irfan Armansyah</h4>
                                <p>Desain Halaman & Navigasi</p>
                            </div>
                            <div class="anggota">
                                <img src="yusran.jpg" alt="Yusran Tabrani">
                                <h4>Yusran Tabrani</h4>
                                <p>Styling CSS & Layout</p>
                            </div>
                            <div class="anggota">
                                <img src="adit.jpg" alt="Adithea Vierininda Inluz">
                                <h4>Adithea Vierininda Inluz</h4>
                                <p>Responsif & Presentasi</p>
                            </div>
                        </div>

                        <div class="divisi">
                            <h3>Backend & Pemrograman</h3>
                            <div class="anggota">
                                <img src="sonadida.jpg" alt="Muhammad Sonadi">
                                <h4>Muhammad Sonadi</h4>
                                <p>Logika Sistem & Validasi</p>
                            </div>
                            <div class="anggota">
                                <img src="nizar.jpg" alt="Nizar Muharrom">
                                <h4>Nizar Muharrom</h4>
                                <p>Login & Hak Akses</p>
                            </div>
                            <div class="anggota">
                                <img src="dodo.jpg" alt="dodo Wibowo Putra">
                                <h4>Dodo Wibowo Putra</h4>
                                <p>Laporan & Export Data</p>
                            </div>
                        </div>

                        <div class="divisi">
                            <h3>Database & Dokumentasi</h3>
                            <div class="anggota">
                                <img src="shalsa.jpg" alt="Shalsa Tri Nagita">
                                <h4>Shalsa Tri Nagita</h4>
                                <p>Struktur Database & Relasi</p>
                            </div>
                            <div class="anggota">
                                <img src="nita.jpg" alt="Nita Sintia Nabila">
                                <h4>Nita Shintia Nabila</h4>
                                <p>Dokumentasi & QA</p>
                            </div>
                        </div>
                    </div>
                </section>


            <?php
                break;

            default:
            ?>
                <section>
                    <h2>404 — Halaman Tidak Ditemukan</h2>
                    <p>Halaman yang Anda minta tidak tersedia.</p>
                </section>
        <?php
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Inventori Sekolah — Kelompok PWL UNINDRA.</p>
    </footer>

</body>

</html>