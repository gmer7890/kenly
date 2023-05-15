<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre'])) {
  // Si no ha iniciado sesión, redireccionar a la página de inicio de sesión
  header('Location: registro.php');
  exit;
}

// Leer los datos de usuarios del archivo JSON
$usuarios = json_decode(file_get_contents('usuarios.json'), true);

// Obtener los datos del usuario actual
$nombre = $_SESSION['nombre'];
$usuario = $usuarios[$nombre];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenly</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="logog.png" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside style="height:100vh;" class="sidebar">
    <div style="margin-top: 93px;" class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                



                <div class="logo-text">
                    <span class="logo-title">Kenly</span>
                    <span class="logo-subtitle">Inicio</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="index.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg></span>Inicio</a>
                </li>
                <li>
                    <a href="busqueda.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></span>Busqueda</a>
                </li>
                <li>
                    <a href="discover.php"><svg style="margin-right:8px;" aria-label="Explorar" class="_ab6-" color="rgb(245, 245, 245)" fill="rgb(245, 245, 245)" height="22" role="img" viewBox="0 0 24 24" width="22"><polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon><polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg>
                  </span>Explorar</a>
                </li>

                <li>
                    <a href="publicaciones.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
                  </span>Publicar</a>
                </li>
                
                <li>
                    <a class="show-cat-btn" >
                        
                        
                    </a>
                    <ul class="cat-sub-menu">
                      
                    </ul>
                </li>

                
                <li style="
    bottom: 0;">
                    <a href="perfil.php">
                    <svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                        Yo
                    </a>
                    <span class="msg-counter">7</span>
                </li>

               
            </ul>
           
        </div>
    </div>
    <div class="sidebar-footer">
        
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav style="position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  z-index: 999; height: 84px;" class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start ll">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <form method="GET" action="resultados.php">
        <input  type="text" name="q"  list="opcionesBusqueda" autocomplete="off" placeholder="Buscas algo ...">
        <datalist id="opcionesBusqueda">
        <?php
$archivo = "estadistica.json";
$datos = array();
$dedu = 0;
if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $datos = json_decode($contenido);
}

if (isset($_POST['eliminar'])) {
    $id = $_POST['eliminar'];
    unset($datos->$id);

    $json_datos = json_encode($datos, JSON_PRETTY_PRINT);
    file_put_contents($archivo, $json_datos);

    header("Location: csc.php");
    exit();
}

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $datos = array_filter($datos, function ($dato) use ($q) {
        return strpos($dato->foto, $q) !== false
            || strpos($dato->nombre, $q) !== false
            || strpos($dato->texto, $q) !== false;
    });
}

shuffle($datos);
?>

    
		<?php

		$promg = 0;
		foreach ($datos as $id => $dato) {
            
		?>
    <option value="<?php echo $dato->texto ?>">
        <?php
        }
        ?>
</datalist>
        </form>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper ll2">


      <a href="discover.php" class="open-modal"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg></span></a>

        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="discover.php">
              <div class="notification-dropdown-icon info">
                <span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg style="margin-right:8px;" aria-label="Explorar" class="_ab6-" color="rgb(245, 245, 245)" fill="rgb(245, 245, 245)" height="22" role="img" viewBox="0 0 24 24" width="22"><polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon><polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg></span>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
           <span style="border-radius: 50%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    overflow: hidden;
    width: 40px;
    height: 40px;
    background-color: #f5efff00;">
            <img style="border:solid 0px white; width:39px; height:39px; border-radius:100px; background-color: #ccc; background-image: url(<?php echo !empty($usuario['imagen']) ? 'imagenes/'.$usuario['imagen'] : 'https://i.pinimg.com/564x/a8/0e/36/a80e3690318c08114011145fdcfa3ddb.jpg'; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="perfil.php">
              <i data-feather="user" aria-hidden="true"></i>
              <span>perfil</span>
            </a></li>
          <li><a href="editar.php">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>editar</span>
            </a></li>
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>cerrar</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Kenly</h2>
        <div class="row stat-cards">
          
          <div class="col-md-6 col-xl-3">
            
          </div>

         
        </div>
        <div class="row">
          <style>
            .hll{
              padding-right: 138px;
    padding-left: 138px;
            }
            @media (max-width: 767px) {
  .hll{
    padding-right: 0px;
    padding-left: 0px;
  }
}
.lll{
              border-radius: 10px;
            }
            @media (max-width: 767px) {
  .lll{
    border-radius: 0px;
  }
}
.ll{
              display: block;
            }
            @media (max-width: 767px) {
  .ll{
   display: none;
  }
}
.ll2{
              display: none;
            }
            @media (max-width: 767px) {
  .ll2{
   display: block;
  }
}
          </style>
          <div class="col-lg-9 hll">
            
          <div>
  
  <article style="padding:0px; width:100%;" class="stat-cards-item lll">

  <span style="font-size:16px; padding: 8px;" class="sidebar-user__subtitle stat-cards-info__num"> Redacciones y sket</span>

    <br>
   
       
    
  
  
</div>
<br>


