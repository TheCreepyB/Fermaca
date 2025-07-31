<?php
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['contraseña'];
    if($_POST){
        if($_SESSION['usuario'] && $_SESSION['contraseña']){
            $conect=mysqli_connect("localhost", "root","", "productos") or die("no se ha podido connectar...");
            $sql="SELECT * FROM cliente WHERE usuario='".$_SESSION['usuario']."'";
            $result = $conect->query($sql);
            $row = $result->num_rows;

            if ($row != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    $bdusuario = $row['usuario'];
                    $bdcontraseña = $row['contras'];
                }
                if($_SESSION['usuario'] == $bdusuario){
                    if($_SESSION['contraseña'] == $bdcontraseña){
                        header("Location: ../../../../../FermacaRework/index.php");
                    }else{
                        header("Location: ../../../../../FermacaRework/modelo/HTML/login.php");
                        echo "<div id='errorPassword'></div>";
                    }
                }else{
                    header("Location: ../../../../../FermacaRework/modelo/HTML/login.php");
                    echo "Este usuario es incorrecto!";
                }
            } else {
                header("Location: ../../../../../FermacaRework/modelo/HTML/login.php");
                echo is_object($row);
                echo "Este usuario no esta registrado";
            }
        }else{
            echo "Error: " . $sql . "<br>" . $conect->error;
            header("Location: ../../../../../FermacaRework/modelo/HTML/login.php");
            echo "<div id='errorUser'></div>";
        }
    }else{
        echo "Acceso no permitido";
        exit;
    }
?>