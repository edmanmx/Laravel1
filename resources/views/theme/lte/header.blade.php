<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TNM</b>/L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TecNM</b> / León</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar botón de ocultar  -->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
             <ul class="dropdown-menu">
              
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset("assets/$theme/dist/img/tecnm.jpeg")}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Hola, {{session()->get('nombre_usuario') ?? 'Invitado'}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <!-- <li class="user-header">
                 <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                 <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li> -->
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                    @if(session()->get("roles") && count(session()->get("roles")) > 1)
                        <div class="col-xs-6 text-center">
                            <a href="#" class="cambiar-rol">Cambiar Rol</a>
                        </div>
                    @endif
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                    @guest
                        <a href="{{route('login')}}" class="btn btn-default btn-flat">Login</a>
                    @endguest
                </div>
                <div class="pull-right">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
