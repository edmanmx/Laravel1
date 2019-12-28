@php
use Carbon\Carbon;    
@endphp
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
      <a href="/" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
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
              <img src="{{asset("assets/$theme/dist/img/userdefault.png")}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Bienvenido, {{session()->get('nombre_usuario') ?? 'Inicia tu sesión aquí'}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <img src="{{asset("assets/$theme/dist/img/userdefault.png")}}" class="img-circle" alt="User Image">

                 <p>
                    {{session()->get('nombre_usuario') ?? 'Invitado'}} - {{session()->get('rol_nombre') ?? 'Guest'}}
                    @auth
                    <small>Registrado desde: {{Carbon::parse(auth()->user()->created_at)->year}}</small>
                    @endauth
                  </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="box box-info text-center text-orange">
                    @if(session()->get("roles") && count(session()->get("roles")) > 1)
                        <!--<div class="box box-warning text-justify text-right">-->
                            <p>Cambiar Rol </p>
                            @foreach(session()->get("roles") as $key => $rol)
                              <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                              <div class="box-body text-info">
                                {{$rol["nombre"]}}
                              </div>
                              </a>
                            @endforeach
                    @endif
                </div>
              </li>
            
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
