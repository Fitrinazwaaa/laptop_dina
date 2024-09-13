<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style-akun.css') }}">
</head>
@extends('navigasi')


<body>
    <div class="container">
        <div class="settings">
            <div class="profile-admin">
                <h4>Pengaturan Profil Admin</h4>

                <div class="admin-info">
                    <img class="profile" src="https://cdn-icons-png.flaticon.com/512/9131/9131529.png" alt="">
                    <div class="text-satu">
                        <p style="font-size:16px;">ADZKIA SIDIK</p>
                        <p style="font-size:13px;">adzkiasidik@gmail.com</p>
                    </div>
                </div>

                <div class="telpon">
                    <p class="contact">Nomor Telepon: +62 888975654325</p>
                    <br><br><br><br>
                    <p style="margin-bottom: -10px; margin-left:10px;">Sosial Media: <div class="social-media">
                        <a href="#" class="icon"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                        <a href="#" class="icon"> <i class="fa fa-whatsapp" style="font-size:24px"></i></a>             
                        <a href="#" class="icon"><i class="fa fa-facebook" style="font-size:24px"></i></a>
                    </div>  </p>
                </div>            

                <div class="login-method">
                    <h5>Metode Masuk</h5>
                    <br>
                    <p>Alamat Email: </p> <p>adzkiasidik@gmail.com</p>
                    <br>
                    <button class="button-email">Ganti Email</button>
                    <br>
                    <p>Password: <p>************</p>
                    <button class="button-pw">Ganti Password</button>
                </div>

                <br>

                <div class="note">
                <p>Amankan Akun Anda:</p> <br> 
                <p>Otentikasi dua faktor menambahkan lapisan keamanan ekstra ke akun Anda. Untuk masuk, Anda juga perlu memberikan kode 6 digit. pelajari lebih lanjut</p>
                </div>

            </div>

            <div class="user-management">
                <h4>Pengelolaan Pengguna</h4>
                <form action="{{ route('pengaturan') }}" method="POST">
                    @csrf
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" required>

                    <label for="role">Peran</label>
                    <select id="role" name="role">
                        <option value="" selected></option>
                        <option value="admin">Admin</option>
                        <option value="kesiswaan">Kesiswaan</option>
                        <option value="guru">Guru</option>
                        <option value="osis">OSIS</option>
                    </select>

                    <label for="temporary_password">Kata Sandi Sementara</label>
                    <input type="password" id="temporary_password" name="temporary_password" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
