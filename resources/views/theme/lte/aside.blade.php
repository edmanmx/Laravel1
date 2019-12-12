<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset("assets/$theme/dist/img/tecnm.jpeg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <br>
              <span class="hidden-xs-down">Usuario: {{session()->get('nombre_usuario') ?? 'Invitado'}}</span></br>
              @if(session()->get("roles") && count(session()->get("roles")) > 1)
              <span class="hidden-xs-down">Rol: {{session()->get('rol_nombre') ?? ''}}</span>
              @else
              <span class="hidden-xs-down">TecNM en León</span>
              @endif
            </a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
          <!-- <div class="input-group">
           <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div> -->
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú Principal</li>
          @foreach ($menusComposer as $key => $item)
              @if ($item["menu_id"] != 0)
                  @break
              @endif
              @include("theme.$theme.menu-item", ["item" => $item])
          @endforeach
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>