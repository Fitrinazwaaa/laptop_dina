<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PERINGATAN</title>
    <link rel="stylesheet" href="{{ asset('css/style-peringatan.css') }}">
</head>
@extends('navigasi')

<body>
    <h2 class="text-center">FORMULIR PERINGATAN</h2>
    <div class="container">
        <form>
            <div class="form-row">
                <label for="nama">Nama Pengisi</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Pengisi" >
            </div>

            <div class="form-row">
                <label for="nama">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" >
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
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-row">
                <label for="nama">Kejurusan</label>
                <input type="text" name="Kejurusan" class="form-control" placeholder="Jurusan" >
            </div>

            <div class="form-row">
                <label for="nama">Peringatan</label>
                <input type="text" name="angkatan" class="form-control" placeholder="Jenis  Peringatan" >
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
                <label for="foto">Foto</label>
                <input type="file" id="photoUpload" name="photo" accept="image/*">
            </div>

            <button type="button" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</body>
</html>