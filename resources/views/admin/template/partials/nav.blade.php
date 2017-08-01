<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--figure>
        <img src = "logo.png"></img>
      </figure-->
      <!--span class = "icon-bar-logo"></span-->
      <a class="navbar-brand" href="/">
        <span class = "mt-color-tittle"><img src = "{{ asset('images/logo.png') }}" width="75" height="20"></img></span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--li class="active"><a href="#">Información<span class="sr-only">(current)</span></a></li-->
        <li><a href="/informacion"><b>Información</b></a></li>
        <li><a href="/noticias"><b>Noticias</b></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Tecnologías</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/tecnologias/django">Django</a></li>
            <li><a href="/tecnologias/laravel">Laravel</a></li>
            <li><a href="/tecnologias/net">.Net</a></li>
            <!--li role="separator" class="divider"></li-->
            <li><a href="/tecnologias/java">Java</a></li>
            <!--li role="separator" class="divider"></li-->
            <li role="separator" class="divider"></li>
            <li><a href="#">-----------</a></li>
          </ul>
        </li>
      </ul>      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><b>Administración</b></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Usuario</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Opciones</a></li>
            <li><a href="#">Artículos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Búsqueda">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>   

