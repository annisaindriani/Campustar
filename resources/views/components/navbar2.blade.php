<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/logo-navbar.png') }}" alt="Campustar" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto d-flex"> 
                <div class="btn-group me-3"> 
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #E8F5FF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Fitur kami</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/campus">Perguruan Tinggi</a></li>
                        <li><a class="dropdown-item" href="/major">Program Studi</a></li>
                        <li><a class="dropdown-item" href="/mulaites">Tes Minat dan Bakat</a></li>
                        <li><a class="dropdown-item" href="/forum">Forum Diskusi</a></li>
                        <li><a class="dropdown-item" href="#">Arsip</a></li>
                    </ul>
                </div>
                <form class="d-flex me-auto"> 
                    <div class="input-group">
                        <button class="btn btn-outline-primary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                        <input class="form-control" type="search" placeholder="Cari berdasarkan nama" aria-label="Search" style="width: 350px;">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-3"> 
                    <a class="btn btn-primary" href="/signup" style="color: #E8F5FF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="/login" style="color: #008DFF; font-weight: 700; border-color: #008DFF;">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
