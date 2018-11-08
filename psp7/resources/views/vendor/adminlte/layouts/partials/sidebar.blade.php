<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
 <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Menú') }}</li>
            <!-- Optionally, you can add icons to the links -->
          
             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Panel de control') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Proyectos/">{{ trans('Proyectos') }}</a></li>
                    <li><a href="/Fases">{{ trans('Fases de proyecto') }}</a></li>
                    <li><a href="/Defectos">{{ trans('Defectos') }}</a></li>
                    <li><a href="/Usuarios">{{ trans('Usuarios') }}</a></li>
                    <li><a href="/Tareas">{{ trans('Asignación Proyectos') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Estudiantes') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/ListaTareasEstudiante">{{ trans('Tareas asignadas') }}</a></li>
                </ul></li>


                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Tamaño') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Ldc">{{ trans('Registro Líneas de código (LCD)') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Tiempo') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Registro de tiempo') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Defectos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Registro de dectos') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Revisiones') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Revisión de código') }}</a></li>
                    <li><a href="#">{{ trans('Revisión de Diseño') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Diseño') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Diseño del algoritmo') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Código Fuente') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Lista de código') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Pruebas') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Lista de casos de prueba') }}</a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Mejora de proceso') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('Propuesta mejora del proceso') }}</a></li>
                </ul></li>

            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
