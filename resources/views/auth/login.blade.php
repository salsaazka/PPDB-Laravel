<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>PPDB SMK Wikrama Bogor | LOGIN</title>
    <link rel="stylesheet" href="assets/template/plugins/bootstrap/bootstrap.min.css">
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    {{-- End Bootstrap --}}
</head>
<body>
    <div class="content-sign">
        <div class="d-flex flex row">
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{ asset('assets/img/employees/foto login.jpg') }}" alt="" class="w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <form action="" method="POST" >
                    <div class="card p-3">
                        <h2>Login</h2>
                        <p>Masuk ke Akun PPDB mu</p>
                        <div class="d-flex flex-column mt-3">
                            <div>
                                <label for="">Email</label>
                                <span class="fa fa-user p-2"></span>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email terdaftar">
                            </div>
                            <div>
                                <label for="">Password</label>
                                <span class="fa fa-user p-2"></span>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password anda">
                                <span onclick="toggle('password')">
                                <i class="fa fa-eye toggle-hide" onclick="myFunction(this)"></i></span>
                            </div>
                            <button type="submit" class="mt-4 btn btn-blue gradient sign d-glex justify-content-center align-items-center">Login</button>
                        </div>
                    </div>
                </form>
            </div>
           
        </div>

    </div>
   
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- End Jquery --}}

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    {{-- End Bootstrap JS --}}

    <script type="text/javascript">
    
        function toggle(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction(show) {
            show.classList.toggle("fa-eye-slash");
        }
    </script>
</body>
</html>