<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR INPUT DATA PERATURAN</title>
    <link rel="stylesheet" href="{{ asset('css/style-tambahatur.css') }}">
</head>
@extends('navigasi')

<body>
    <h2 class="text-center">FORMULIR INPUT DATA PERATURAN</h2>
    <div class="container">
        <form>
            <div class="form-row">
                <label for="nama">Nama Pelanggaran</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Pelanggaran" >
            </div>

            <div class="form-row">
                <label for="nama">Poin</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nilai Poin" >
            </div>

            <div class="form-row">
                <label for="tipe_poin">Tipe Poin</label>
                <div>
                    <label><input type="radio" name="tipe_poin" value="Negatif"> Negatif</label>
                    <label><input type="radio" name="tipe_poin" value="Positif"> Positif</label>
                </div>
            </div>
            
            <div class="form-row">
                <label for="keterangan">Kategori</label>
                <select name="keterangan" class="kategori-satu">
                    <option class="row" value="" disabled selected>Pilih Jenis Peraturan</option>
                    <option class="row" value="101">A. Pakaian/Seragam</option>
                    <option class="row" value="102">B. Rambut</option>
                    <option class="row" value="102">c. Aksesoris</option>
                    <option class="row" value="102">D. Pelanggaran Beraat</option>
                </select>
                <select name="keterangan" class="kategori-dua">
                    <option class="row" value="" disabled selected>Pilih Jenis Peraturan</option>
                    <option class="row" value="101">A. Prestasi Lomba</option>
                    <option class="row" value="102">B. Prestasi Keagamaan</option>
                    <option class="row" value="102">C. Prestasi Organisasi</option>
                    <option class="row" value="102">D. Perilaku Baik</option>
                </select>           
            </div>

            <button type="button" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</body>
</html>