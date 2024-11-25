<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="mt-5">
    <h1 class="fw-bold text-center">Kalkulator dengan <span class="text-danger fw-bold">Laravel</span></h1>
    <div class="d-flex justify-content-center mb-3">
        <a class="btn btn-sm btn-primary px-3 me-2" style="border-radius: 20px;" href="{{ route('tambah') }}">Tambah</a>
        <a class="btn btn-sm btn-primary px-3 me-2" style="border-radius: 20px;" href="{{ route('kurang') }}">Kurang</a>
        <a class="btn btn-sm btn-primary px-4 me-2" style="border-radius: 20px;" href="{{ route('kali') }}">Kali</a>
        <a class="btn btn-sm btn-primary px-4 me-2" style="border-radius: 20px;" href="{{ route('bagi') }}">Bagi</a>
        <a class="btn btn-sm btn-primary px-4" style="border-radius: 20px;" href="{{ route('user.index') }}">User</a>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>


<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</footer>

</html>
