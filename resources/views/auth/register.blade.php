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
                        <h3 class="panel-title">Por favor, regístrese</h3>
                    </div> -->
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <!-- Name -->
                                <div class="form-group">
                                    <x-label for="name" class="form-label" :value="__('Nombre')" />
                                    <x-input id="name" class="form-control" placeholder="Nombre" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Surname -->
                                <div class="form-group">
                                    <x-label for="surname" class="form-label" :value="__('Apellidos')" />
                                    <x-input id="surname" class="form-control" placeholder="Apellidos" type="text" name="surname" :value="old('surname')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <x-label for="email" class="form-label" :value="__('Email')" />
                                    <x-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <x-label for="password" class="form-label" :value="__('Contraseña')" />
                                    <x-input id="password" class="form-control" placeholder="Contraseña" type="password" name="password" value="" required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <x-label for="password_confirmation" class="form-label" :value="__('Confirmar contraseña')" />
                                    <x-input id="password_confirmation" class="form-control" placeholder="Contraseña" type="password" name="password_confirmation" required autofocus />
                                </div>
                                <!-- Role -->
                                <div class="form-group">
                                    <x-label for="role" class="form-label" :value="__('Rol')" />
                                    <select id="role" class="form-control" placeholder="Rol" type="text" name="role" :value="old('role')" required autofocus>
                                        <option type='text-center' name='student' selected>Alumno/a</option>
                                        <option type='text-center' name='teacher'>Profesor/a</option>
                                    </select>
                                </div>
                                <button class="btn btn-lg btn-success btn-block gradient-custom" type="submit" value="Register">
                                    {{ __('Registrase') }}
                                </button>
                                <br>
                                <h5 class=text-center>¿Estás ya registrado/a? Pulsa <a href="{{ route('login') }}">aquí</a></h5>
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