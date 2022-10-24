<!DOCTYPE html>
<html lan="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <div class="text-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="50" fill="currentColor" class="bi bi-clipboard-plus-fill" viewBox="0 0 16 16">
                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm4.5 6V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5a.5.5 0 0 1 1 0Z"/>
                </svg>
            </div>
            <h1 class="display-4 ">LOGIN</h1>

            <form action>
                <div class="mb-4">
                    <h5>USUARIO</h5>
                    <input type="email" name="email" class="form-control" placeholder="Nombre de usuario o correo electronico" required>
                </div>
                <div class="mb-4">
                    <h5>CONTRASEÑA</h5>
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-outline-danger"> INICIAR SESION </button>
                </div>
                <div class="my-3">
                    <span>No tiene cuenta? <a href="#"> Registrarse</a></span>
                </div>
                <div class="my-3">
                    <span>Has olvidado la contraseña? <a href="#"> Recuperar</a></span>
                </div>
            </form>

            <div class="container w-100 my-5">
                <div class="row text-center">
                    <div class="col-12">INICIAR SESION</div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-primary w-100 my-1">
                            <div class="row aling-items-center">
                                <div class="col-2">
                                    <img src="imagenes/facebook.png" width="32">
                                </div>

                                <div class="col-10 text-center">Facebook</div>
                            </div>
                        </button>

                    </div>
                    <div class="col">
                        <button class="btn btn-outline-danger w-100 my-1">
                            <div class="row aling-items-center">
                                <div class="col-2">
                                    <img src="imagenes/google.jpeg" width="32">
                                </div>

                                <div class="col-10 text-center">Google</div>
                            </div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
