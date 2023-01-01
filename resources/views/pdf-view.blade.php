<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Registrasi PPDB</title>
</head>
<body>
    <br>
<body style="font-family: sans-serif" onload="window.print()">
    <center>
        <table width="94%" border="0">
            <tr>
                <td rowspan="4" width="10%">
                    <center>
                        <div><img src="https://ppdb.smkwikrama.sch.id/img/wk.png" width="100px"></div>
                    </center>
                </td>
                <td>
                    <b>PENERIMAAN PESERTA DIDIK BARU</b><br>
                    <b>SMK WIKRAMA BOGOR TP. 2023-2024</b><br>
                </td>
            </tr>
        </table>
    </center>
    <br>
    <center><b>TANDA BUKTI PENDAFTARAN</b></center>
    <center><b>SMK Wikrama Bogor TP. 2023-2024</b></center>
    <br>
    <table width="50%" border="0" style="margin-left:3%;margin-right:2%;float:left">
        {{-- @foreach ($users as $item) --}}
        @csrf
        <tr>
            <td colspan="3" style="padding: 10px 0;"></td>
        </tr>
       <center> <tr>
            <td colspan="3" style="background-color: lightgray"><b>I. BIODATA CALON PESERTA DIDIK</b></td>
        </tr>
    </center>
        <tr>
            <td colspan="3" style="padding: 8px 0;"></td>
        </tr>
        
        <tr>
            <td width="30%" style="font-size: 13px"><b>NOMOR SELEKSI</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->id}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NAMA LENGKAP</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['name'] }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NISN</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['nisn'] }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>ASAL SEKOLAH</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['school'] }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['no_telp'] }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>EMAIL</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['email']}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ayah</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['no_telpA'] }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ibu</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb['no_telpB'] }}</td>
        </tr>
        <tr>
        <tr>
            <td colspan="3" style="padding: 10px 0;"></td>
        </tr>
        <tr>
            <td colspan="3" style="background-color: lightgray"><b>II. INFORMASI</b></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px 0;"></td>
        </tr>
        <tr>
            <td colspan="3"><b>A. Akun Anda</b></td>
        </tr>
        <tr>
            <td colspan="3">Akses<a style="font: blue; text-decoration: none;"
                href="login"> http://127.0.0.1:8000/login</a>, Login gunakan
        </td>
    </tr>
    <tr>
        <td colspan="3">Username : {{$Ppdb['email']}} </td>
    </tr>
    <tr>

        <td colspan="3">Password :{{$Ppdb['nisn']}}</td>
    </tr>
    <tr>
        <td colspan="3">Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor.
        </td>
    </tr>
   
</table>

</body><div><img src="https://ppdb.smkwikrama.sch.id/img/qris.jpg" width="120px"></div>
</td>
</tr>
<tr>
<td>
    Praktis transfer pembayaran biaya seleksi, bebas biaya admin gunakan QRIS"
    scan barcode QRIS melalui Mobile Banking atau e-wallet
</td>
</tr>
</table>
<br>
<table width="37%" border="0">


</table>
<br>
<table width="37%" border="0" style="margin-left:60%;">


</table>
</body>
    
</body>
</html>
