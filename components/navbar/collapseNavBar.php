<?php

function crearCollapsedNavBar() {

    echo "
    <nav class='navbar navbar-expand-md bg-dark navbar-dark' id='absoluteNavBar'>
      <a class='navbar-brand' href='./index.php'>
        <img src='./media/logo/BanEmpleado.png' width='150' height='50' class='d-inline-block align-top' alt='' loading='lazy'>
      </a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='collapsibleNavbar'>
        <ul class='navbar-nav'>
          <li class='nav-item'>
            <a class='nav-link' href='./solicitudPrestamo.php'>Solicita un préstamo</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Consultas</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Registro</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Iniciar sesión</a>
          </li>      
        </ul>
      </div>  
  </nav>";

}

?>