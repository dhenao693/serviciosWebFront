<?php
include 'controller/UsuarioController.php';
include 'model/Usuario/Usuario.php';

session_start();
$_SESSION['activeSesion'] = false;
$bot = "";

if (isset($_POST['USER'])) $_SESSION['USER'] = $_POST['USER'];
if (isset($_POST['PASSWORD'])) $_SESSION['PASSWORD'] = $_POST['PASSWORD'];
if (isset($_POST['btn'])) $bot = $_POST['btn'];



switch ($bot) {
    case 'Login':
        if ($success) {
            $_SESSION['activeSesion'] = true;
        
        //header("Location: ./view/HomePage.php");
           
        } else echo '<script language="javascript">alert("Usuario o contraseña incorrecta");</script>';
        break;
    case 'Soporte':
        echo '<script language="javascript">alert("Mensaje de contacto a soporte");</script>';
        header("Location: URL");
        break;
    default:
        # code...
        break;
}
?>

<!DOCTYPE html>
<html lang="en" style="height:100%;
  margin:0;
  display: flex;
  flex-direction: column;">

    <head>
        <title>Login Usuario</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>

    <body style="height:100%;
    margin:0;
    display: flex;
    flex-direction: column;background-image: linear-gradient(to top, #09203f 0%, #055160 100%);">
        <form id="formLogin" method="post">

            <div class="form-floating" style="width: 70%; margin-left: 15%;margin-block: 15px;border-style:hidden;">
                <input class="form-control" id="floatingInput" placeholder="text" type="text" name="USER">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating " style="width: 70%; margin-left: 15%;margin-block: 15px;border-style:hidden;">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="PASSWORD">
                <label for="floatingPassword">Contraseña</label>
            </div>
                        
            <button type="submit" class="btn btn-primary" value="Login" name="btn" style="width: 100%;background: #043d48;border-style:hidden;">Ingresar</button>
        </form>
        
    <script>
        document.getElementById('formLogin').addEventListener('submit', (event) => {
            event.preventDefault();
            axios.get('http://localhost:8888/users/consultUser', {
                params: {
                    user: document.getElementById('floatingInput').value
                }
            }).then(response => {
                if(response.data != ""){
                    if(response.data.password == document.getElementById('floatingPassword').value){
                        console.log(response.data);
                        window.location.href = "./view/HomePage.php";
                    }else{
                        alert("Usuario o contraseña incorrecta");
                    }
                    
                }else{
                    alert("Usuario o contraseña incorrecta");
                }
                
            });
        });

        </script>
    </body>
</html>