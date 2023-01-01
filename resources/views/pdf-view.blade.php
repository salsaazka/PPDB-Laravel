<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
    
    </style>
</head>
<body>
    <h1>Data Registrasi PPDB TP.2023-2024</h1>
    <ol>
        <li>Nama
            <ul>
                <li>{{ $Ppdb['name'] }}</li>
            </ul>
        </li>
        <li>NISN
            <ul>
                <li>{{ $Ppdb['nisn'] }}</li>
            </ul>
        </li>
        <li>Jenis Kelamin
            <ul>
                <li>{{ $Ppdb['jk'] }}</li>
            </ul>
        </li>
        <li>Sekolah
            <ul>
                <li>{{ $Ppdb['school'] }}</li>
            </ul>
        </li>
        <li>Sekolah Lainnya
            <ul>
                <li>{{ $Ppdb['sch'] }}</li>
            </ul>
        </li>
        <li>Email
            <ul>
                <li>{{ $Ppdb['email'] }}</li>
            </ul>
        </li>
        <li>No.Telp
            <ul>
                <li>{{ $Ppdb['no_telp'] }}</li>
            </ul>
        </li>
        <li>No. Telp Ayah
            <ul>
                <li>{{ $Ppdb['no_telpA'] }}</li>
            </ul>
        </li>
        <li>No. Telp Ibu
            <ul>
                <li>{{ $Ppdb['no_telpB'] }}</li>
            </ul>
        </li>
        <li>Referensi
            <ul>
                <li>{{ $Ppdb['referensi'] }}</li>
            </ul>
        </li>
        <li>Password
            <ul>
                <li>Password yang digunakan berasal dari NISN</li>
            </ul>
        </li>
        <li>Email
            <ul>
                <li>{{ $Ppdb['email'] }}</li>
            </ul>
        </li>
        
    </ol>
    <p>Silahkan untuk <a href="http://127.0.0.1:8000/login"><b>Login</b></a> disini!</p>
</body>
</html>