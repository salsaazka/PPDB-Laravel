@extends('layouts.base-admin')

@section('title', '')

@section('content')
    <div class="">
        <form action="" method="post">
            <div class="row">
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nomor Rekening</label>
                  <input type="number" name="no_rek" class="form-control " placeholder="" />
                </div>
          
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nama Bank</label>
                  <input type="number" name="nm_bank" class="form-control " placeholder="" />
                </div>
                
            
                <div class="form-outline mt-3 mb-3 col-4">
                    <label class="form-label" >Nominal</label>
                  <input type="number" name="nominal" class="form-control " placeholder="" />
                </div>
                
            </div>
          
            <div class="form-outline mt-3 mb-3 col-12">
                <label class="form-label" >Bukti Foto</label>
              <input type="image" name="image" class="form-control " placeholder="" />
            </div>
       
        </form>
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
    </script>
@endsection