<?php
	$archivo = "estadistica.json";
	$datos = array();
	$dedu = 0;
	if (file_exists($archivo)) {
	    $contenido = file_get_contents($archivo);
	    $datos = json_decode($contenido);
	}

	if (isset($_POST['eliminar'])) {
		$id = $_POST['eliminar'];
		unset($datos->$id);

		$json_datos = json_encode($datos, JSON_PRETTY_PRINT);
		file_put_contents($archivo, $json_datos);

		header("Location: csc.php");
		exit();
	}

	shuffle($datos);
	?>
    
		<?php

		$promg = 0;
		foreach ($datos as $id => $dato) {
		?>

<p style="font-size:0px;">
<?php

    // Asignar el valor de las variables "tiempo", "foto" y "texto"
    $nombre = $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre);
    $texto = $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto);
    $tiempo = $tiempo = preg_replace('/\D/', '', $dato->tiempo);

    // Concatenar el valor de las variables en el nombre del archivo
    $nombre_archivo = $nombre . '_' . $texto .  $tiempo . '.php';

    // Definir el contenido del archivo
    $contenido_archivo = '
    <?php
    session_start();

    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION["nombre"])) {
      // Si no ha iniciado sesión, redireccionar a la página de inicio de sesión
      header("Location: login.php");
      exit;
    }

    // Leer los datos de usuarios del archivo JSON
    $usuarios = json_decode(file_get_contents("usuarios.json"), true);

    // Obtener el ID del usuario que deseas mostrar
    $idUsuario = "hola";

    // Verificar si el ID de usuario existe en la lista de usuarios
    if (!isset($usuarios[$idUsuario])) {
      // Si el ID de usuario no es válido, mostrar un mensaje de error o redireccionar a una página de error
      echo "Usuario no encontrado";
      exit;
    }

    // Obtener los datos del usuario utilizando el ID
    $usuario = $usuarios[$idUsuario];
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php
  // Leer el contenido del archivo JSON
  $json = file_get_contents("estadistica.json");
  
  // Convertir el JSON a un objeto PHP
  $datos = json_decode($json);
  
  // Mostrar solo el nombre en el HTML
  
  echo "'.$dato->nombre.'";
  ?> -  <?php
  // Leer el contenido del archivo JSON
  $json = file_get_contents("estadistica.json");
  
  // Convertir el JSON a un objeto PHP
  $datos = json_decode($json);
  
  // Mostrar solo el nombre en el HTML
  
  echo "'.$dato->texto.'";
  ?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

    <body>
   




    <style>
      .progress-bar2 {
        width: 0%;
        height: 5px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        transition: width 0.1s ease-in-out;
        background: linear-gradient(to right, blue, purple, magenta);
      }
      .com {
        display:block;
      }
      @media screen and (max-width: 480px) {
        .com {
          display:none;
        }
    </style>
  
  
    <div class="progress-bar2"></div>
    <script>
    
    window.addEventListener("load", function() {
      const progressBar = document.querySelector(".progress-bar2");
      let width = 0;
      const intervalId = setInterval(function() {
        if (width >= 100) {
          clearInterval(intervalId);
          progressBar.style.width = "0%";
          progressBar.style.display = "none";
        } else {
          width++;
          progressBar.style.width = `${width}%`;
        }
      }, 50);
    });
  
    </script>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
      <!-- ! Sidebar -->
     <aside style="height:100vh;" class="sidebar">
    <div style="margin-top: 93px;" class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                
                <div class="logo-text">
                    <span class="logo-title">Kenly</span>
                    <span class="logo-subtitle">Inicio</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a href="index.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"></path>
</svg>Inicio</a>
                </li>
                <li>
                    <a href="busqueda.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
</svg>Busqueda</a>
                </li>
                <li>
                    <a href="discover.php"><svg style="margin-right:8px;" aria-label="Explorar" class="_ab6-" color="rgb(245, 245, 245)" fill="rgb(245, 245, 245)" height="22" role="img" viewBox="0 0 24 24" width="22"><polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon><polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg>
                  Explorar</a>
                </li>

                <li>
                    <a href="publicaciones.php"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
</svg>
                  Publicar</a>
                </li>
                
                <li>
                    <a class="show-cat-btn">
                        
                        
                    </a>
                    <ul class="cat-sub-menu">
                      
                    </ul>
                </li>

                
                <li style="
    bottom: 0;">
                    <a href="comments.html">
                    <svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
</svg>
                        Yo
                    </a>
                    <span class="msg-counter">7</span>
                </li>

               
            </ul>
           
        </div>
    </div>
    <div class="sidebar-footer">
        
    </div>
</aside>
      <div class="main-wrapper">
        <!-- ! Main nav -->
        <nav style="position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 999; height: 84px;" class="main-nav--bg com">
      <div class="container main-nav">
        <div class="main-nav-start ll">
          <div class="search-wrapper">
            <i data-feather="search" aria-hidden="true"></i>
            <input type="text" placeholder="Enter keywords ..." required>
          </div>
        </div>
        <div class="main-nav-end">
          <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
            <span class="sr-only">Toggle menu</span>
            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
          </button>
          <div class="lang-switcher-wrapper">
            <button class="lang-switcher transparent-btn" type="button">
              EN
              <i data-feather="chevron-down" aria-hidden="true"></i>
            </button>
            <ul class="lang-menu dropdown">
              <li><a href="##">English</a></li>
              <li><a href="##">French</a></li>
              <li><a href="##">Uzbek</a></li>
            </ul>
          </div>
          <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
            <span class="sr-only">Switch theme</span>
            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
          </button>
          <div class="notification-wrapper ll2">
            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
              <span class="sr-only">To messages</span>
              <span class="icon notification active" aria-hidden="true"></span>
            </button>
            <ul class="users-item-dropdown notification-dropdown dropdown">
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon info">
                    <i data-feather="check"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">System just updated</span>
                    <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                      here.</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon danger">
                    <i data-feather="info" aria-hidden="true"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">The cache is full!</span>
                    <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                      interfere ...</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon info">
                    <i data-feather="check" aria-hidden="true"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">New Subscriber here!</span>
                    <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                  </div>
                </a>
              </li>
              <li>
                <a class="link-to-page" href="##">Go to Notifications page</a>
              </li>
            </ul>
          </div>
          <div class="nav-user-wrapper">
            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
              <span class="sr-only">My profile</span>
              <div class="nav-user-img" style="background-color: #ccc;
    background-image: url(imagenes/'.$usuario["imagen"].');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">
                
              </div>
            </button>
            <ul class="users-item-dropdown nav-user-dropdown dropdown">
              <li><a href="##">
                  <i data-feather="user" aria-hidden="true"></i>
                  <span>Profile</span>
                </a></li>
              <li><a href="##">
                  <i data-feather="settings" aria-hidden="true"></i>
                  <span>Account settings</span>
                </a></li>
              <li><a class="danger" href="##">
                  <i data-feather="log-out" aria-hidden="true"></i>
                  <span>Log out</span>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
        <!-- ! Main -->
        <main style="padding-top: 0px;" class="main users chart-page" id="skip-target">
          <div class="container">
            <h2 class="main-title com">Dashboard</h2>
            <div class="com">
            <br><br>
            </div>
            <div class="row">
              <style>
                .hll{
                  padding-right: 85px;
        padding-left: 85px;
                }
                @media (max-width: 767px) {
      .hll{
        padding-right: 0px;
        padding-left: 0px;
      }
    }
    .lll{
                  border-radius: 10px;
                }
                @media (max-width: 767px) {
      .lll{
        border-radius: 0px;
      }
    }
    .ll{
                  display: block;
                }
                @media (max-width: 767px) {
      .ll{
       display: none;
      }
    }
    .ll2{
                  display: none;
                }
                @media (max-width: 767px) {
      .ll2{
       display: block;
      }
    }
              </style>
              <div class="col-lg-9 hll">



              <div>
              <article style="padding:0px;" class="stat-cards-item lll">
            
                <article class="stat-cards-item lll com">
                
                  
               
              </article>
            
                <br>
               
                <?php
                
$file = "'.$dato->foto.'";

if ($file) {
$info = pathinfo($file);
$extension = strtolower($info[\'extension\']);
if ($extension === "mp4") {
echo \'<div class="video-container">
<video loop autoplay style="width:100%; object-fit: cover; min-height: 350px; object-fit:contain; background-color:black" poster="ruta/a/poster.jpg" class="video__player" src="'.$dato->foto.'";
"></video>
<button class="play-button"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="black" class="bi bi-play-fill" viewBox="-0.5 0 16 14">
        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
      </svg></button>
<div class="back-icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
  </svg>
</div>
<div class="back-icon2">
  <div class="video__controls">
    <div class="duration">0:00</div>
  </div>
</div>
<div class="progress-container">
    <progress class="progress-bar" value="0" max="100"></progress>
  </div>
</div>\';
}
else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
  $imageData = base64_encode(file_get_contents($file));
  $src = \'data:image/\' . $extension . \';base64,\' . $imageData;
  echo \'<img src="'.$dato->foto.'";
  " style="width:100%;" alt="imagen">\';
}
else {
echo \'\';
}
} else {
echo \'\';
} ?>
<p style="font-size:0px;"><?php
    if(isset($_POST["texto"])) {
      date_default_timezone_set("America/Mexico_City");
      setlocale(LC_ALL, "es_ES");
      $tiempo = strftime("%d de %B de %Y, %I:%M:%S %p");
        $datos = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'time='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'";
        
        $filename = $datos . ".json";

        if(file_exists($filename)) {
            $json_data = file_get_contents($filename);
            $data = json_decode($json_data, true);
        } else {
            $data = array();
        }

        $nuevo_dato = array(
          "texto" => $_POST["texto"],
          "tiempo" => $tiempo
      );

        array_push($data, $nuevo_dato);

        $json_data = json_encode($data, JSON_PRETTY_PRINT);
        
        if(file_put_contents($filename, $json_data)) {
            echo "El archivo se ha actualizado correctamente.";
        } else {
            echo "No se pudo actualizar el archivo.";
        }
    }
?>


<?php
		    // Código PHP para contar likes
		    if(isset($_POST["like"])) {
		        $datos = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'timereaccion='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'";

		        $filename = $datos . ".json";

		        if(file_exists($filename)) {
		            $json_data = file_get_contents($filename);
		            $data = json_decode($json_data, true);
		        } else {
		            $data = array("likes" => 0);
		        }

		        $data["likes"]++;

		        $json_data = json_encode($data, JSON_PRETTY_PRINT);

		        if(file_put_contents($filename, $json_data)) {
		            echo "";
		        } else {
		            echo "";
		        }
		    }

		    $datos = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'timereaccion='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'";

		    $filename = $datos . ".json";

		    if(file_exists($filename)) {
		        $json_data = file_get_contents($filename);
		        $data = json_decode($json_data, true);
		    } else {
		        $data = array("likes" => 0);
		    }

		    $num_likes = $data["likes"];

		    
		?>


</p>


                <article style="padding-left:11px; padding-right:11px; padding-top:13px; clear: both; width:100%" class="lll">
                <a href="##" style="background-color:transparent;" class="sidebar-user">
                    <div style="background-color: #ccc; width:45px; margin-right:5px; border-radius:100px; height:45px;
    background-image: url(imagenes/!empty($dato->ft) ? $dato->ft : "https://i.pinimg.com/564x/a8/0e/36/a80e3690318c08114011145fdcfa3ddb.jpg";);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">
                
              </div>
                    <div class="sidebar-user-info">
                        <span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><?php
                        // Leer el contenido del archivo JSON
                        $json = file_get_contents("estadistica.json");
                        
                        // Convertir el JSON a un objeto PHP
                        $datos = json_decode($json);
                        
                        // Mostrar solo el nombre en el HTML
                        
                        echo "'.$dato->voto.'";
                        ?></span>
                        <span style="font-size:11px;" class="sidebar-user__subtitle stat-cards-info__num">              <?php
                        // Leer el contenido del archivo JSON
                        $json = file_get_contents("estadistica.json");
                        
                        // Convertir el JSON a un objeto PHP
                        $datos = json_decode($json);
                        
                        // Mostrar solo el nombre en el HTML
                        
                        echo "'.$dato->tiempo.'";
                        ?></span>
                    </div>
                </a>
                <br>
                  <div class="top-cat-list__title">
                    <p style="font-size:16px; word-wrap: break-word;">              <?php
                    // Leer el contenido del archivo JSON
                    $json = file_get_contents("estadistica.json");
                    
                    // Convertir el JSON a un objeto PHP
                    $datos = json_decode($json);
                    
                    // Mostrar solo el nombre en el HTML
                    
                    echo "'.$dato->texto.'";
                    ?></p>
                  </div>
                </article>
                <article style="padding:8px; width:100%" class="stat-cards-item">
                  
                  <div class="like-share-bar">
                   <a class="like-button"><form method="post" style="display: inline-block;">
<button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
<div class="top-cat-list__title">
<span style="margin-top: 7px; margin-left: 8px; font-size:16px;"><?php echo $num_likes; ?></span>
</div>

</button>
</form></a>
            
                    <button class="share-button"><a href="#'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'modal='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'"><span style="font-size:15px; padding-top:8px; padding-right:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
            </svg></span></a></button>
            



            <?php
                
            $file = "'.$dato->foto.'";
            
            if ($file) {
            $info = pathinfo($file);
            $extension = strtolower($info[\'extension\']);
            if ($extension === "mp4") {
            echo \'<button class="share-button"><a href="'.$dato->foto.'" download="kenly('.$dato->foto.').mp4"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
            </svg></span></a></button> \';
            }
            else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
              $imageData = base64_encode(file_get_contents($file));
              $src = \'data:image/\' . $extension . \';base64,\' . $imageData;
              echo \'<button class="share-button"><a href="'.$dato->foto.'" download="kenly('.$dato->foto.').jpg"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
              <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
              <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
              </svg></span></a></button> \';
            }
            else {
            echo \'\';
            }
            } else {
            echo \'\';
            } ?>
            
            
            <button style="margin-left:12px;" class="share-button"><a href="#'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'modal='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'" class="open-modal"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
  <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
  </svg></span></a></button>
                      <span class="more-button p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Denunciar</a></li>
                          <li><a href="##">films</a></li>
                        </ul>
                      </span>
                    
                  </div>
                  
                  <style>
                    .like-share-bar {
                      display: flex;
                      justify-content: space-between;
                      align-items: center;
                      width:100%;
                    }
                    .back-icon {
              position: absolute;
              top: 10px;
              right: 10px;
              transform: rotate(0deg);
              background-color: white;
              width: 30px;
              height: 30px;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 20%;
            }
            .progress-container {
              position: absolute;
              bottom: 0px;
              padding: 0px;
              left: 0px;
              width: 100%;
              z-index: 1;
            }
            .progress-bar {
              appearance: none;
              height: 3px;
              width: 100%;
              border-radius: 2px;
              background-color: #ccc;
              outline: none;
            }
            
            .progress-bar::-webkit-progress-bar {
              border-radius: 0px;
              background-color: #eee;
            }
            
            .progress-bar::-webkit-progress-value {
              border-radius: 0px;
              background-color: #c00;
            }
            
            .back-icon2 {
              position: absolute;
              bottom: 10px;
              padding-left: 18px;
              padding-right: 18px;
              font-size: 12px;
              left: 10px;
              transform: rotate(0deg);
              background-color: #000000a1;
              width: 30px;
              color: white;
              height: 30px;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 20%;
            }
            
            .duration{
            
            }
            
            .back-icon svg {
              color: black;
            }
                    .like-button,
                    .share-button,
                    .more-button {
                      background-color:transparent;
                      border: none;
                      margin: 5px;
                      cursor: pointer;
                    }
                    
                    .like-button:hover,
                    .share-button:hover,
                    .more-button:hover {
                      border-radius:100px;
                    }
                    
                    .more-button {
                      margin-left: auto;
                    }
                    .video-container {
                      position: relative;
                      width: 100%;
                      min-height: 350px;
                    }
                    
                    .play-button {
                      position: absolute;
                      top: 50%;
                      padding:15px;
                      border-radius:100%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      z-index: 1;
                    }
                    .playing .play-button {
                      display: none;
                    }
                    
                  </style>
                   
                  
                </article>
                <style>
                #comment-form {
                  display: flex;
                  flex-direction: row;
                  align-items: flex-start;
                  width:100%;
                  padding: 0px;
                  border-radius: 9999px;
                  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                  margin-right: 16px;
                  margin-bottom: 12px;
                  margin-left: 16px;
                }
              
                #comment-textarea {
                  flex: 1;
                  border: none;
                  resize: none;
                  font-size: 16px;
                  border-radius: 30px;
                  padding-top: 15px;
                  padding-right: 10px;
                  padding-left: 10px;
                  color:#1da1f2;
                 
                }
                .modalDialog {
                  position: fixed;
                  font-family: Arial, Helvetica, sans-serif;
                  top: 0;
                  right: 0;
                  border-radius:15px;
                  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
                  bottom: 0;
                  margin: 97px;
                  left: 0;
                  z-index: 99999;
                  opacity: 0;
                  -webkit-transition: opacity 400ms ease-in;
                  -moz-transition: opacity 400ms ease-in;
                  transition: opacity 400ms ease-in;
                  pointer-events: none;
              }
                .modalDialog:target {
                  opacity:1;
                  pointer-events: auto;
                }
                .modalDialog > div {
                  position: relative;
                  margin: 0% auto;
                  padding: 0px;
                  border-radius: 10px;
                  -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                }
                .close {
                  background: #606061;
                  color: #FFFFFF;
                  line-height: 25px;
                  position: absolute;
                  right: -12px;
                  text-align: center;
                  top: -10px;
                  width: 24px;
                  text-decoration: none;
                  font-weight: bold;
                  -webkit-border-radius: 12px;
                  -moz-border-radius: 12px;
                  border-radius: 12px;
                  -moz-box-shadow: 1px 1px 3px #000;
                  -webkit-box-shadow: 1px 1px 3px #000;
                  box-shadow: 1px 1px 3px #000;
                }
                .close:hover { background: #00d9ff; }
                #comment-submit {
                  border: none;
                  margin-top:7px;
                  background-color: transparent;
                  font-size: 16px;
                  line-height: 1.5;
                  color: #1da1f2;
                  cursor: pointer;
                  order: 2;
                }
                @media (max-width: 768px) {
                  .modalDialog {
                    position: fixed;
                    font-family: Arial, Helvetica, sans-serif;
                    top: 320px;
                    border-radius:15px;
                    right: 0;
                    margin: 0px;
                    bottom: 0;
                    width:100%;
                    left: 0;
                    z-index: 99999;
                    opacity:0;
                    -webkit-transition: opacity 400ms ease-in;
                    -moz-transition: opacity 400ms ease-in;
                    transition: opacity 400ms ease-in;
                    pointer-events: none;
                  }
                }
                details{
                color:transparent;
                margin:6px;
                }
              </style>
              
              <form id="comment-form" method="POST">
              <button style="margin-top:8px; background-color:transparent; border-radius:20px; padding:4px; font-size:23px;" type="button" id="emoji-button">😺</button><textarea id="comment-textarea" class="main-nav--bg" name="texto" placeholder="Escribe tu comentario aquí"></textarea>
<div id="emoji-picker" class="emoji-picker-closed">
  <div class="emoji-picker-content">
  <nav style="position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 999; height: 34px;" class="main-nav--bg">
      <div style="border-bottom:solid 1px #cccc;" class="">
      <div style="padding-right:12px; padding-top:8px;" class="close-button">
      <button class="sidebar-user__title stat-cards-info__num">&times;</button>
    </div>
      </div>
    </nav>
    <div style="margin:29px;" class="main-nav--bg"></div>
    <div class="emoji-list main-nav--bg"></div>
  </div>
</div>

                <input id="comment-submit" type="submit" value="Enviar">
              </form>
              
              </article>
              <br>
            </div>
            <div class="ab">
  <div style="padding-bottom:2px; font-size:16px;" class="top-cat-list__title">
  Ver comentarios <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>
</div>
 


<style>
.tweet {
  display: flex;
  margin-bottom: 20px;
}

.avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
}

