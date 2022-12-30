<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       table, th, td {
  border: 1px solid;
}
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th><h6>Nama</h6></th>
            <th><h6>NISN</h6></th>
            <th><h6>Jenis Kelamin</h6></th>
        </tr>
        <tr>
            <th><h6>Sekolah</h6></th>
            <th><h6>Sekolah Lainnya</h6></th>
            <th><h6>Email</h6></th>
        </tr>
        <tr>
            <th><h6>No. Telp</h6></th>
            <th><h6>No. Telp Ayah</h6></th>
            <th><h6>No. Telp Ibu</h6></th>
        </tr>
        <tr>
            <th><h6>Referensi<h6></th>
            <th><h6>Password<h6></th>
            <th><h6>Email<h6></th>

        </tr>
    </thead>
    <tbody >
       
        <tr>
            <td>{{ $Ppdb['name'] }}</td>
            <td>{{ $Ppdb['nisn'] }}</td>
            <td>{{ $Ppdb['jk'] }}</td>
        </tr>
        <tr>
            <td>{{ $Ppdb['school'] }}</td>
            <td>{{ $Ppdb['sch'] }}</td>
            <td>{{ $Ppdb['email'] }}</td>
        </tr>
        <tr>
            <td>{{ $Ppdb['no_telp'] }}</td>
            <td>{{ $Ppdb['no_telpA'] }}</td>
            <td>{{ $Ppdb['no_telpB'] }}</td>
        </tr>
        <tr>
            <td>{{ $Ppdb['referensi'] }}</td>
            <td>{{ $Ppdb['password'] }}</td>
            <td>{{ $Ppdb['email'] }}</td>
        </tr>
       
    
     <tbody>  
    </table>
</body>
</html>