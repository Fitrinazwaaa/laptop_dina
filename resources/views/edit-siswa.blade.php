<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR EDIT DATA SISWA</title>
    <link rel="stylesheet" href="{{ asset('css/style-edit-sw.css') }}">
</head>
@extends('navigasi')

<body>
    <h2 class="text-center">FORMULIR EDIT DATA SISWA</h2>
    <div class="container">
        <form>
            <div class="form-row">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" >
            </div>

            <div class="form-row">
                <label for="kelas">Kelas</label>
                <select name="kelas" class="form-controler">
                    <option value="" disabled selected>Pilih kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>

            <div class="form-row">
                <label for="nama">NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" >
            </div>

            <div class="form-row">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-controler">
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-row">
                <label for="nama">Kejurusan</label>
                <input type="text" name="Kejurusan" class="form-control" placeholder="Jurusan" >
            </div>

            <div class="form-row">
                <label for="nama">Angkatan</label>
                <input type="text" name="angkatan" class="form-control" placeholder="Angkatan" >
            </div>

            <button type="button" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</body>
</html>