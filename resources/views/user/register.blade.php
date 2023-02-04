<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.css">
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css">
</head>
<body>
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Bine ati venit!</h2>
                                <p class="mb-0 h6 fw-light">Pana la 100 de cursuri si 8000 de grile pentru rezidentiat!</p>
                            </div>
                            <img src="{{ url('/') }}/assets/images/element/02.svg" class="mt-5" alt="">
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="{{ url('/') }}/assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="{{ url('/') }}/assets/images/avatar/02.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="{{ url('/') }}/assets/images/avatar/03.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="{{ url('/') }}/assets/images/avatar/04.jpg"
                                            alt="avatar">
                                    </li>
                                </ul>
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">2k+ Studenti rezidenti s-au alaturat deja, ce mai astepti?</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-2">Conecteaza-te!</h1>
                                <p class="lead mb-4">Ne pare bine sa te re-vedem!Conecteaza-te mai jos folosind emailul si parola.</p>
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif
                                <form action="{{ route('register.post') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Adresa email</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="email"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="Email..." id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Parola</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="Parola..." id="password" name="password">
                                        </div>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Parola trebuie sa contina minim 8 caractere.
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Confirma parola</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="Confirma parola..." id="password_confirmation" name="password_confirmation">
                                        </div>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Parola trebuie sa contina minim 8 caractere.
                                        </div>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                            <label class="form-check-label" for="remember">Tine-ma minte!</label>
                                        </div>
                                        <div class="text-primary-hover">
                                            <a href="forgot-password.html" class="text-secondary">
                                                <u>Ai uitat parola?</u>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">Inregistreaza-te</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                                            Or</p>
                                    </div>
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <a class="btn btn-primary mb-0" href="{{ route('login') }}">Conecteaza-te</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <script src="{{ url('/') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="{{ url('/') }}/assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="{{ url('/') }}/assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="{{ url('/') }}/assets/js/functions.js"></script>

</html>
