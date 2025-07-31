<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        //echo "Acceso no permitido!";
        echo "<div class='mt-1 float-left'>Sesion de ".$_SESSION['usuario']."</div>"."<button type='button' onclick='logOut()'>Cerrar Sesion</button>";

        echo "
        <nav class='navbar navbar-expand-md navbar-light bg-white '>
            <img class='position-relative mt-2 float-left' src='../../../FermacaRework/vista/icon/favicon.png' alt='logo-portafolio' height='100px'>
            <h1 class='container'>Ferreteria Maracaibo, C.A.</h1>
            <div class='container'>
                <button type='button' class='navbar-toggler ml-auto' data-toggle='collapse' data-target='#navBar'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div id='navBar' class='collapse navbar-collapse'>
                    <ul class='navbar-nav  ml-auto'>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/index.php'>Inicio </a></li>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/modelo/HTML/catalogo.php?id=0'>Catalogo</a></li>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/modelo/HTML/contacto.php'>Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>";
    }else{
        echo "
        <nav class='navbar navbar-expand-md navbar-light bg-white '>
            <img class='position-relative mt-2 float-left' src='../../../FermacaRework/vista/icon/favicon.png' alt='logo-Fermaca' height='100px'>
            <h1 class='container'>Ferreteria Maracaibo, C.A.</h1>
            <div class='container'>
                <button type='button' class='navbar-toggler ml-auto' data-toggle='collapse' data-target='#navBar'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div id='navBar' class='collapse navbar-collapse'>
                    <ul class='navbar-nav  ml-auto'>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/index.php'>Inicio </a></li>
                        <li class='nav-item'><a class='nav-link' href='/FermacaRework/modelo/HTML/catalogo.php?id=0'>Catalogo</a></li>
                        <li class='nav-item'><a class='nav-link' href='/FermacaRework/modelo/HTML/contacto.php'>Contacto</a></li>
                        <button class='btn-secondary' type='button' onclick='enviarLogin()'>Login</button>
                    </ul>
                </div>
            </div>
        </nav>";
    }
?>