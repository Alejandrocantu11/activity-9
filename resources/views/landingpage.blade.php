<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
</head>
<body>
    <h1>Bienvenido a Activity 9</h1>
    <p>Esta es la vista pública para visitantes no registrados.</p>
    <a href="{{ route('login') }}">Iniciar sesión</a> |
    <a href="{{ route('register') }}">Registrarse</a>
</body>
</html>
