<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Program Studi - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <div class="mt-5">
            <img class="banner-campus" src="{{ asset('assets/kampus/binus.jpeg') }}" alt="">
        </div>

        <div class="mt-5 details">
            <h3><strong>Teknik Informatika</strong></h3>
            <p class="mt-3">Teknik Informatika merupakan merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan Teknik Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.</p>

            <h5 class="mt-4"><strong>Prospek Kerja</strong></h5>
            <p>Sektor teknologi informasi umumnya berada di pilihan pertama dalam daftar karier impian lulusan Teknik Informatika. Berbekal ilmu dan keterampilan yang diperoleh selama duduk di bangku kuliah, lulusan Teknik Informatika dapat memiliki nilai jual yang patut dibanggakan. Karena lulusan Teknik Informatika sangat dibutuhkan untuk merancang dan membangun perangkat lunak serta mengambangkan cara-cara baru yang efektif dan efisien guna menangani berbagai masalah komputasi. Ada banyak sekali pilihan karier yang dapat dijajal oleh seorang fresh graduate dari jurusan Teknik Informatika. Jenis dan jenjang kariernya juga cukup bervariasi. Secara umum, rata-rata gaji awal lulusan Teknik Informatika berada pada kisaran Rp5.000.000-Rp7.000.000, dengan pekerjaan sebagai staf dari bidang teknologi informasi di suatu perusahaan. Pekerjaan bagi lulusan Teknik Informatika adalah Software Engineer/Developer, Machine Learning Engineer, Data Scientist/Analyst, Web Engineer/ Developer, Mobile Developer, System Analyst/Developer, Network Specialist, Database Specialist, IT Consultant, Multimedia Programmer, Lecturer/Trainer, Techno-preneur.</p>

            <h5 class="mt-4"><strong>Kenapa Harus Memilih Jurusan ini</strong></h5>
            <ul>
                <li>Perkembangan teknologi yang pesat menjadikan prospek kerja lulusan Teknik Informatika yang semakin luas dengan jenis pekerjaan keren, jenjang karier beragam dan bergengsi.</li>
                <li>Di era revolusi industri 4.0 seperti sekarang ini, lulusan Teknik Informatika sangat dibutuhkan oleh instansi pemerintah, BUMN, maupun perusahaan-perusahaan swasta. </li>
                <li>Lulusan Teknik Informatika dapat bekerja sebagai independent self employed dengan menjadi konsultan dalam pengembangan suatu sistem menggunakan software database tertentu.</li>
            </ul>

            <h5 class="mt-4"><strong>Dunia Perkuliahan</strong></h5>
            <p>Beberapa mata kuliah yang bisa ditemui pada jurusan Teknik Informatika antara lain Sistem Digital, Struktur Data, Pemrograman Berorientasi Objek, Komputasi Numerik, Sistem Basis Data, Organisasi Komputer, Manajemen Basis Data, Kecerdasan Buatan, Sistem Operasi, Analisis dan Perancangan Sistem Informasi, Kecerdasan Komputasional, Manajemen Proyek Perangkat Lunak, Pemrograman Web, Keamanan Informasi dan Jaringan, Perancangan Perangkat Lunak, dan sebagainya. </p>
        </div>

        <div class="mt-5 list-top-campus">
            <h5><strong>Perguruan Tinggi Top</strong></h5>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo binus.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="/detailcampus" class="card-title mb-0">Universitas Bina Nusantara</a>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo univ.indonesia.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="" class="card-title mb-0">Universitas Indonesia</a>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo itb.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="" class="card-title mb-0">Institut Teknologi Bandung</a>
                </div>
            </div>
        </div>


        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div> 

    </div>
    
    @include('components.footer')
    
</body>
</html>