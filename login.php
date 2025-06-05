<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Noticias_login</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icono -->
  <link rel="icon" href="img/icono2png.png" type="image/x-icon">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="css/estilos_login.css">

  <style>
    body {
      background: url('img/mundo.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
  </style>
</head>
<body>
<main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="img/icono2png.png" alt="icono" style="height: 40px;">
        <span class="fs-4 ms-2">Noticias</span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Inicio</a></li>
      </ul>
    </header>
  </div>

  <!-- Login -->
  <div class="container d-flex justify-content-center">
    <div id="inicio" class="bg-light p-4 rounded-3 shadow-lg" style="width: 100%; max-width: 400px;">
     <br>
        <h2>Inico de sesión</h2>
        <hr>
        <form class="col-12 needs-validation"  id="miFormulario1" action="inicio_sesion.php" method="get" novalidate>
          <label for="username" class="form-label">Nombre de usuario</label>
            <div class="input-group has-validation">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                     <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                </span>
                <input type="text" class="form-control" id="inicio1" name="inicio1" placeholder="Username" required></inpunt>
                <div class="invalid-feedback">
                  El nombre de usuario es obligatorio.
                </div>
            </div>
            <br>

            <label for="contraseña" class="form-label">Contraseña</label>
            <div class="input-group has-validation">
               <span class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                     <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                  </svg>
                </span>
                <input type="password" class="form-control" id="inicio2" name="inicio2" placeholder="Contraseña" required>
                <div class="invalid-feedback">
                 La contraseña es obligatoria.
                </div>
            </div>
            <br>
            <button class="btn btn-lg btn-secondary boton "  type="submit">continuar</button>
            <button type="button" class="btn btn-lg btn-primary boton" onclick="registro()">registrarse</button>
        </form>
    </div>
  </div>

  <!-- Registro -->
    <div class="container d-flex justify-content-center">
    <div id="final" class="bg-light p-4 rounded-3 shadow-lg" style="width: 100%; max-width: 400px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square t1" viewBox="0 0 16 16" onclick="registro2()">
          <path  onclick="registro2" d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
          <path  onclick="registro2" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
          <h2>registrarte</h2>
          <hr>
         
          <form class="col-12 needs-validation" id="miFormulario" action="procesar.php" method="get"  onsubmit="return validarFormulario()" novalidate>
            <label for="username" class="form-label">Nombre de usuario</label>
            <div class="input-group has-validation">
              <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
              </span>
              <input type="text" class="form-control" id="registro1" name="registro1" placeholder="user" required>
                <div class="invalid-feedback">
                  El nombre de usuario es obligatorio.
                </div>
            </div>
            <br>
            
            <label for="correo" class="form-label">Correo electrónico</label>
            <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="registro2" name="registro2" placeholder="ejemplo@gmail.com" required>
                  <div class="invalid-feedback">
                    El correo electrónico es obligatorio.
                  </div>
            </div>
            <br>
          
            <label for="contraseña" class="form-label">Contraseña</label>
            <div class="input-group has-validation">
               <span class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                  </svg>
                </span>
                <input type="password" class="form-control" id="registro3" name="registro3"  placeholder="contraseña"  required>
                <div class="invalid-feedback">
                 La contraseña es obligatoria.
                </div>
            </div>
            
            <br>
            <div class="conteiner">
              <button class="w-100 btn btn-danger btn-lg" type="submit" >registrarse</button>
            </div>
         </form>  
    </div>
    </div>
  <!-- Puedes mover esto a un modal o div oculto para mostrarlo con JS -->
</main>

<!-- Bootstrap Bundle JS (con Popper incluido) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/checkout.js.download"></script>
<script src="js/boton.js"></script>
<!-- Tu JS -->
<script src="js/boton.js"></script>
</body>
</html>
