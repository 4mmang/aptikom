<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aptikom | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 shadow">
                    <form action="{{ route('validation') }}" method="POST">
                        @csrf
                        <h3 class="text-primary mb-3">Aptikkom Login</h3>
                        @if (session('message'))
                            <p class="alert alert-danger">{{ session('message') }}</p>
                        @endif
                        <label for="email" class="mb-2">Email</label>
                        <input required type="email" value="{{ old('email') }}" class="form-control" name="email" id="email"
                            placeholder="Masukkan email">
                        <label for="password" class="mb-2 mt-3">Password</label>
                        <input required type="password" class="form-control" name="password" id="password"
                            placeholder="Masukkan password">
                        <button class="btn btn-primary mt-3 float-end px-4" type="submit">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
