<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <div id="rec-jurusan" class="mt-5">
            <h4>Direktori Program Studi</h4>
            <h6>1000 program studi ditemukan</h6>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                <div class="col">
                    <a href="/detailmajor" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/teknikinformatika.jpeg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Teknik Informatika</h5>
                                </div>  

                                <p class="small">Informatika merupakan ilmu yang baik mempelajari terkait penggunaan komputer untuk mengatur dan menganalisis data yang berukuran besar, baik data maupun informa...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/akuntansi.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Akuntansi</h5>
                                </div>  

                                <p class="small">Akuntansi merupakan ilmu yang mempelajari pencatatan, pelaporan, dan analisis keuangan untuk membantu pengambilan keputusan bisnis. Fokus utamanya adalah memastikan...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/kedokteran.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Kedokteran</h5>
                                </div>  

                                <p class="small">Kedokteran merupakan ilmu yang mempelajari kesehatan dan keterampilan klinis untuk mendiagnosis, merawat, dan mencegah penyakit. Bidang ini mencakup berbagai....</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/farmasi.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Farmasi</h5>
                                </div>  

                                <p class="small">Farmasi merupakan ilmu yang mempelajari pembuatan, pengelolaan, dan pengendalian obat-obatan serta cara penggunaannya yang aman. Fokusnya juga mencakup penelitian...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/hukum.jpeg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Hukum</h5>
                                </div>  

                                <p class="small">Hukum merupakan ilmu yang mempelajari sistem hukum, peraturan, dan prosedur untuk menegakkan keadilan dalam masyarakat. Bidang ini mencakup berbagai cabang seper...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/psikologi.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Psikologi</h5>
                                </div>  

                                <p class="small">Psikologi merupakan ilmu yang mempelajari perilaku dan proses mental manusia serta cara menangani gangguan psikologis. Penelitian di bidang ini bertujuan untuk memahami dan...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/film.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Film</h5>
                                </div>  

                                <p class="small">Film merupakan ilmu yang mempelajari pembuatan, produksi, dan analisis karya film serta aspek-aspek teknis dan kreatifnya. Studi ini melibatkan penulisan skenario, sinemato....</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/teknikelektro.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Teknik Elektro</h5>
                                </div>  

                                <p class="small">Teknik Elektro merupakan ilmu yang mempelajari desain, pengembangan, dan aplikasi sistem dan perangkat listrik dan elektronik. Bidang ini mencakup teknologi...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/statistika.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Statistika</h5>
                                </div>  

                                <p class="small">Statistika merupakan ilmu yang mempelajari metode pengumpulan, analisis, dan interpretasi data untuk menginformasikan keputusan. Fokusnya adalah pada pengembangan tek...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/bisnis.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Bisnis</h5>
                                </div>  

                                <p class="small">Bisnis merupakan ilmu yang mempelajari manajemen, operasional, dan strategi dalam menjalankan dan mengembangkan suatu usaha. Studi ini mencakup pemasaran, ke...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/teknologipangan.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Teknologi Pangan</h5>
                                </div>  

                                <p class="small">Teknologi Pangan merupakan ilmu yang mempelajari proses produksi, pengolahan, dan keamanan makanan untuk konsumsi manusia. Penelitian di bidang ini bertujuan untuk me...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/kriminologi.png') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Kriminologi</h5>
                                </div>  

                                <p class="small">Kriminologi merupakan ilmu yang mempelajari penyebab, pencegahan, dan penanggulangan kejahatan serta sistem peradilan pidana. Fokusnya adalah memahami pola kejahatan...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/ilmukomunikasi.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SOSHUM</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/soshum.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Ilmu Komunikasi</h5>
                                </div>  

                                <p class="small">Komunikasi merupakan ilmu yang mempelajari teori dan praktik komunikasi dalam berbagai media dan konteks sosial. Bidang ini mencakup komunikasi massa, interpersonal, dan organ...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/jurusan/tekniksipil.jpg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SAINTEK</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/jurusan/saintek.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">Teknik Sipil</h5>
                                </div>  

                                <p class="small">Teknik Sipil merupakan ilmu yang mempelajari perancangan, konstruksi, dan pemeliharaan infrastruktur seperti jalan, jembatan, dan gedung. Fokusnya adalah memastikan struk...</p>
                            </div>
                        </div>
                    </a>
                </div>
                

            </div>   

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div> 

    </div>

    </div>
    @include('components.footer')

</body>
</html>