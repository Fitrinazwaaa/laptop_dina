<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tambahkan CSS di sini -->
    <link rel="stylesheet" href="{{ asset('css/style-nav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
{{-- NAVBAR - START --}}
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" style="margin-left:5%;">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h5 class="offcanvas-title" style="margin-left:5%;">Bimbingan Konseling</h5>
              <form action="" class="search-bar" style="margin-right:3%;">
                  <input type="search" name="search" pattern=".\S." required>
                <button class="search-btn" type="submit">
                  <span>Search</span>
                </button>
            </form>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="margin-left:5%;">Menu</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('data-siswa') }}">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('poin-siswa') }}">Poin Siswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('keterangan-poin') }}">Keterangan Dan Jenis Poin</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('laporan') }}">Laporan Akhir Semester</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('pengaturan-akun') }}">Pengaturan Akun</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('input-poin') }}">Menginput Poin</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('formulir-nama') }}">Formulir Nama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('formulir-nis') }}">Formulir NIS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('nambah-data') }}">Menambah Data Siswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('edit-data') }}">Mengedit Data Siswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('tambah-atur') }}">Menambahkan Peraturan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('peringatan') }}">Formulir Peringatan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('poin12') }}">Teguran Lisan</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
        </nav>
        {{-- NAVBAR - END --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>