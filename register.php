<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Project
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.html">Register</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
<!----== НАЧАЛО ФОРМЫ ==---->
                            <div class="card-body">
                                <form method="POST" action="ext/proc_reg.php">

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                        <div class="col-md-6">
<!--                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name_reg" autofocus>-->
	                                        <input id="name" type="text" class="form-control" name="name_reg">
<!--                                                <span class="invalid-feedback" role="alert">-->
<!--                                                    <strong>Ошибка валидации</strong>-->
<!--                                                </span>-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                        <div class="col-md-6">
	                                        <?php if (isset($_COOKIE['send']) && $_COOKIE['send'] == "1"): ?>
		                                        <div class = "alert alert-warning" role="alert">
			                                        e-mail не соответствует формату
		                                        </div>
	                                        <?php endif; ?>
	                                        <?php if (isset($_COOKIE['send-double']) && $_COOKIE['send-double'] == "4"): ?>
		                                        <div class = "alert alert-warning" role="alert">
			                                        такой e-mail уже существует
		                                        </div>
	                                        <?php endif; ?>
                                            <input id="email" type="email" class="form-control" name="email" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                        <div class="col-md-6">
	                                        <?php if (isset($_COOKIE['send-count']) && $_COOKIE['send-count'] == "3"): ?>
		                                        <div class = "alert alert-warning" role="alert">
			                                        В пароле менее 6-ти символов
		                                        </div>
	                                        <?php endif; ?>
                                            <input id="password" type="password" class="form-control " name="password1"  autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                        <div class="col-md-6">
	                                        <?php if (isset($_COOKIE['send-passwd']) && $_COOKIE['send-passwd'] == "2"): ?>
		                                        <div class = "alert alert-warning" role="alert">
			                                        Пароли не совпадают
		                                        </div>
	                                        <?php endif; ?>
                                            <input id="password-confirm" type="password" class="form-control" name="password2"  autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
<!----== КОНЕЦ ФОРМЫ ==---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
