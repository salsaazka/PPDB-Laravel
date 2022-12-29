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
            <th><h6>Sekolah</h6></th>
            <th><h6>Sekolah Lainnya</h6></th>
            <th><h6>Email</h6></th>
            <th><h6>No. Telp</h6></th>
            <th><h6>No. Telp Ayah</h6></th>
            <th><h6>No. Telp Ibu</h6></th>
            <th><h6>Referensi<h6></th>
            <th><h6>Password<h6></th>
            <th><h6>Email<h6></th>

        </tr>
    </thead>
    <tbody >
        @foreach ( $Ppdb as $a )
        <tr>
            <td>{{ $a['name'] }}</td>
            <td>{{ $a['nisn'] }}</td>
            <td>{{ $a['jk'] }}</td>
            <td>{{ $a ['school']}}</td>
            <td>{{ $a['sch'] }}</td>
            <td>{{ $a['email'] }}</td>
            <td>{{ $a['no_telp'] }}</td>
            <td>{{ $a['no_telpA'] }}</td>
            <td>{{ $a['no_telpB'] }}</td>
            <td>{{ $a['referensi'] }}</td>
             <td>{{ $a['password'] }}</td>
            <td>{{ $a['email'] }}</td>
        </tr>
       
        @endforeach
     <tbody>  
    </table>
</body>
</html>