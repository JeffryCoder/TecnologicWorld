<body>

<header>
  <div id="logo" class="Logo">
    <a href="http://localhost">
      <img  src="http://localhost/Imagenes/Logos/Logo.png">
    </a>
  </div>

  <div class="Menú">
    <nav>
      <ul>
        <li><a href="http://localhost/Contacto.php">Contacto</a></li>
        <li><a href="http://localhost/Noticias.php">Noticias</a></li>
        <li><a href="http://localhost/Foro/Foro.php">Foro</a></li>
      </ul>
    </nav>
  </div>



<script type="text/javascript">
  function validar(e){
    if (window.event){
      keyval=e.keyCode
    }else if(e.which){
      keyval=e.which
    }if (keyval=="13"){
      document.buscar.submit()}
  }
</script>


  <div class="Buscador">
      <form action="http://localhost/php/Buscador/Buscador.php" method="post">
        <input type="text"  placeholder="Buscador de Usuarios,Posts..." onkeypress="return validar(event)" name="Busqueda" class="" size="60" aria-label="Amount (to the nearest dollar)"/>
      </form>
  </div>



<div class="RegistroLoginHeader">
  <?php if(empty($_SESSION['Nickname'])){
    echo '
    <a class="SinIniciarSesión" href="http://localhost/Login.php">
      <b>Registrarse/Entrar
        <span class="glyphicon glyphicon-user" >
        </span>
      </b>
    </a>';
  }else{
    $foto = $_SESSION['FotoUsuario'];
    echo '
      <a class="SesiónIniciada">
      <img id="ImgUser" src="http://localhost/'.$foto.'" alt="Perfil"/>
      </a>
    ';}?>
          <div id="MenuUser" class="MenuDesplegableUsuario">
            <ul>
              <li><a href="http://localhost/Perfil.php">Perfil <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="http://localhost/php/RegistroLogin/CerrarSesion.php">Cerrar Sesión <span class="glyphicon glyphicon-off"></span></a></li>

            </ul>
          </div>
</div>
</header>
