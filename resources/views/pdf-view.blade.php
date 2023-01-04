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
    <center><h2><b>TANDA BUKTI PENDAFTARAN</b></h2></center>
    <center><h3><b>SMK Wikrama Bogor TP. 2023-2024</b></h3></center>
    <br>
    <table width="50%" border="0" style="margin-left:3%;margin-right:2%;float:left">
        
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
            <td width="30%" style="font-size: 13px"><b>TANGGAL DAFTAR</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->created_at->format('j F, Y') }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NOMOR SELEKSI</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->id }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NAMA LENGKAP</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->name }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NISN</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->nisn }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>ASAL SEKOLAH</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->school }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->no_telp }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>EMAIL</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->email }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ayah</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->no_telpA }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ibu</b></td>
            <td width="3%">:</td>
            <td>{{ $Ppdb->no_telpB }}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>Referensi</b></td>
            <td width="3%">:</td>
            <td>
                {{ $Ppdb->referensi }}
            </td>
        </tr>
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
                    href="login"> http://127.0.0.1:8000/login</a>, login gunakan
            </td>
        </tr>
        <tr>
            <td colspan="3">Username : {{ $Ppdb->email }}</td>
        </tr>
        <tr>

            <td colspan="3">Password : {{ $Ppdb->nisn }}</td>
        </tr>
        <tr>
            <td colspan="3">Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor.
            </td>
        </tr>
      
    </table>
  
</body>