.username {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.tweet-body {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 10px;
}

.tweet-actions {
  display: flex;
  align-items: center;
}

.like-button,
.retweet-button,
.reply-button {
  display: inline-block;
  padding: 5px 10px;
  background-color: transparent;
  border: none;
  color: #999;
  font-size: 14px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.like-button:hover,
.retweet-button:hover,
.reply-button:hover {
  color: #1da1f2;
}

.like-button i,
.retweet-button i,
.reply-button i {
  margin-right: 5px;
}

.timestamp {
  font-size: 14px;
  color: #999;
  margin-left: auto;
}
.ab{
  display:block;
}
@media (max-width: 425px) {
.ab {
display:none;
}
}
</style>
            <p style="font-size:0px;"><?php
            $filename = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'time='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'" . ".json";
            $datos = array();
            if(file_exists($filename)) {
                $json_data = file_get_contents($filename);
                $datos = json_decode($json_data, true);
            }
        ?>
        <div style="width:85%; float:left; padding-left:0px;">
        <?php 
        shuffle($datos);
        foreach($datos as $dato): ?>
         
              <div class="tweet">
              <img class="avatar" src="https://via.placeholder.com/50" alt="Avatar">
              <div class="tweet-text">
                <h4 class="top-cat-list__title username">Usuario de ejemplo</h4>
                <p class="tweet-body active top-cat-list__title"><?php echo $dato["texto"]; ?></p>
                <div class="tweet-actions">
                  <a href="#" class="retweet-button"><i class="fas fa-retweet"></i> <?php echo $dato["tiempo"]; ?></a>
                  <span class="timestamp"></span>
                </div>
              </div>
            </div>
              
        <?php endforeach; ?>
    </div></p>

        </div>
        

  <script>
  const videos = document.querySelectorAll("video");

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  };
  
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.play();
        entry.target.muted = false;
      } else {
        entry.target.pause();
        entry.target.muted = true;
      }
    });
  }, options);
  
  videos.forEach(video => {
    const src = video.getAttribute("src");
  
    fetch(src)
      .then(res => res.blob())
      .then(blob => {
        const videoBlob = URL.createObjectURL(blob);
        video.src = videoBlob;
        observer.observe(video);
  
        video.addEventListener("ended", () => {
          const nextLi = video.closest("li").nextElementSibling;
          if (nextLi) {
            nextLi.scrollIntoView({ behavior: "smooth" });
          }
        });
  
        video.addEventListener("click", () => {
          if (video.paused) {
            video.play();
            video.muted = false;
          } else {
            video.pause();
            video.muted = true;
          }
        });
  
        video.autoplay = true;
        video.muted = false;
  
        // Agregar contador de tiempo
        const durationDisplay = video.closest(".video-container").querySelector(".duration");
        video.addEventListener("timeupdate", () => {
          const minutes = Math.floor(video.currentTime / 60);
          const seconds = Math.floor(video.currentTime % 60);
          durationDisplay.textContent = `${minutes}:${seconds.toString().padStart(2, "0")}`;
  
          // Actualizar la barra de progreso
          const progressBar = video.closest(".video-container").querySelector(".progress-bar");
          progressBar.value = (video.currentTime / video.duration) * 100;
        });
  
        // Adelantar o retroceder el video al hacer clic o deslizar la barra de progreso
        const progressBar = video.closest(".video-container").querySelector(".progress-bar");
        progressBar.addEventListener("click", event => {
          const pos = (event.pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
          video.currentTime = pos * video.duration;
        });
        progressBar.addEventListener("mousedown", () => {
          video.pause();
        });
        progressBar.addEventListener("mouseup", () => {
          video.play();
        });
        progressBar.addEventListener("touchstart", () => {
          video.pause();
        });
        progressBar.addEventListener("touchend", () => {
          video.play();
        });
        progressBar.addEventListener("touchmove", event => {
          const pos = (event.touches[0].pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
          video.currentTime = pos * video.duration;
        });
      });
  });
  
  const videoContainer = document.querySelector(".video-container");
  const videoPlayer = videoContainer.querySelector(".video__player");
  const playButton = videoContainer.querySelector(".play-button");
  
  playButton.addEventListener("click", () => {
    videoPlayer.play();
    videoContainer.classList.add("playing");
    playButton.style.display = "none";
  });
  
  videoPlayer.addEventListener("play", () => {
    videoContainer.classList.add("playing");
    playButton.style.display = "none";
  });
  
  videoPlayer.addEventListener("pause", () => {
    videoContainer.classList.remove("playing");
    playButton.style.display = "block";
  });
 // Actualizar la barra de progreso
 const progressBar = videoPlayer.closest(".video-container").querySelector(".progress-bar");
 videoPlayer.addEventListener("timeupdate", () => {
   progressBar.value = (videoPlayer.currentTime / videoPlayer.duration) * 100;
 });
 
 // Adelantar o retroceder el video al hacer clic o deslizar la barra de progreso
 progressBar.addEventListener("click", event => {
   const pos = (event.pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
   videoPlayer.currentTime = pos * videoPlayer.duration;
 });
 progressBar.addEventListener("mousedown", () => {
   videoPlayer.pause();
 });
 progressBar.addEventListener("mouseup", () => {
   videoPlayer.play();
 });
 progressBar.addEventListener("touchstart", () => {
   videoPlayer.pause();
 });
 progressBar.addEventListener("touchend", () => {
   videoPlayer.play();
 });
 progressBar.addEventListener("touchmove", event => {
   const pos = (event.touches[0].pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
   videoPlayer.currentTime = pos * videoPlayer.duration;
 });
 
 // Adelantar o retroceder el video al presionar las teclas de la flecha izquierda/derecha o inicio/fin
 document.addEventListener("keydown", event => {
   const videos = document.querySelectorAll("video");
 
   videos.forEach(video => {
     if (document.activeElement === video) {
       switch (event.keyCode) {
         case 37: // Tecla de flecha izquierda
           video.currentTime -= 5;
           break;
         case 39: // Tecla de flecha derecha
           video.currentTime += 5;
           break;
         case 36: // Tecla de inicio
           video.currentTime = 0;
           break;
         case 35: // Tecla de fin
           video.currentTime = video.duration;
           break;
         default:
           break;
       }
     }
   });
 });
 
 
 </script>

        </div>
        <div class="col-lg-3">
        <br>
          <article class="white-block">
            <div class="top-cat-title">
              <h3>Recomedaciones</h3>
             
            </div>
           
          </article>
          <div style="
            height: 100%;
            overflow-y: scroll;">
          <?php
$archivo = "estadistica.json";
$datos = array();
$dedu = 0;
if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $datos = json_decode($contenido);
}

if (isset($_POST["eliminar"])) {
  $id = $_POST["eliminar"];
  unset($datos->$id);

  $json_datos = json_encode($datos, JSON_PRETTY_PRINT);
  file_put_contents($archivo, $json_datos);

  header("Location: csc.php");
  exit();
}

shuffle($datos);
?>
  
  <?php
  $promg = 0;
  foreach ($datos as $id => $dato) {
  ?>
  
  <a style="border-color: transparent; padding:0px;" href="<?php echo $nombre = preg_replace("/[^a-zA-Z]/", "", $dato->nombre) ?>_<?php echo $texto = preg_replace("/[^a-zA-Z]/", "", $dato->texto) ?><?php echo $tiempo = preg_replace("/\D/", "", $dato->tiempo) ?>.php">
          <article style="padding:0px;" class="white-block">
            <div class="top-cat-title">
            
            <?php

            $file = $dato->foto;
            
            if ($file) {
            $info = pathinfo($file);
            $extension = strtolower($info["extension"]);
            
            if ($extension === "mp4") {
            echo "
            <br><br>
            <div class=\"\">
            <video loop autoplay muted style=\"width:100%; object-fit: cover; max-height: 250px; background-color:black\" poster=\"ruta/a/poster.jpg\" class=\"video__player\" src=\"$dato->foto\"></video>
           
           
           
            </div>";
            }
            else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
            $imageData = base64_encode(file_get_contents($file));
            $src = "data:image/$extension;base64,$imageData";
            echo "
            <br><br>
            <img src=\"$src\" style=\"width:100%;\" alt=\"imagen\">";
            }
            else {
            echo "<button class=\"like-button\"><span class=\"badge-pending\">Pending</span></button>";
            }
            } else {
            echo "<button style=\"background-color: #24c12a; border-radius:30px; color:white;\" class=\"like-button\"><span class=\"badge-pending\" style=\"color:white;\">Post</span></button>";
            }
            ?>
            
             
            </div>
            <ul style="padding:0px;" class="top-cat-list">
              <li style="padding:8px;">
                <a style="border-color: transparent; padding:0px;" href="##">
                  <div style="padding-bottom:2px; font-size:15px;" class="top-cat-list__title">
                  <?php echo htmlspecialchars($dato->texto) ?><span></span>
                  </div>
                  <div class="top-cat-list__subtitle">
                  <?php echo htmlspecialchars($dato->nombre) ?> <span class="purple"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></span>
                  </div>
                </a>
              </li>
              
            </ul>
          </article>
          <?php
		}
		?>
    </div>
        </div>
      </div>
    </div>
  </main>
  <!-- ! Footer -->
  <footer class="footer">
<div class="container footer--flex">
  <div class="footer-start">
    <p>2023 © Kenly - <a href="elegant-dashboard.com" target="_blank"
        rel="noopener noreferrer">Kenly.com</a></p>
  </div>
  <ul class="footer-end">
    <li><a href="##">About</a></li>
    <li><a href="##">Support</a></li>
    <li><a href="##">Puchase</a></li>
  </ul>
</div>
</footer>
</div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
<div class="modalDialog main-nav--bg h-full" id="'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'modal='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'">
<div class="card rr2">
<div class="image-container">
<?php
        
$file = "'.$dato->foto.'";

if ($file) {
$info = pathinfo($file);
$extension = strtolower($info[\'extension\']);
if ($extension === "mp4") {
echo \'<div class="video-container">
<video loop="" autoplay="" muted="" style="width:100%; object-fit: cover; height: 520px; object-fit:contain; background-color:black" poster="ruta/a/poster.jpg" class="video__player" src="'.$dato->foto.'"></video>
</div>\';
}
else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
$imageData = base64_encode(file_get_contents($file));
$src = \'data:image/\' . $extension . \';base64,\' . $imageData;
echo \'<img src="'.$dato->foto.'";
" style="width:100%;  height:520px;" alt="imagen">\';
}
else {
echo \'<div class="top-cat-list__title">
<p style="font-size:16px; word-wrap: break-word;">'.$dato->texto.'</p>
</div>\';
}
} else {
echo \'<div class="top-cat-list__title contenedor2" style="">
<p class="" style="font-size:24px; padding:26px; word-wrap: break-word;">'.$dato->texto.'</p>
</div>\';
} ?>
<style>

/* Barra de progreso */
video:-webkit-media-controls-enclosure {
  
}
/* Estilos para la barra de progreso */
video::-webkit-progress-bar {
  height: 10px;
  background-color: red;
  border-radius: 5px;
}

/* Estilos para la parte llena de la barra de progreso */
video::-webkit-progress-value {
  background-color: red;
  border: solid 2px red;
  border-radius: 5px;
}

video::-webkit-media-controls-time-remaining-display {
  display: none !important;
}

/* Tiempo al manipular la barra */
video::-webkit-media-controls-current-time-display {
  position: absolute;
  bottom: -15px;
  background-color: transparent;
  color: #fff;
  font-size: 14px;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 5px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.2s ease-in-out;
}

video::-webkit-media-controls-current-time-display {
  opacity: 1;
}
video::-webkit-media-controls-play-button,
video::-webkit-media-controls-start-playback-button,
video::-webkit-media-controls-fullscreen-button,
video::-webkit-media-controls-overflow-button {
  display: none !important;
}

video::-webkit-media-controls-overflow-button {
    display: none;
}
video::-webkit-media-controls-overflow-menu {
  display: none !important;
}

  .contenedor2 {
      display: flex;
      top:50%;
      height:100%;
      background-color: #0000005e;
background-image: url(https://i.pinimg.com/564x/5e/f2/59/5ef2595841fdd1192d1475bbc19f1a5c.jpg);
background-size: cover;
border: solid 0.5px #ccc;
border-radius: ;
background-repeat: no-repeat;
background-position: center center;
display: flex;
align-items: center;
gap: 10px;
      justify-content: center;
      align-items: center;
 }
</style>
</div>
<div class="comment-container">
<div class="comment">
<br>
<a href="'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).'_'.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).''.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'.php" . """><div style="padding-left:14px; margin-bottom: 0px; font-size:16px;" class="top-cat-list__title">
                    Ver publicacion
                 </div></a>
<br>
<a class="like-button"><form method="post" style="display: inline-block;">
<button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
<div class="top-cat-list__title">
<span style="margin-top: 7px; margin-left: 8px; font-size:16px;"><?php echo $num_likes; ?></span>
</div>

</button>
</form></a>
                 <a href="https://api.whatsapp.com/send?text=Publicacion de '.$dato->nombre.' te a sido compartida: '.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).'_'.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).''.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'.php"  target="_blank" class="like-button">
                    <button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/640px-WhatsApp.svg.png" alt="Like" style="height: 24px;">
                    </button>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=('.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).'_'.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).''.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'.php)" target="_blank" class="like-button">
                    <button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">
                    <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Like" style="height: 24px;">
                    </button>
                </a>
                <a href="https://twitter.com/intent/tweet?text=Publicacion de kenly link:&url=('.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).'_'.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).''.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'.php)" target="_blank" class="like-button">
                    <button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">
                    <img src="https://www.wellybox.com/wp-content/uploads/2023/02/pngkey.com-twitter-logo-png-transparent-27646.png" alt="Like" style="height: 24px;">
                    </button>
                </a>
<br>
<div class="chat-container">
<div class="chat-body">
<p style="font-size:0px;">
<?php
$filename = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'time='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'" . ".json";
$datos = array();
if(file_exists($filename)) {
    $json_data = file_get_contents($filename);
    $datos = json_decode($json_data, true);
}
if(empty($datos)) {
    echo "<center><e>
    
        Se el primero en comentar esta publicacion
    
</e></center>";
}
?>
<div style="width:65%; float:left; padding-left:13px;">
<?php 
    shuffle($datos);
    foreach($datos as $dato): 
?>
<button class="white-block" style="padding:12px; background-color:#3a3b3c8c; margin-top:9px; margin-bottom: 5px; border-radius:30px;">
    <p>
        <div style="padding-bottom:0px; color:white; font-family:helvetica; margin-bottom: 0px; font-size:16px;" class="top-cat-list__title">
            <?php echo $dato["texto"]; ?>
        </div>
    </p>
</button>
<?php endforeach; ?>
</div>
</p>


   
   </div>
   
   </div>
   <center>
   <form style="width:97%;" class="bb" id="comment-form" method="POST">
   <textarea id="comment-textarea" class="main-nav--bg" name="texto" placeholder="Escribe tu comentario aquí"></textarea>


<input id="comment-submit" type="submit" value="Enviar">
</form>
</center>
   
</div>
</div>
</div>

<style>
#emoji-picker {
  position: fixed;
  bottom: 0;
  z-index: 999;
  left: 0;
  border-top-left-radius:20px;
  border-top-right-radius:20px;
  width: 100%;
  background-color: ;
  border-top: 1px solid #ccc;
  overflow: hidden;
  transition: transform 0.3s ease-in-out;
  transform: translateY(100%);
  max-height: 320px;
  overflow-y: auto;
}

#emoji-picker.emoji-picker-opened {
  transform: translateY(0);
}

#emoji-picker .emoji-picker-content {
  padding: 5px;
}

#emoji-picker .close-button {
  text-align: right;
}

#emoji-picker .close-button button {
  background: none;
  border: none;
  cursor: pointer;
}

.emoji {
  display: inline-block;
  cursor: pointer;
  font-size:24px;
  user-select: none;
  color:gray;
  margin: 5px;
}

.emoji:hover {
  transform: scale(1.2);
}

.rr2{
display:block;
}
e{
  color:#1b96f8;
}
@media (max-width: 768px) {
.rr2{
display:none;
}
}
.rr{
display:none;
}
@media (max-width: 768px) {
.rr{
display:block;
}
}


.card {
display: flex;
margin: 0px;
height:70vh;
display:block;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
border-radius: 5px;
}
@media (max-width: 768px) {
.card {
display: flex;
margin: 10px;
background-color: white;
display:none;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
border-radius: 5px;
}
}
.image-container {
width: 50%;
height:73vh;
padding-right: 10px;
box-sizing: border-box;
float: left;
}

.image-container img {
width: 100%;
height: auto;
}

.comment-container {
width: 50%;
display: inline-block;
box-sizing: border-box;
padding-left: 10px;
text-align: right;
}

.comment {
display: inline-block;
width: 100%;
height:67vh;
padding-right:10px;
box-sizing: border-box;
text-align: left;
}
.comment .comment-item {
margin-bottom: 10px;
padding: 10px;
background-color: #f5f5f5;
border-radius: 5px;
}

</style>
<div class="rr">
<br>
<a href="'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).'_'.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).''.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'.php" . """><div style="padding-left:14px; margin-bottom: 0px; font-size:16px;" class="top-cat-list__title">
                       Ver publicacion
                    </div></a>
<br>
<div class="chat-container">
<div class="chat-body">
<p style="font-size:0px;">
<?php
   $filename = "'.$nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre).''.$texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto).'time='.$tiempo = preg_replace('/\D/', '', $dato->tiempo).'" . ".json";
   $datos = array();
   if(file_exists($filename)) {
       $json_data = file_get_contents($filename);
       $datos = json_decode($json_data, true);
   }
   if(empty($datos)) {
       echo "<center><e>
       
           Se el primero en comentar esta publicacion
       
   </e></center>";
   }
?>
<div style="width:65%; float:left; padding-left:13px;">
   <?php 
       shuffle($datos);
       foreach($datos as $dato): 
   ?>
   <button class="white-block" style="padding:12px; background-color:#3a3b3c8c; margin-top:9px; margin-bottom: 5px; border-radius:30px;">
       <p>
           <div style="padding-bottom:0px; color:white; font-family:helvetica; margin-bottom: 0px; font-size:16px;" class="top-cat-list__title">
               <?php echo $dato["texto"]; ?>
           </div>
       </p>
   </button>
   <?php endforeach; ?>
</div>
</p>


      
      </div>
      
      </div>
     
      <footer class="footer2 main-nav--bg">
<nav style="border-top:solid #CCC 1px;">
<form style="margin:6px;" id="comment-form" method="POST">
<textarea id="comment-textarea" class="main-nav--bg" name="texto" placeholder="Escribe tu comentario aquí"></textarea>
<input id="comment-submit" type="submit" value="Enviar">
</form>
</nav>
</footer>
</div>
<style>
.chat-container {
width: 100%;
height: 74%;
border-radius: 0px;
overflow: hidden;
display: flex;
flex-direction: column;
}
.chat-body {
flex: 1;
padding: 10px;
overflow-y: auto;
}
.footer2 {
color: #fff;
padding: 14px;
position: fixed;
bottom: 66px;
width: 0%;
display:none;
}
.bb {
display:block;
padding:8px;
}
@media (max-width: 768px) {
.bb {
display:none;
}
}
@media (max-width: 768px) {
.footer2 {
color: #fff;
padding: 14px;
position: fixed;
bottom: 0;
display:block;
width: 100%;
}
}
</style>
</div>   
<script>
// Array de emojis
var emojis = [
  "😊", "😃", "❤️", "😞", "😮", "😛", "😘", "😐", "😕", "😉",
  "😍", "🤣", "🥰", "😎", "😇", "🤔", "😋", "😭", "🤩", "😏",
  "🥳", "🤗", "😴", "😬", "😁", "🥺", "😌", "😆", "😝", "😔",
  "😄", "🙃", "🤭", "🤪", "😂", "😪", "😅", "😉", "🤫", "😣",
  "😃", "😉", "🤐", "😓", "🙄", "😘", "😀", "😒", "😵", "🤓",
  "😉", "😄", "🤨", "😔", "😮", "😁", "😞", "😲", "😛", "😝",
  "🤪", "😶", "😊", "😉", "😪", "😌", "🤣", "😅", "😳", "😩",
  "😃", "🤗", "😬", "🥰", "😎", "😆", "😇", "😭", "😴",
  "🤔", "😌", "😋", "😂", "😁", "😄", "🥳", "😊", "🙃", "🥺",
  "😉", "🤠", "😎", "🤩", "😇", "🥳", "😏", "😘", "😀", "😃",
  "🤣", "🥰", "😊", "😋", "😆", "😍", "🤪", "😛", "😄", "😁",
  "😆", "😉", "🥳", "😌", "😬", "😝", "🤓", "😅", "🙃", "😔",
  "😮", "😀", "😏", "🤗", "😴", "😃", "❤️", "😩", "🤔",
  "🤣", "😎", "😪", "🥺", "😁", "😓", "🥰", "😋", "😉", "😌",
  "🤩", "😇", "😏", "😘", "😭", "😄", "🤪", "😊", "😁", "🥳",
  "🤓", "😔", "😝", "😎", "😍", "😆", "🙃", "😂", "😉", "😬",
  "😩", "😌", "🤗", "🤣", "😃", "😪", "🥺", "😁", "🤭",
  "😴", "😷", "🤒", "🤕", "🤢", "🤮",
  "🤧", "🥵", "🥶", "🥴", "😵", "🤯", "🤠", "🥳", "😎", "🤓",
  "🧐", "😕", "😟", "🙁", "☹️", "😮", "😯", "😲", "😳", "🥺",
  "😦", "😧", "😨", "😰", "😥", "😢", "😭", "😱", "😖", "😣",
  "😞", "😓", "😩", "😫", "😷", "🤒", "🤕", "🤢", "🤮", "🤧",
  "🥵", "🥶", "🥴", "😵", "🤯", "🤠", "🥳", "😎", "🤓", "🧐",
  "😕", "😟", "🙁", "☹️", "😮", "😯", "😲", "😳", "🥺", "😦",
  "😧", "😨", "😰", "😥", "😢", "😭", "😱", "😖", "😣", "😞",
  "😓", "😩", "😫", "😤", "😡", "😠", "🤬", "😈", "👿", "💀",
  "☠️", "💩", "🤡", "👹", "👺", "👻", "👽", "👾", "🤖", "😺",
  "😸", "😹", "😻", "😼", "😽", "🙀", "😿", "😾", "🙈", "🙉",
  "🙊", "🐵", "🐒", "🦍", "🦧", "🐶", "🐕", "🦮", "🐕‍🦺", "🐩",
  "🐺", "🦊", "🎃", 
  "👑", "👠", "👞", "👟", "👕", "👔", "🧣", "🧤", "👗", "👘", 
  "👙", "👓", "🕶️", "🎩", "👒", "👑", "💍", "💄", "💅", "🦷", 
  "👶", "👧", "🧒", "👦", "👩", "👨", "👩‍🦰", "👨‍🦰", "👩‍🦱", "👨‍🦱", 
  "👩‍🦲", "👨‍🦲", "👩‍🦳", "👨‍🦳", "👵", "🧑‍🎄", "🎅", "🤶", "🧝‍♀️", "🧝‍♂️", "🧞‍♀️", 
  "🧞‍♂️", "🧜‍♀️", "🧜‍♂️", "🧚‍♀️", "🧚‍♂️", "👼", "👸", "🤴",
  "🍇", "🍈", "🍉", "🍊", "🍋", "🍌", "🍍", "🥭", "🍎", "🍏",
  "🍐", "🍑", "🍒", "🍓", "🥝", "🍅", "🥥", "🥑", "🍆", "🥔",
  "🥕", "🌽", "🌶️", "🥒", "🥬", "🥦", "🧄", "🧅", "🍄", "🥜",
  "🌰", "🍞", "🥐", "🥖", "🥨", "🥯", "🥞", "🧇", "🧀", "🍖",
  "🍗", "🥩", "🥓", "🍔", "🍟", "🍕", "🌭", "🥪", "🌮", "🌯",
  "🥙", "🧆", "🥚", "🍳", "🥘", "🍲", "🥣", "🥗", "🍿", "🧈",
  "🧂", "🥫", "🍱", "🍘", "🍙", "🍚", "🍛", "🍜", "🍝", "🍠",
  "🍢", "🍣", "🍤", "🍥", "🥮", "🍡", "🥟", "🥠", "🥡", "🦀",
  "🦞", "🦐", "🦑", "🍦", "🍧", "🍨", "🍩", "🍪", "🎂", "🍰",
  "🧁", "🥧", "🍫", "🍬", "🍭", "🍮", "🍯", "🍼", "🥛", "☕",
  "🍵", "🍶", "🍾", "🍷", "🍸", "🍹", "🍺", "🍻", "🥂", "🥃",
  "🐶", "🐱", "🐭", "🐹", "🐰", "🦊", "🐻", "🐼", "🐻‍❄️", "🐨", "🐯", "🦁",  "🐮", "🐷", "🐽", "🐗", "🐭", "🐹", "🐰", "🐻", "🐼", "🐻‍❄️", "🐨", "🐯",   "🦁", "🐮", "🐷", "🐽", "🐗", "🐵", "🙈", "🙉", "🙊", "🐒", "🐺", "🐗", "🐴",  "🦄", "🐝", "🐛", "🦋", "🐌", "🐞", "🐜", "🦟", "🦗", "🕷️", "🕸️", "🦂", "🐢",  "🐍", "🦎", "🦖", "🦕", "🐙", "🦑", "🦐", "🦞", "🦀", "🐡", "🐠", "🐟", "🐬",  "🐳", "🐋", "🦈", "🐊", "🐅", "🐆", "🦓", "🦍", "🦧", "🐘", "🦛", "🦏", "🐪",  "🐫", "🦒", "🦘", "🦬", "🐃", "🐂", "🐄", "🐎", "🐖", "🐏", "🐑", "🐐", "🦙",  "🦌", "🐕", "🐩", "🐈", "🐓", "🦃", "🦚", "🦜", "🦢", "🦩", "🕊️", "🐇", "🦝",  "🦨", "🦡", "🦦", "🦥", "🐁", "🐀", "🐿️", "🦔", "🐾",
  "⚽", "🏀", "🏈", "⚾", "🎾", "🏐", "🏉", "🎱", "🏓", "🏸", "🥊", "🥋",
  "🥅", "⛳", "⛸️", "🎣", "🤿", "🛹", "🛷", "⛷️", "🏂", "🏋️‍♀️", "🏋️‍♂️", "🤼‍♀️", "🤼‍♂️", "🤸‍♀️",
  "🤸‍♂️", "⛹️‍♀️", "⛹️‍♂️", "🤺", "🏇", "🧘‍♀️", "🧘‍♂️", "🏄‍♀️", "🏄‍♂️", "🏊‍♀️", "🏊‍♂️", "🤽‍♀️", "🤽‍♂️",
  "🚣‍♀️", "🚣‍♂️", "🧗‍♀️", "🧗‍♂️", "🚴‍♀️", "🚴‍♂️", "🚵‍♀️", "🚵‍♂️", "🏇", "🏊‍♀️", "🏊‍♂️", "🤽‍♀️", "🤽‍♂️",
  "🚣‍♀️", "🚣‍♂️", "🧗‍♀️", "🧗‍♂️", "🚴‍♀️", "🚴‍♂️", "🚵‍♀️", "🚵‍♂️", "🏄‍♀️", "🏄‍♂️", "🏋️‍♀️", "🏋️‍♂️", "🤼‍♀️",
  "🤼‍♂️", "🏌️‍♀️", "🏌️‍♂️", "🏇", "🏊‍♀️", "🏊‍♂️", "🤽‍♀️", "🤽‍♂️", "🚣‍♀️", "🚣‍♂️", "🧗‍♀️", "🧗‍♂️", "🚴‍♀️",
  "🚴‍♂️", "🚵‍♀️", "🚵‍♂️", "🏄‍♀️", "🏄‍♂️", "🏋️‍♀️", "🏋️‍♂️", "🤼‍♀️", "🤼‍♂️", "⛹️‍♀️",
  "❤️", // Corazón rojo
  "☀️", // Sol con cara
  "⚡", // Rayo
  "✨", // Chispa
  "☁️", // Nube
  "⚓", // Ancla
  "✈️", // Avión
  "⌛", // Reloj de arena
  "⚠️", // Señal de advertencia
  "✖️", // Equis
  "✔️", // Marca de verificación
  "☎️", // Teléfono
  "⌨️", // Teclado
  "⌚", // Reloj de pulsera
  "⛔", // Señal de prohibido
  "♻️", // Símbolo de reciclaje
  "🀄", // Mahjong rojo
  "🈷️", // Símbolo de "Reservado"
  "🈶", // Símbolo de "No disponible"
  "🈯", // Símbolo de "Aceptado"
  "🉐", // Símbolo de "Bueno"
  "🈹", // Símbolo de "Descuento"
  "🈚", // Símbolo de "Gratis"
  "🈲", // Símbolo de "Prohibido"
  "🉑", // Símbolo de "Aceptable"
  "🈸", // Símbolo de "Aplicación"
  "🈴", // Símbolo de "Pasado"
  "🈳", // Símbolo de "Disponible"
  "㊗️", // Símbolo de "Felicidades"
  "㊙️", // Símbolo de "Secreto"
  "🈺", // Símbolo de "Abierto"
  "🌵", // Cactus
  "🌮", // Taco
  "🌶️", // Chile
  "🎺", // Trompeta
  "🎉", // Confeti
  "🎸", // Guitarra
  "🔔", // Campana
  "🏜️", // Desierto
  "🌄", // Amanecer sobre montañas
  "🌅", // Amanecer sobre mar
  "🎶", // Notas musicales
  "🏰", // Castillo
  "🌺", // Flor de bugambilia
  "🦉", // Búho
  "⚒️", // Martillo y hoz
  "🎻", // Violín
  "🎩", // Sombrero de copa
  "🧣", // Bufanda
  "🥔", // Papa
  "🍯", // Tarro de miel
  "❄️", // Copo de nieve
  "☭",//URSS
  "卐",//Nazi
  "🇦🇨", // Isla de Ascensión
  "🇦🇩", // Andorra
  "🇦🇪", // Emiratos Árabes Unidos
  "🇦🇫", // Afganistán
  "🇦🇬", // Antigua y Barbuda
  "🇦🇮", // Anguila
  "🇦🇱", // Albania
  "🇦🇲", // Armenia
  "🇦🇴", // Angola
  "🇦🇶", // Antártida
  "🇦🇷", // Argentina
  "🇦🇸", // Samoa Americana
  "🇦🇹", // Austria
  "🇦🇺", // Australia
  "🇦🇼", // Aruba
  "🇦🇽", // Islas Aland
  "🇦🇿", // Azerbaiyán
  "🇧🇦", // Bosnia y Herzegovina
  "🇧🇧", // Barbados
  "🇧🇩", // Bangladés
  "🇧🇪", // Bélgica
  "🇧🇫", // Burkina Faso
  "🇧🇬", // Bulgaria
  "🇧🇭", // Baréin
  "🇧🇮", // Burundi
  "🇧🇯", // Benín
  "🇧🇱", // San Bartolomé
  "🇧🇲", // Bermudas
  "🇧🇳", // Brunéi
  "🇧🇴", // Bolivia
  "🇧🇶", // Caribe neerlandés
  "🇧🇷", // Brasil
  "🇧🇸", // Bahamas
  "🇧🇹", // Bután
  "🇧🇻", // Isla Bouvet
  "🇧🇼", // Botsuana
  "🇧🇾", // Bielorrusia
  "🇧🇿", // Belice
  "🇨🇦", // Canadá
  "🇨🇨", // Islas Cocos
  "🇨🇩", // República Democrática del Congo
  "🇨🇫", // República Centroafricana
  "🇨🇬", // Congo
  "🇨🇭", // Suiza
  "🇨🇮", // Costa de Marfil
  "🇨🇰", // Islas Cook
  "🇨🇱", // Chile
  "🇨🇲", // Camerún
  "🇨🇳", // China
  "🇨🇴", // Colombia
  "🇨🇵", // Clipperton
  "🇨🇷", // Costa Rica
  "🇨🇺", // Cuba
  "🇨🇻", // Cabo Verde
  "🇨🇼", // Curazao
  "🇨🇽", // Isla de Navidad
  "🇨🇾", // Chipre
  "🇨🇿", // República Checa
  "🇩🇪", // Alemania
  "🇩🇬", // Diego García
  "🇩🇯", // Yibuti
  "🇩🇰", // Dinamarca
  "🇩🇲", // Dominica
  "🇩🇴", // República Dominicana
  "🇩🇿", // Argelia
  "🇪🇦", // Ceuta y Melilla
  "🇪🇨", // Ecuador
  "🇪🇪", // Estonia
  "🇪🇬", // Egipto
  "🇪🇭", // Sáhara Occidental
  "🇪🇷", // Eritrea
  "🇪🇸", // España
  "🇪🇹", // Etiopía
  "🇪🇺", // Unión Europea
  "🇫🇮", // Finlandia
  "🇫🇯", // Fiyi
  "🇫🇰", // Islas Malvinas
  "🇫🇲", // Micronesia
  "🇫🇴", // Islas Feroe
  "🇫🇷", // Francia
  "🇬🇦", // Gabón
  "🇬🇧", // Reino Unido
  "🇬🇩", // Granada
  "🇬🇪", // Georgia
  "🇬🇫", // Guayana Francesa
  "🇬🇬", // Guernsey
  "🇬🇭", // Ghana
  "🇬🇮", // Gibraltar
  "🇬🇱", // Groenlandia
  "🇬🇲", // Gambia
  "🇬🇳", // Guinea
  "🇬🇵", // Guadalupe
  "🇬🇶", // Guinea Ecuatorial
  "🇬🇷", // Grecia
  "🇬🇸", // Georgia del Sur e Islas Sandwich del Sur
  "🇬🇹", // Guatemala
  "🇬🇺", // Guam
  "🇬🇼", // Guinea-Bisáu
  "🇬🇾", // Guyana
  "🇭🇰", // Hong Kong
  "🇭🇲", // Isla Heard e Islas McDonald
  "🇭🇳", // Honduras
  "🇭🇷", // Croacia
  "🇭🇹", // Haití
  "🇭🇺", // Hungría
  "🇮🇨", // Islas Canarias
  "🇮🇩", // Indonesia
  "🇮🇪", // Irlanda
  "🇮🇱", // Israel
  "🇮🇲", // Isla de Man
  "🇮🇳", // India
  "🇮🇴", // Territorio Británico del Océano Índico
  "🇮🇶", // Irak
  "🇮🇷", // Irán
  "🇮🇸", // Islandia
  "🇮🇹", // Italia
  "🇯🇪", // Jersey
  "🇯🇲", // Jamaica
  "🇯🇴", // Jordania
  "🇯🇵", // Japón
  "🇰🇪", // Kenia
  "🇰🇬", // Kirguistán
  "🇰🇭", // Camboya
  "🇰🇮", // Kiribati
  "🇰🇲", // Comoras
  "🇰🇳", // San Cristóbal y Nieves
  "🇰🇵", // Corea del Norte
  "🇰🇷", // Corea del Sur
  "🇰🇼", // Kuwait
  "🇰🇾", // Islas Caimán
  "🇰🇿", // Kazajistán
  "🇱🇦", // Laos
  "🇱🇧", // Líbano
  "🇱🇨", // Santa Lucía
  "🇱🇮", // Liechtenstein
  "🇱🇰", // Sri Lanka
  "🇱🇷", // Liberia
  "🇱🇸", // Lesoto
  "🇱🇹", // Lituania
  "🇱🇺", // Luxemburgo
  "🇱🇻", // Letonia
  "🇱🇾", // Libia
  "🇲🇦", // Marruecos
  "🇲🇨", // Mónaco
  "🇲🇩", // Moldavia
  "🇲🇪", // Montenegro
  "🇲🇫", // San Martín
  "🇲🇬", // Madagascar
  "🇲🇭", // Islas Marshall
  "🇲🇰", // Macedonia del Norte
  "🇲🇱", // Malí
  "🇲🇲", // Myanmar (Birmania)
  "🇲🇳", // Mongolia
  "🇲🇴", // Macao
  "🇲🇵", // Islas Marianas del Norte
  "🇲🇶", // Martinica
  "🇲🇷", // Mauritania
  "🇲🇸", // Montserrat
  "🇲🇹", // Malta
  "🇲🇺", // Mauricio
  "🇲🇻", // Maldivas
  "🇲🇼", // Malaui
  "🇲🇽", // México
  "🇲🇾", // Malasia
  "🇲🇿", // Mozambique
  "🇳🇦", // Namibia
  "🇳🇨", // Nueva Caledonia
  "🇳🇪", // Níger
  "🇳🇫", // Isla Norfolk
  "🇳🇬", // Nigeria
  "🇳🇮", // Nicaragua
  "🇳🇱", // Países Bajos
  "🇳🇴", // Noruega
  "🇳🇵", // Nepal
  "🇳🇷", // Nauru
  "🇳🇺", // Niue
  "🇳🇿", // Nueva Zelanda
  "🇴🇲", // Omán
  "🇵🇦", // Panamá
  "🇵🇪", // Perú
  "🇵🇫", // Polinesia Francesa
  "🇵🇬", // Papúa Nueva Guinea
  "🇵🇭", // Filipinas
  "🇵🇰", // Pakistán
  "🇵🇱", // Polonia
  "🇵🇲", // San Pedro y Miquelón
  "🇵🇳", // Islas Pitcairn
  "🇵🇷", // Puerto Rico
  "🇵🇸", // Palestina
  "🇵🇹", // Portugal
  "🇵🇼", // Palaos
  "🇵🇾", // Paraguay
  "🇶🇦", // Catar
  "🇷🇪", // Reunión
  "🇷🇴", // Rumanía
  "🇷🇸", // Serbia
  "🇷🇺", // Rusia
  "🇷🇼", // Ruanda
  "🇸🇦", // Arabia Saudita
  "🇸🇧", // Islas Salomón
  "🇸🇨", // Seychelles
  "🇸🇩", // Sudán
  "🇸🇪", // Suecia
  "🇸🇬", // Singapur
  "🇸🇭", // Santa Elena
  "🇸🇮", // Eslovenia
  "🇸🇯", // Svalbard y Jan Mayen
  "🇸🇰", // Eslovaquia
  "🇸🇱", // Sierra Leona
  "🇸🇲", // San Marino
  "🇸🇳", // Senegal
  "🇸🇴", // Somalia
  "🇸🇷", // Surinam
  "🇸🇸", // Sudán del Sur
  "🇸🇹", // Santo Tomé y Príncipe
  "🇸🇻", // El Salvador
  "🇸🇽", // San Martín (parte neerlandesa)
  "🇸🇾", // Siria
  "🇸🇿", // Suazilandia
  "🇹🇦", // Territorio Británico del Océano Índico
  "🇹🇨", // Islas Turcas y Caicos
  "🇹🇩", // Chad
  "🇹🇫", // Territorios Australes Franceses
  "🇹🇬", // Togo
  "🇹🇭", // Tailandia
  "🇹🇯", // Tayikistán
  "🇹🇰", // Tokelau
  "🇹🇱", // Timor Oriental
  "🇹🇲", // Turkmenistán
  "🇹🇳", // Túnez
  "🇹🇴", // Tonga
  "🇹🇷", // Turquía
  "🇹🇹", // Trinidad y Tobago
  "🇹🇻", // Tuvalu
  "🇹🇼", // Taiwán
  "🇹🇿", // Tanzania
  "🇺🇦", // Ucrania
  "🇺🇬", // Uganda
  "🇺🇲", // Islas Ultramarinas Menores de Estados Unidos
  "🇺🇳", // Naciones Unidas
  "🇺🇸", // Estados Unidos
  "🇺🇾", // Uruguay
  "🇺🇿", // Uzbekistán
  "🇻🇦", // Ciudad del Vaticano
  "🇻🇨", // San Vicente y las Granadinas
  "🇻🇪", // Venezuela
  "🇻🇬", // Islas Vírgenes Británicas
  "🇻🇮", // Islas Vírgenes de los Estados Unidos
  "🇻🇳", // Vietnam
  "🇻🇺", // Vanuatu
  "🇼🇫", // Wallis y Futuna
  "🇼🇸", // Samoa
  "🇽🇰", // Kosovo
  "🇾🇪", // Yemen
  "🇾🇹", // Mayotte
  "🇿🇦", // Sudáfrica
  "🇿🇲", // Zambia
  "🇿🇼", // Zimbabue

  
  // Agrega más emojis aquí
];

// Función para mostrar el selector de emojis
function showEmojiPicker() {
  var emojiPicker = document.getElementById("emoji-picker");
  emojiPicker.classList.add("emoji-picker-opened");

  var emojiList = document.querySelector(".emoji-list");
  emojiList.innerHTML = "";

  emojis.forEach(function(emoji) {
    var span = document.createElement("span");
    span.className = "emoji";
    span.innerText = emoji;
    span.addEventListener("click", function() {
      selectEmoji(emoji);
    });
    emojiList.appendChild(span);
  });
}

// Función para seleccionar un emoji y agregarlo al campo de texto
function selectEmoji(emoji) {
  var commentTextarea = document.getElementById("comment-textarea");
  commentTextarea.value += emoji;
}

// Event listener para el botón de seleccionar emoji
var emojiButton = document.getElementById("emoji-button");
emojiButton.addEventListener("click", showEmojiPicker);

// Event listener para el botón de cerrar
var closeButton = document.querySelector("#emoji-picker .close-button button");
closeButton.addEventListener("click", function(event) {
  event.preventDefault();
  var emojiPicker = document.getElementById("emoji-picker");
  emojiPicker.classList.remove("emoji-picker-opened");
});


</script>
    </body>
    </html>';
    

    // Crear el archivo y escribir el contenido
    file_put_contents($nombre_archivo, $contenido_archivo);

    // Imprimir un mensaje de confirmación
    echo "El archivo $nombre_archivo ha sido creado correctamente.";

?>
</p>


<div>
  
  <article style="padding:0px;" class="stat-cards-item lll">

    <article style="width:100%; padding-top: 16px; padding-right: 12px; padding-bottom: 12px; padding-left: 12px;" class="stat-cards-item lll">
    
      <a href="-usuarios-<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->voto) ?>-perfil-<?php echo preg_replace('/[^a-zA-Z]/', '', $dato->gmail) ?><?php echo  preg_replace('/\D/', '', $dato->ft) ?>.php" style="background-color:transparent;" class="sidebar-user">
        <div class="nav-user-img" style="background-color: #ccc;
    background-image: url(imagenes/<?php echo ($dato->ft) ?>);
    background-size: cover; width:45px; margin-right:5px; border-radius:100px; height:45px;
    background-repeat: no-repeat;
    background-position: center center;">
                
</div>

        <div class="sidebar-user-info">
            <span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><?php echo ($dato->voto) ?></span>
            <span style="font-size:11px;" class="sidebar-user__subtitle stat-cards-info__num"><?php echo ($dato->tiempo) ?></span>
        </div>
    </a>
   
  </article>

    <br>
    <a style="width:100%;" href="<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php">
    <?php
    
$file = $dato->foto ;

if ($file) {
$info = pathinfo($file);
$extension = strtolower($info['extension']);

if ($extension === "mp4") {
echo '<div class="video-container">
<video loop autoplay muted style="width:100%; object-fit: cover; min-height: 350px; object-fit:contain; background-color:black" poster="ruta/a/poster.jpg" class="video__player" src="'.$dato->foto.'"></video>
<div class="back-icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
  </svg>
</div>
<div class="back-icon2">
  <div class="video__controls">
    <div class="duration">0:00</div>
  </div>
  
</div>
<div class="progress-container">
    <progress class="progress-bar" value="0" max="100"></progress>
  </div>
</div>
';
}
else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
  $imageData = base64_encode(file_get_contents($file));
  $src = 'data:image/' . $extension . ';base64,' . $imageData;
  echo '<img src="'.$src.'" style="width:100%;" alt="imagen">';
}

else {
echo '';
}
} else {
echo '';
}    ?>
   
    
    <article style="padding-left:11px; padding-right:11px; padding-top:13px; clear: both; width:100%" class="lll stat-cards-item">
      <div class="top-cat-list__title">
        <p class="sidebar-user__title stat-cards-info__num" style="font-size:16px; word-wrap: break-word;"><?php echo htmlspecialchars($dato->texto) ?>
</p>
</a>
      </div>
    </article>
    <article style="padding:8px; width:100%" class="stat-cards-item">
      
      <div class="like-share-bar">
      <a class="like-button"><form action="<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php" method="post" style="display: inline-block;">
<button type="submit" name="like" class="badge-pending" style="border: none; padding:4px; cursor: pointer; display: inline-flex; align-items: center;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>


</button>
</form></a>


        <a href="<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php#<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?><?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?>modal=<?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>"><button class="share-button"><span style="font-size:15px; padding-top:8px; padding-right:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg></span></button></a>

<?php
    
$file = $dato->foto ;

if ($file) {
$info = pathinfo($file);
$extension = strtolower($info['extension']);

if ($extension === "mp4") {
echo '<button style="margin-left:7px;" class="share-button"><a href="'.$dato->foto.'" download="kenly('.$dato->foto.').mp4"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></span></a></button>';
}
else if (in_array($extension, array("jpg", "jpeg", "webp", "gif", "png", "bmp", "tiff"))) {
  $imageData = base64_encode(file_get_contents($file));
  $src = 'data:image/' . $extension . ';base64,' . $imageData;
  echo '<button style="margin-left:7px;" class="share-button"><a href="'.$dato->foto.'" download="kenly('.$dato->foto.').jpg"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></span></a></button>';
}



else {
echo '';
}
} else {
echo '';
}    ?>
     <button style="margin-left:12px;" class="share-button"><a href="#modal" class="open-modal"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 19 12">
  <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
  </svg></span></a></button>

          <span class="more-button p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Denunciar</a></li>
              <li><a href="##">films</a></li>
            </ul>
          </span>
        
      </div>
      
      <div class="modal" id="modal">
        <br><br>
  <div class="modal-content main-nav--bg">
    <span class="close">&times;</span>
    <span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num">Compartir</span>
    <br><br>
    <ul class="sidebar-body-menu">
    <li>
    <a href="https://api.whatsapp.com/send?text=Publicacion de <?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?> te a sido compartida: <?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" style="padding-right:7px;" width="29" height="29" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></span> Whatsapp</a>
                </li>
                <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=(<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php)" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" style="padding-right:7px;" width="29" height="29" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></span> Facebook</a>
                </li>
                <li>
                <a href="https://twitter.com/intent/tweet?text=Publicacion de kenly link:&url=(<?php echo $nombre = preg_replace('/[^a-zA-Z]/', '', $dato->nombre) ?>_<?php echo $texto = preg_replace('/[^a-zA-Z]/', '', $dato->texto) ?><?php echo $tiempo = preg_replace('/\D/', '', $dato->tiempo) ?>.php)" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" style="padding-right:7px;" width="29" height="29" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></span> Twitter</a>
                </li>
            </ul>
  </div>
</div>
      <style>
/* Estilos para el modal */
.modal {
  display: none; /* el modal está oculto por defecto */
  position: fixed; /* posición fija para que esté superpuesto sobre el contenido */
  z-index: 1; /* para que esté en la parte superior */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; /* añade scroll si el contenido del modal es muy largo */
 
}

.modal-content {
  border-radius: 20px;
  background-color: #fefefe;
  margin: 15% auto; /* centrado vertical y horizontal */
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-bottom:4px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Estilos para el botón que abre el modal */
.open-modal {
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.open-modal:hover {

}

/* Estilos para el modal cuando se muestra */
.modal:target {
  display: block;
}

        .like-share-bar {
          display: flex;
          justify-content: space-between;
          align-items: center;
          width:100%;
        }
        .back-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  transform: rotate(0deg);
  background-color: white;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20%;
}
.progress-container {
  position: absolute;
  bottom: 0px;
  padding: 0px;
  left: 0px;
  width: 100%;
  z-index: 1;
}
.progress-bar {
  appearance: none;
  height: 3px;
  width: 100%;
  border-radius: 2px;
  background-color: #ccc;
  outline: none;
}

.progress-bar::-webkit-progress-bar {
  border-radius: 0px;
  background-color: #eee;
}

.progress-bar::-webkit-progress-value {
  border-radius: 0px;
  background-color: #c00;
}

.back-icon2 {
  position: absolute;
  bottom: 10px;
  padding-left: 18px;
  padding-right: 18px;
  font-size: 12px;
  left: 10px;
  transform: rotate(0deg);
  background-color: #000000a1;
  width: 30px;
  color: white;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20%;
}

.duration{

}

.back-icon svg {
  color: black;
}
        .like-button,
        .share-button,
        .more-button {
          background-color:transparent;
          border: none;
          margin: 5px;
          cursor: pointer;
        }
        
        .like-button:hover,
        .share-button:hover,
        .more-button:hover {
          border-radius:100px;
        }
        
        .more-button {
          margin-left: auto;
        }
        .video-container {
          position: relative;
          width: 100%;
          min-height: 350px;
        }
        
        .play-button {
          position: absolute;
          top: 50%;
          padding:15px;
          border-radius:100%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 1;
        }
        .playing .play-button {
          display: none;
        }
        
      </style>
       
      
    </article>
    
  </article>
  
</div>
<br>
<?php
		}
		?>
<script>
 const videos = document.querySelectorAll('video');

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.5
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.play();
      entry.target.muted = false;
    } else {
      entry.target.pause();
      entry.target.muted = true;
    }
  });
}, options);

