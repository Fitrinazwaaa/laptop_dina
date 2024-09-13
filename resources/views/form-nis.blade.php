<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Input Poin</title>
    <link rel="stylesheet" href="{{ asset('css/style-formnis.css') }}">
</head>
@extends('navigasi')

<body>
    <h2 class="text-center">FORMULIR INPUT POIN</h2>
    <div class="container">
        <form>
            <div class="form-row">
                <label for="nama">NIS</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nomor NIS Siswa" >
            </div>

            <div class="form-row">
                <label for="tipe_poin">Tipe Poin</label>
                <div>
                    <label><input type="radio" name="tipe_poin" value="Negatif"> Negatif</label>
                    <label><input type="radio" name="tipe_poin" value="Positif"> Positif</label>
                </div>
            </div>

            <div class="form-row">
                <label for="keterangan">Keterangan</label>
                <select name="keterangan" class="form-control">
                    <option value="" disabled selected>Pilih Jenis Peraturan</option>
                    <option value="101">Senin-Selasa tidak berpakaian PSAS (baju putih-celana/rok abu), “kerudung putih” bagi perempuan</option>
                    <option value="102">Senin-Selasa tidak berkaos kaki putih</option>
                </select>           
            </div>

            <button type="button" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</body>
</html>