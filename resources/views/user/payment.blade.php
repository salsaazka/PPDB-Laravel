@extends('layouts.base-user')

@section('title', 'Pembayaran')

@section('content')
    <div class="">
        @if (Session::get('notSuccess'))
            <div class="alert alert-danger w-100">
                {{ Session::get('notSuccess') }}
             </div>  
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
         </div>
        @endif
         @if(is_null($bayar))
         
        <form action="{{ route('payment') }}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nama Bank</label>
                    <select class="form-select" aria-label="Default select example" name="nm_bank" id="nm_bank">
                        <option selected>--Pilih Bank--</option>
                        <option value="Bank BCA">Bank BCA</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>
                        <option value="Bank BJB">Bank BJB</option>
                        <option value="Bank BRI">Bank BRI</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                  
                    <div id="lainnya" style="display: none;" class="form-outline mt-3 mb-3">
                         <label class="form-label" for="bank" >Nama Bank atau Dompet Digital</label>
                        <input type="text" name="bank" class="form-control "  />
                     </div>
                </div>
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nomor Rekening</label>
                    <input type="number" name="nm_rek" class="form-control " placeholder="" />
                </div>
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nominal</label>
                    <input type="text" name="nominal" class="form-control uang" id="rupiah"/>
                </div>
            </div>
          
            <div class="input-group mb-3">
                <input type="file" name="image" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
             <button type="submit" class="btn btn-primary offset-9">Upload Bukti Pembayaran</button>
        </form>
        @endif

        {{-- @if($bayar['status'] == 'Diproses' )
         <div class="alert alert-primary w-100">
            Pembayaran Anda sedang di proses oleh Admin!
         </div> 
         @endif 
         
         @if($bayar['status'] == 'Diterima' )
         <div class="alert alert-success w-100">
            Pembayaran Anda sudah di terima oleh Admin!
         </div> 
         @endif 
      
         @if($bayar['status'] == 'Ditolak') --}}
         {{-- <form action="{{ route('payment') }}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nama Bank</label>
                    <select class="form-select" aria-label="Default select example" name="nm_bank" id="nm_bank">
                        <option selected>--Pilih Bank--</option>
                        <option value="Bank BCA">Bank BCA</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>
                        <option value="Bank BJB">Bank BJB</option>
                        <option value="Bank BRI">Bank BRI</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                  
                    <div id="lainnya" style="display: none;" class="form-outline mt-3 mb-3">
                         <label class="form-label" for="bank" >Nama Bank atau Dompet Digital</label>
                        <input type="text" name="bank" class="form-control "  />
                     </div>
                </div>
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nomor Rekening</label>
                    <input type="number" name="nm_rek" class="form-control " placeholder="" />
                </div>
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nominal</label>
                    <input type="text" name="nominal" class="form-control uang" id="rupiah"/>
                </div>
            </div>
          
            <div class="input-group mb-3">
                <input type="file" name="image" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
             <button type="submit" class="btn btn-primary offset-9">Upload Bukti Pembayaran</button>
        </form> --}}
        {{-- @endif --}}
       
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });

        $('#nm_bank').on('change',function(){
             if( $(this).val()==="lainnya"){
              $("#lainnya").show()
            }
            else{
            $("#lainnya").hide()
            }
          });

           
    /* Dengan Rupiah */
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e)
    {
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    </script>
@endsection