<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login Page</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                    role="tab" aria-controls="pills-home" aria-selected="true">Masuk</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                    role="tab" aria-controls="pills-profile" aria-selected="false">Daftar</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form px-4 pt-5">
                        <form action="{{ route('action-login') }}" method="post">
                            @csrf
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email...">
                            <input type="password" name="password" class="form-control"
                            placeholder="Masukan Password...">
                            <button class="btn btn-dark btn-block" type="submit">Masuk</button>
                        </form>
                    </div>
                    @if (session('message'))
                        <script>
                            alert('{{ session('message') }}');
                        </script>
                    @endif
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form px-4">
                        <form action="{{ route('action-register') }}" method="post">
                            @csrf
                            <input type="text" name="nama_lengkap" class="form-control"
                                placeholder="Masukan Nama Lengkap...">
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email...">
                            <input type="password" name="password" class="form-control"
                                placeholder="Masukan Password...">
                            <button class="btn btn-dark btn-block" type="submit">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
