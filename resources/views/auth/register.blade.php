@extends('layouts.base-regis')
@section('content')
    <body style="background-image: linear-gradient(45deg, #009EC5 0%, #2e7eed 20%, #02225B 50%); background-repeat: no-repeat; min-height: 100vh" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
          <div class="d-flex justify-content-center">
            <div class="container d-flex justify-content-center">
                <div class="card col-6 mt-5 mb-5">
                    <div class="p-4">
                    <h4 class="pt-3 d-flex justify-content-center"><strong>Form Pendaftaran PPDB</strong></h4>
                    <h6 class="text-muted d-flex justify-content-center">SMK Wikrama Bogor TP. 2023-2024</h6>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                           <ul>
                             @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                             @endforeach
                           </ul>
                          </div>
                         @endif
                         @if (Session::get('success'))
                         <div class="alert alert-success w-100">
                            {{ Session::get('success') }}
                         </div>  
                       @endif
                      <form action="/registrasi" method="POST">
                        @csrf                   
                         @method('POST')
                        
                      <div class="row mt-3 mb-3">
                        <div class="form-outline mt-4 mb-2 col-6">
                          <label class="form-label" >NISN</label>
                          <input type="number" name="nisn"  class="form-control " placeholder="Masukkan NISN" />
                        </div>
              
                      <div class="form-outline mt-3 mb-2 pt-2 col-6">
                        <label class="form-label" >Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jk" >
                        <option selected>--Jenis Kelamin--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      
                      </div>
                     
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nama</label>
                      <input type="text" name="name" class="form-control " placeholder="Masukkan Nama Lengkap" />
                    </div>
    
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Asal Sekolah</label>
                        <select class="form-select" aria-label="Default select example" name="school" id="school">
                            <option selected>--Pilih Sekolah--</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Megamendung">SMPN 1 Megamendung</option>
                            <option value="SMPN 1 Cisarua">SMPN 1 Cisarua</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    
                    <div id="lainnya" style="display: none;" class="form-outline mt-3 mb-3">
                      <label class="form-label" for="sch" >Sekolah lainnya</label>
                      <input type="text" name="sch" class="form-control "  placeholder="Input Nama Sekolah" />
                  </div>
                  </div>
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Email</label>
                        <input type="email" name="email" class="form-control " placeholder="Masukkan Email Aktif" />
                    </div>
                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" >Nomor Handphone</label>
                      <input type="number" name="no_telp" class="form-control " placeholder="Contoh : 08..." />
                    </div>
                    
                    <div class="row mb-3">
                      <div class="form-outline col-6 mt-3 mb-3">
                          <label class="form-label" >Nomor HP Ayah</label>
                          <input type="number" name="no_telpA" class="form-control " placeholder="Contoh: 08..." />
                      </div>

                       <div class="form-outline col-6 mt-3 mb-3">
                          <label class="form-label" >Nomor HP Ibu</label>
                          <input type="number" name="no_telpB" class="form-control " placeholder="Contoh: 08..." />
                       </div>
                    </div>
                    
                    <div class="form-outline mt-3 mb-3">
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
                        </select>
                    </div>
                    
                    <!-- Submit button -->
                      <button type="submit" class="btn btn-warning btn-lg btn-block mt-3 mb-2 col-12 text-light">Registrasi</button>
                    </form>
            </div>    
          </div>
        </div>
 @endsection

 @section('js')
        <script>
             $('#school').on('change',function(){
             if( $(this).val()==="lainnya"){
              $("#lainnya").show()
            }
            else{
            $("#lainnya").hide()
            }
          });
            
          </script>
@endsection