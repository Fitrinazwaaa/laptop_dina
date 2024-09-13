<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa SMK</title>
    <link rel="stylesheet" href="{{ asset('css/style-data.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
@extends('navigasi')




    <div class="container">
        <h2>TABEL SISWA SMK NEGERI 1 KAWALI</h4>
        <h4>PERIODE 2022-2024</h4>
        <div class="tambah_dan_hapus">
        <button class="add-btn"><i class="fas fa-plus"></i>Tambahkan</button>
        <button class="icon-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
        </div>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis <br>
                    Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Angkatan (Tahun)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>1</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>2</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                    <td><div class="gender-box male">L</div></td>
                    <td>12 RPL 1</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>3</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>4</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                    <td><div class="gender-box male">L</div></td>
                    <td>12 RPL 1</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>5</td>
                    <td>222310393</td>
                    <td>Nurdin</td>
                    <td><div class="gender-box male">L</div></td>
                    <td>12 RPL 1</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>6</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><label><input type="checkbox"></label></td>
                    <td>7</td>
                    <td>222310392</td>
                    <td>Alinda Eka Yuniarti</td>
                    <td><div class="gender-box-wrapper">
                    <div class="gender-box female">P</div></td>
                    <td>12 RPL 3</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>2022-2023</td>
                    <td>
                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</body>
</html>