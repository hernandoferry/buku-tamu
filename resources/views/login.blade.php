<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Buku Tamu</title>
        <link href="{{ asset ('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('{{ asset('../images/12689.jpg') }}');background-size:cover; background-position:center; heigth:100vh; opacity:0.7">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-black bg-opacity-75"><h3 class="text-center font-weight-light my-4 text-white">Login</h3></div>
                                    <div class="card-body border border-dark rounded-sm">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small text-dark link-primary" href="password.html">Lupa Kata Sandi ?</a>
                                                <a class="btn btn-dark" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        
    </body>
</html>
