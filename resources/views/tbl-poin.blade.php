<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL POIN SISWA</title>
    <link rel="stylesheet" href="{{ asset('css/style-tblpoin.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
@extends('navigasi')



<div class="table-container">
<h2>TABEL PEROLEHAN POIN NEGATIF & POIN POSITIF SISWA SMKN 1 KAWALI</h4>
<h4>PERIODE 2022-2024</h4>
<button class="tambah"><i class="fas fa-plus"></i>Tambahkan</button>
        <button class="dropdown-btn">&#9660;
        ANGKATAN (2023-2024)</button>
        <div class="dropdown-content">
            <table border="1">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis <br>
                    Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Negatif</th>
                    <th>Positif</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                        <div class="gender-box female">P</div></td>
                        <td>12 RPL 3</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>10</td>
                        <td>20</td>
                        <td>
                            <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>15</td>
                        <td>7</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>3</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>65</td>
                    <td>77</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>8</td>
                    <td>38</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>70</td>
                        <td>35</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>6</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>4</td>
                    <td>30</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>4</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>8</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>30</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>9</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>10</td>
                    <td>8</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
<div class="table-container">
        <button class="dropdown-btn">&#9660;
        ANGKATAN (2023-2024)</button>
        <div class="dropdown-content">
            <table border="1">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis <br>
                    Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Negatif</th>
                    <th>Positif</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                        <div class="gender-box female">P</div></td>
                        <td>12 RPL 3</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>10</td>
                        <td>20</td>
                        <td>
                            <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>15</td>
                        <td>7</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>3</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>65</td>
                    <td>77</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>8</td>
                    <td>38</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>70</td>
                        <td>35</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>6</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>4</td>
                    <td>30</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>4</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>8</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>30</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>9</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>10</td>
                    <td>8</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
<div class="table-container">
        <button class="dropdown-btn">&#9660;
        ANGKATAN (2023-2024)</button>
        <div class="dropdown-content">
            <table border="1">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis <br>
                    Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Negatif</th>
                    <th>Positif</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                        <div class="gender-box female">P</div></td>
                        <td>12 RPL 3</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>10</td>
                        <td>20</td>
                        <td>
                            <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>15</td>
                        <td>7</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>3</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>65</td>
                    <td>77</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>8</td>
                    <td>38</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>70</td>
                        <td>35</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>6</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>4</td>
                    <td>30</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>4</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                    <td>8</td>
                        <td>222310393</td>
                        <td>Nurdin</td>
                        <td><div class="gender-box male">L</div></td>
                        <td>12 RPL 1</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>90</td>
                        <td>30</td>
                        <td>
                        <button class="add-btn"></i>View</button>
                        </td>
                    </tr>
                <tr>
                    <td>9</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>10</td>
                    <td>8</td>
                    <td>
                    <button class="add-btn"></i>View</button>
                    </td>
                </tr>
                
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
    <script>
        // Ambil semua tombol dropdown
        var dropdownButtons = document.querySelectorAll('.dropdown-btn');

        dropdownButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Toggle display untuk dropdown content yang sesuai dengan tombol yang diklik
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        });
    </script>
</body>
</html>