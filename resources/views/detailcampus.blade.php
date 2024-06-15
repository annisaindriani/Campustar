<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Perguruan Tinggi - Campustar</title>
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

        <div class="mt-5">
            <h3><strong>BINUS University</strong></h3>
        </div>

        <div class="mt-3 mb-5">
            <div class="row">
                <div class="col-md-8 content-detail-campus" style="padding-right: 40px;">
                    <p>Universitas Bina Nusantara, atau juga dikenal dengan Binus University, merupakan salah satu universitas swasta yang berlokasi di Jakarta, Indonesia. Berawal dari sebuah institusi pelatihan komputer Modern Computer Course pada 21 Oktober 1974, dan berkembang dan akhirnya berubah menjadi Universitas pada 8 Agustus 1996, Universitas Bina Nusantara. Kampus ini lokasinya tersebar di Jakarta, Bekasi, Bandung, Malang, dan Semarang ini memang sudah teruji kualitasnya dengan berbagai prestasi yang diraih, baik dalam lingkup nasional sampai internasional. 
                    <br><br>
                    BINUS University memiliki visi yaitu sebuah universitas berkelas dunia yang membina dan memberdayakan masyarakat dalam membangun dan melayani bangsa. Dalam mendukung visi tersebut, maka BINUS University memiliki misi yaitu mendidik BINUSIAN melalui pendekatan holistik yang  memakai standard dunia, menyelesaikan permasalahan bangsa melalui penelitian yang berdampak signifikan, membina BINUSIAN sebagai pembelajar seumur hidup melalui pengayaan sendiri, memberdayakan BINUSIAN untuk secara berkelanjutan meningkatkan kualitas hidup dan masyarakat dan menjadi penggerak utama untuk memperkaya sistem BINUS Higher Education.
                    <br><br>
                    Untuk menunjang kegiatan belajar dan aktivitas mahasiswa selama menempuh pendidikan di kampus, BINUS University pastinya menyediakan fasilitas yang lengkap dan memadai di masing-masing kampusnya. Misalnya seperti ruang kelas yang dilengkapi dengan LCD proyektor dan AC, internet corner, perpustakaan yang terbagi menjadi indoor dan outdoor, dan auditorium yang dapat digunakan untuk berbagai kegiatan kampus. Adapun fasilitas lainnya yaitu drawing studio, laboratorium interior design, laboratorium bahasa, binus TV, internet corner, wall climbing, green screen studio, dubbing studio, food court, bank dan ATM.</p>
                </div>

                <div class="col-md-4 sidebar">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="sidebar-info mb-0"><strong>Website</strong></p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://www.binus.ac.id" class="text-decoration-none mb-0">www.binus.ac.id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="sidebar-info mb-0"><strong>Email</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0">infobinus@binus.edu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="sidebar-info mb-0"><strong>Telepon</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0">021-5345830</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="sidebar-info mb-0"><strong>Akreditasi</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0">A</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="sidebar-info mb-0"><strong>Lokasi</strong></p>
                        </div>
                        <div class="col-md-6 mb-0">
                            <p class="mb-0">Jakarta, Indonesia</p>
                        </div>
                    </div>

                    <h6 class="mt-3"><strong>BINUS @Alam Sutera</strong></h6>
                    <p>Jl. Jalur Sutera Bar. No.Kav. 21, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang,Banten </p>
                    <h6><strong>BINUS @Kemanggisan</strong></h6>
                    <p>Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat</p>
                    <h6><strong>BINUS @Bekasi</strong></h6>
                    <p>Jalan Lingkar Boulevar Blok WA No.1 Summarecon Bekasi RT.006/RW.003, Marga Mulya, Kec. Bekasi Utara</p>
                    <h6><strong>BINUS @Bandung</strong></h6>
                    <p>Paskal Hyper Square, Jl. Pasir Kaliki No.25-27, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat</p>
                    <h6><strong>BINUS @Malang</strong></h6>
                    <p>Jl. Araya Mansion No.8 - 22, Genitri, Tirtomoyo, Kec. Pakis, Kabupaten Malang, Jawa Timur</p>

                </div>
            </div>
        </div>

        <div id="list-faculty" class="mb-5">
            <h4 class="mb-4">Fakultas dan Program Studi</h4>
            <div class="mb-3 faculty">
                <h5><strong>Fakultas Teknik Informatika</strong></h5>
                <p>
                    <a href="/details" class="text-decoration-none">Teknik Informatika</a>, 
                    <a href="" class="text-decoration-none">Keamanan Siber</a>, 
                    <a href="" class="text-decoration-none">Aplikasi Permainan</a>, 
                    <a href="" class="text-decoration-none">Teknologi</a> dan 
                    <a href="" class="text-decoration-none">Aplikasi Bergerak</a>
                 </p>
            </div>
            <div class="mb-3 faculty">
                <h5><strong>Fakultas Design</strong></h5>
                <p>
                    <a href="" class="text-decoration-none">Desain Interior</a>, 
                    <a href="" class="text-decoration-none">Desain Komunikasi Visual Animasi</a>, 
                    <a href="" class="text-decoration-none">Desain Komunikasi Visual Media Baru</a> dan
                    <a href="" class="text-decoration-none">Desain Komunikasi Visual Periklanan Kreatif</a>
                </p>
            </div>
            <div class="mb-3 faculty">
                <h5><strong>Fakultas Teknik</strong></h5>
                <p>
                    <a href="" class="text-decoration-none">Arsitektur</a>, 
                    <a href="" class="text-decoration-none">Teknik Sipil</a>, 
                    <a href="" class="text-decoration-none">Teknik Industri</a>,
                    <a href="" class="text-decoration-none">Teknik Komputer</a> dan
                    <a href="" class="text-decoration-none">Teknologi Pangan</a>
                </p>
            </div>
            <div class="mb-3 faculty">
                <h5><strong>Fakultas Ekonomika dan Komunikasi</strong></h5>
                <p>
                    <a href="" class="text-decoration-none">Akuntansi</a>, 
                    <a href="" class="text-decoration-none">Keuangan</a>, 
                    <a href="" class="text-decoration-none">Komunikasi Pemasaran</a> dan
                    <a href="" class="text-decoration-none">Manajemen Hotel</a>
                </p>
             </div>
             <div class="mb-3 faculty">
                <h5><strong>Fakultas Humaniora</strong></h5>
                <p>
                    <a href="" class="text-decoration-none">Psikologi</a>, 
                    <a href="" class="text-decoration-none">Hubungan International</a>, 
                    <a href="" class="text-decoration-none">Hukum Bisnis</a>,
                    <a href="" class="text-decoration-none">Sastra Cina</a>,
                    <a href="" class="text-decoration-none">Sastra Inggris</a>, 
                    <a href="" class="text-decoration-none">Sastra Jepang</a> dan
                    <a href="" class="text-decoration-none">Pendidikan Guru Sekolah Dasar</a> 
                </p>
            </div>
        </div>

        <!-- <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <button class="btn btn-primary position-absolute bottom-0 end-0 m-3">Tombol</button>
        </div> -->

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

    </div>

    @include('components.footer')

</body>
</html>