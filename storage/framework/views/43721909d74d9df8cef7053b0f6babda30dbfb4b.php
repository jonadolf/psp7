<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
 <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><?php echo e(trans('Menú')); ?></li>
            <!-- Optionally, you can add icons to the links -->
          
             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Panel de control')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Proyectos/"><?php echo e(trans('Proyectos')); ?></a></li>
                    <li><a href="/Fases"><?php echo e(trans('Fases de proyecto')); ?></a></li>
                    <li><a href="/Defectos"><?php echo e(trans('Defectos')); ?></a></li>
                    <li><a href="/Usuarios"><?php echo e(trans('Usuarios')); ?></a></li>
                    <li><a href="/Tareas"><?php echo e(trans('Asignación Proyectos')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Estudiantes')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/ListaTareasEstudiante"><?php echo e(trans('Tareas asignadas')); ?></a></li>
                </ul></li>


                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Tamaño')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Ldc"><?php echo e(trans('Registro Líneas de código (LCD)')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Tiempo')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Registro de tiempo')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Defectos')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Registro de dectos')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Revisiones')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Revisión de código')); ?></a></li>
                    <li><a href="#"><?php echo e(trans('Revisión de Diseño')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Diseño')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Diseño del algoritmo')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Código Fuente')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Lista de código')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Pruebas')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Lista de casos de prueba')); ?></a></li>
                </ul></li>

                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Mejora de proceso')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('Propuesta mejora del proceso')); ?></a></li>
                </ul></li>

            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
