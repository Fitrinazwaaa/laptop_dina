<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Input Poin (Guru)</title>
    <link rel="stylesheet" href="{{ asset('css/style-tipeinput.css') }}">
</head>
<body>
@extends('navigasi')

    <div class="container">
        <div class="card">
            <h2>Pilih Type</h2>
            <div class="button-container">
                <a href="#" class="btn1" style="border:2px solid #acc">Menggunakan Nama</a>
                <br>
                <a href="#" class="btn2" style="border:2px solid #acc">Menggunakan NIS</a>

            </div>
            <a href="#" class="back-btn">
            <div class="arrow"></div> Back</a>

        </div>
    </div>
</body>
</html>