<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('css/style-akun.css') }}">
</head>

<body>
    <div class="container">
        <div class="form-container">
        <div class="header">
            <h2>Pengaturan Profil Admin</h2>
            <br>
            <img src="https://cdn-icons-png.flaticon.com/512/7641/7641828.png " alt="" class="profile-icon" width="40" height="40">
            <div class="profile-text" >
            <strong>BIMBINGAN KONSELING</strong>
            <p>smkn1kawali@gmail.com</p>
            </div>
        </div>
        <br>
        <hr>
            <h3>Metode Masuk</h3>
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" value="BIMBINGAN KONSELING">
                <button type="button" class="btn">Ganti Username</button>
                
                <label for="password">Password</label>
                <input type="password" id="password" value="000001">
                <button type="button" class="btn">Ganti Password</button>
            </form>
            <div class="secure-info">
                <p>Amankan Akun Anda</p>
                <p>Otentikasi dua faktor menambahkan lapisan keamanan ekstra ke akun Anda. Untuk masuk, Anda juga perlu memberikan kode 6 digit. Pelajari lebih lanjut.</p>
            </div>
        </div>
    </div>
</body>
</html>