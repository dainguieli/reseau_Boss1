<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In / Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                       <!--     <h6 class="mb-0 pb-3"><span>Se connecter</span><span>S'inscrire</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />-->
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Se connecter</h4>

                                            @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Entrez votre Email" id="logemail"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Entrez votre mot de passe" id="logpass"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>

                                                <button type="submit" class="btn mt-4">Se connecter</button>
                                            </form>
                                            @if (Route::has('password.request'))
                                                <p class="mb-0 mt-4 text-center"><a
                                                        href="{{ route('password.request') }}" class="link">Mot de
                                                        passe oublié?</a></p>
                                            @endif

                                        </div>
                                    </div>
                                </div>



                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-1 pb-3">S'inscrire</h4>

                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style"
                                                        placeholder="Entrez votre Nom & Prénom(s)" id="logname"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Entrez votre Email" id="logemail"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <select class="form-control mt-2 form-style"
                                                        aria-label="Default select example" name="type">
                                                        <option value="Quel est votre fonction?" selected>Quel est votre
                                                            fonction?</option>
                                                        <option value="developpeur">Developpeur d'application</option>
                                                        <option value="publie reporter">Publie reporter</option>
                                                        <option value="community manager">Community manager</option>
                                                        <option value="Infographe">Infographe</option>
                                                    </select>
                                                    <i class="input-icon uil uil-bag"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="contact" class="form-style"
                                                        placeholder="Entrez votre contact" id="contact"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Entrez votre mot de passe" id="logpass"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Allons-y!</button>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>