videos.forEach(video => {
  const src = video.getAttribute('src');

  fetch(src)
    .then(res => res.blob())
    .then(blob => {
      const videoBlob = URL.createObjectURL(blob);
      video.src = videoBlob;
      observer.observe(video);

      video.addEventListener('ended', () => {
        const nextLi = video.closest('li').nextElementSibling;
        if (nextLi) {
          nextLi.scrollIntoView({ behavior: 'smooth' });
        }
      });

      video.addEventListener('click', () => {
        if (video.paused) {
          video.play();
          video.muted = false;
        } else {
          video.pause();
          video.muted = true;
        }
      });

      video.autoplay = true;
      video.muted = false;

      // Agregar contador de tiempo
      const durationDisplay = video.closest('.video-container').querySelector('.duration');
      video.addEventListener('timeupdate', () => {
        const minutes = Math.floor(video.currentTime / 60);
        const seconds = Math.floor(video.currentTime % 60);
        durationDisplay.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;

        // Actualizar la barra de progreso
        const progressBar = video.closest('.video-container').querySelector('.progress-bar');
        progressBar.value = (video.currentTime / video.duration) * 100;
      });

      // Adelantar o retroceder el video al hacer clic o deslizar la barra de progreso
      const progressBar = video.closest('.video-container').querySelector('.progress-bar');
      progressBar.addEventListener('click', event => {
        const pos = (event.pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
        video.currentTime = pos * video.duration;
      });
      progressBar.addEventListener('mousedown', () => {
        video.pause();
      });
      progressBar.addEventListener('mouseup', () => {
        video.play();
      });
      progressBar.addEventListener('touchstart', () => {
        video.pause();
      });
      progressBar.addEventListener('touchend', () => {
        video.play();
      });
      progressBar.addEventListener('touchmove', event => {
        const pos = (event.touches[0].pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
        video.currentTime = pos * video.duration;
      });
    });
});

const videoContainer = document.querySelector('.video-container');
const videoPlayer = videoContainer.querySelector('.video__player');
const playButton = videoContainer.querySelector('.play-button');

playButton.addEventListener('click', () => {
  videoPlayer.play();
  videoContainer.classList.add('playing');
  playButton.style.display = 'none';
});

videoPlayer.addEventListener('play', () => {
  videoContainer.classList.add('playing');
  playButton.style.display = 'none';
});

videoPlayer.addEventListener('pause', () => {
  videoContainer.classList.remove('playing');
  playButton.style.display = 'block';
});

// Actualizar la barra de progreso
const progressBar = videoPlayer.closest('.video-container').querySelector('.progress-bar');
videoPlayer.addEventListener('timeupdate', () => {
  progressBar.value = (videoPlayer.currentTime / videoPlayer.duration) * 100;
});

// Adelantar o retroceder el video al hacer clic o deslizar la barra de progreso
progressBar.addEventListener('click', event => {
  const pos = (event.pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
  videoPlayer.currentTime = pos * videoPlayer.duration;
});
progressBar.addEventListener('mousedown', () => {
  videoPlayer.pause();
});
progressBar.addEventListener('mouseup', () => {
  videoPlayer.play();
});
progressBar.addEventListener('touchstart', () => {
  videoPlayer.pause();
});
progressBar.addEventListener('touchend', () => {
  videoPlayer.play();
});
progressBar.addEventListener('touchmove', event => {
  const pos = (event.touches[0].pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
  videoPlayer.currentTime = pos * videoPlayer.duration;
});

// Adelantar o retroceder el video al presionar las teclas de la flecha izquierda/derecha o inicio/fin
document.addEventListener('keydown', event => {
  const videos = document.querySelectorAll('video');

  videos.forEach(video => {
    if (document.activeElement === video) {
      switch (event.keyCode) {
        case 37: // Tecla de flecha izquierda
          video.currentTime -= 5;
          break;
        case 39: // Tecla de flecha derecha
          video.currentTime += 5;
          break;
        case 36: // Tecla de inicio
          video.currentTime = 0;
          break;
        case 35: // Tecla de fin
          video.currentTime = video.duration;
          break;
        default:
          break;
      }
    }
  });
});


</script>



          </div>
          <div class="col-lg-3">
            <article class="customers-wrapper">
              <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
              <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
            </article>
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top categories</h3>
                <p>28 Categories, 1400 Posts</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Lifestyle <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy lifestyle articles <span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2023 © Kenly - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">Kenly.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>





<body>
  <style>
    ::-webkit-scrollbar {
  width: 0.0em;
  background-color: #F5F5F5;
}
 
::-webkit-scrollbar-thumb {
  background-color: red;
}
 
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}
  </style>
  
   
                   
                        <div style="background-color: transparent; visibility: hidden; opacity: 0;" class="content">
      <style>
      html{height:100%;overflow:hidden}body{height:100%;overflow:hidden;-webkit-font-smoothing:antialiased;color:rgba(0,0,0,.87);font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin:0;text-size-adjust:100%}textarea{font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif}a{text-decoration:none;color:#2962ff}img{border:none}*{-webkit-tap-highlight-color:transparent}#apps-debug-tracers{display:none}html{overflow:visible}body{overflow:visible;overflow-y:scroll}@keyframes mdc-ripple-fg-radius-in{0%{animation-timing-function:cubic-bezier(0.4,0,0.2,1);transform:translate(var(--mdc-ripple-fg-translate-start,0)) scale(1)}to{transform:translate(var(--mdc-ripple-fg-translate-end,0)) scale(var(--mdc-ripple-fg-scale,1))}}@keyframes mdc-ripple-fg-opacity-in{0%{animation-timing-function:linear;opacity:0}to{opacity:var(--mdc-ripple-fg-opacity,0)}}@keyframes mdc-ripple-fg-opacity-out{0%{animation-timing-function:linear;opacity:var(--mdc-ripple-fg-opacity,0)}to{opacity:0}}.yyaGpb{display:flex;justify-content:center;width:100%}.P7NFWb{border-top:1px solid rgba(218, 220, 224, 0);bottom:0;display:flex;height:56px;justify-content:center;left:0;position:fixed;width:100%;z-index:3}.P9KVBf .P7NFWb{border-top:1px solid rgb(95,99,104);}.uEz1ib{align-items:center;display:flex;flex:1;flex-direction:column;justify-content:center;max-width:112px}.jb05Ib{line-height:0}.WL3b7c{font-family:"Google Sans",Roboto,Arial,sans-serif;line-height:1.25rem;font-size:.875rem;letter-spacing:.0178571429em;font-weight:500;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical}.Y4jiDf{color:rgb(95,99,104);fill:rgb(95,99,104);stop-color:rgb(95,99,104)}.Y4jiDf:not(:disabled){color:rgb(95,99,104)}.P9KVBf .Y4jiDf{color:rgb(154,160,166);fill:rgb(154,160,166);stop-color:rgb(154,160,166)}.P9KVBf .Y4jiDf:not(:disabled){color:rgb(154,160,166)}.sziCu{display:none}@media (hover:hover){.jb05Ib{display:none}.P7NFWb{border-top:none;height:48px;position:static}}@media screen and (min-width:840px){.P7NFWb{display:none}}.hQnXo{background-color:#fff;margin:0;position:absolute;top:0;width:100vw}.hQnXo:not(:disabled){background-color:#fff}.P9KVBf .hQnXo{background-color:rgb(32,33,36)}.P9KVBf .hQnXo:not(:disabled){background-color:rgb(32,33,36)}.hQnXo.sMVRZe{height:100vh;left:0;z-index:5}.hQnXo.sMVRZe .ePyrDc{border-color:rgb(218,220,224);border-bottom:solid 1px}.hQnXo.sMVRZe .ePyrDc:not(:disabled){border-color:rgb(218,220,224)}.P9KVBf .hQnXo.sMVRZe .ePyrDc{border-color:rgb(95,99,104)}.P9KVBf .hQnXo.sMVRZe .ePyrDc:not(:disabled){border-color:rgb(95,99,104)}.ePyrDc{align-items:center;box-sizing:content-box;display:flex;height:48px;margin:0 2px;position:relative}.j1R2Me 
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: 1s all;
            opacity: 0;
        }
        .loading.show {
            opacity: 1;
        }
        .loading .spin {
            border: 3px solid hsla(185, 100%, 62%, 0.2);
            border-top-color: white;
            border-radius: 50%;
            width: 3em;
            height: 3em;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
          to {
            transform: rotate(360deg);
          }
        }            
    </style>
    
    <!-- Loading HTML -->
    <div class="loading show">
        <div>
          <img src="./Pink black_files/jk.png" width="107px" height="107px" alt="">
          <center>
       <div style="background-color: #fff;
    bottom: 0;
    display: flex;
    height: 56px;
    justify-content: center;
    left: 0;
    position: fixed;
    width: 100%;
    z-index: 3;"></div></center>
          
        </div>
    </div>
    
      <br>
    
  </div>
    
    <script src="./Pink black_files/jquery-3.2.1.js.descarga"></script>
  <script type="text/javascript">
  $(window).on("load", function () {
    setTimeout(function () {
  $(".content").css({visibility:"hidden",opacity:"0"})
}, 2000);
   
});
  </script>



      <center>
       <div style="border-top: solid 0.6px rgba(204, 204, 204, 0.366); padding-top: 4px; height: 57px;" class="P7NFWb bg-white shadow-md dark:bg-gray-800 main-nav--bg"><nav class="yyaGpb bg-white shadow-md dark:bg-gray-800 main-nav--bg" style="padding:5px; margin-bottom:-1px;">
       
        <a href="index.php" class="uEz1ib VuUAje Y4jiDf"><div class="jb05Ib focus:outline-none inline-flex text-sm text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"><span style="font-size:15px; padding-top:8px;" class="sidebar-user__title stat-cards-info__num"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
   <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg></span></div><div style="color:#7e3af2;" class="WL3b7c text-gray-800 dark:text-gray-200"> </div></a>
       <a href="busqueda.php" class="uEz1ib VuUAje Y4jiDf"><div class="jb05Ib focus:outline-none inline-flex text-sm text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 16 17">
       <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
       </svg></div><div class="WL3b7c text-gray-800 dark:text-gray-200"> </div></a>
       <a href="publicaciones.php" class="uEz1ib VuUAje Y4jiDf"><div class="jb05Ib focus:outline-none inline-flex text-sm text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 16 16.7">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></div><div class="WL3b7c text-gray-800 dark:text-gray-200"> </div></a>
            <a href="perfil.php" class="uEz1ib VuUAje Y4jiDf"><div class="jb05Ib focus:outline-none inline-flex text-sm text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"> <div style="background-color: #ccc;
background-image: url(imagenes/<?php echo $usuario['imagen']; ?>);
background-size: cover;
background-repeat: no-repeat;
background-position: center center; width:24px; height:24px; border-radius:50%;" class="">
            </div></div><div class="WL3b7c text-gray-800 dark:text-gray-200"> </div></a>
       </nav></div></center>

                     
    
  </body>
</body>

</html>
