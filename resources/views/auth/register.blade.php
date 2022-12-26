<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
    <body style="background-image: linear-gradient(45deg, #009EC5 0%, #2e7eed 20%, #02225B 50%); background-repeat: no-repeat; min-height: 100vh" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <center>
            <div class=" d-flex justify-content-center card mt-5 col-6 ">
                <h4 class="pt-3"><strong>Form Pendaftaran PPDB</strong></h4>
                <h6 class="text-muted">SMK Wikrama Bogor TP.2023-2024</h6>
                <form method="POST" action="">
                    @method('POST')
                      @csrf
            
                      <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >NISN</label>
                      <input type="text" name="nis"  class="form-control form-control-lg" placeholder="" />
                    </div>
            
                    <div class="form-outline mt-3 mb-3">
                      <label class="form-label" >Jenis Kelamin</label>
                      <input type="text" name="jk" class="form-control form-control-lg" placeholder="" />
                    </div>
                    
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nama</label>
                      <input type="text" name="name" class="form-control form-control-lg" placeholder="" />
                    </div>
    
                    <div class="form-outline mt-3  mb-3">
                        <label class="form-label" >Asal Sekolah</label>
                        <select class="form-select" aria-label="Default select example" name="sekolah">
                            <option selected>--Pilih Sekolah--</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                    </div>
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Email</label>
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="" />
                    </div>
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nomor Handphone</label>
                      <input type="number" name="no_telp" class="form-control form-control-lg" placeholder="" />
                    </div>
                    
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nomor HP Ayah</label>
                      <input type="number" name="no_telp" class="form-control form-control-lg" placeholder="" />
                    </div>

                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nomor HP Ibu</label>
                      <input type="number" name="no_telp" class="form-control form-control-lg" placeholder="" />
                    </div>

                    
                    <div class="form-outline mt-3  mb-3">
                        <label class="form-label" >Pilih Referensi</label>
                        <select class="form-select" aria-label="Default select example" name="referensi">
                            <option selected>Pilih Referensi</option>
                            <option value="Guru/Staf/Laboran/Pegawai Wikrama">Guru/Staf/Laboran/Pegawai Wikrama</option>
                            <option value="Siswa SMK Wikrama">Siswa SMK Wikrama</option>
                            <option value="Alumni SMK Wikrama">Alumni SMK Wikrama</option>
                            <option value="Guru SMP">Guru SMP</option>
                            <option value="Calon Siswa Wikrama">Calon Siswa Wikrama</option>
                            <option value="Sosial Media">Sosial Media</option>
                            <option value="Referensi Langsung">Referensi Langsung</option>
                    </div>

                    <!-- Submit button -->
                    <center>
                      <button type="submit" class="btn btn-warning btn-lg btn-block mb-3">Registrasi</button>
                    </center>
                    
                    </form>
            </div>    
        </center>
      
  </body>
</html>