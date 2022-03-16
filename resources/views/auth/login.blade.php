<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herbar.io</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Styles -->
    <style>
        body {
            padding-top: 100px;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(35, 155, 86, 1), rgba(88, 214, 141, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(35, 155, 86, 1), rgba(88, 214, 141, 1))
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                        <h3 class="panel-title">Por favor, identifíquese</h3>
                    </div> -->
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <!-- Email Address -->
                                <div class="form-group">
                                    <x-label for="email" class="form-label" :value="__('Email')" />
                                    <x-input id="email" class="form-control" placeholder="E-mail" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <x-label for="password" class="form-label" :value="__('Contraseña')" />
                                    <x-input id="password" class="form-control" placeholder="Password" type="password" name="password" value="" required autocomplete="current-password" />
                                </div>

                                <!-- Remember Me -->
                                <div class="checkbox">
                                    <label for="remember_me">
                                        <input id="remember_me" type="checkbox" name="remember" value="Remember Me">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                                <button class="btn btn-lg btn btn-success btn-block gradient-custom" type="submit" value="Login">
                                    {{ __('Identificarse') }}
                                </button>
                                <br>
                                <h5 class=text-center>¿No estás registrado? Pulsa <a href="{{ route('register') }}">aquí</a></h5>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</body>

</html>