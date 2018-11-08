<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e(url('/home')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>PSP</b>7</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sistema      </b>PSP 7 </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"><?php echo e(trans('adminlte_lang::message.togglenav')); ?></span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                  
                    <ul class="dropdown-menu">
                        <li class="header"><?php echo e(trans('adminlte_lang::message.hola')); ?></li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image"/>
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            <?php echo e(trans('adminlte_lang::message.supteam')); ?>

                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p><?php echo e(trans('adminlte_lang::message.awesometheme')); ?></p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">c</a></li>
                    </ul>
                </li><!-- /.messages-menu -->

              
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(url('/register')); ?>"><?php echo e(trans('adminlte_lang::message.register')); ?></a></li>
                    <li><a href="<?php echo e(url('/login')); ?>"><?php echo e(trans('adminlte_lang::message.login')); ?></a></li>
                <?php else: ?>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo e(Auth::user()->name); ?>

                                    <small><?php echo e(trans('adminlte_lang::message.login')); ?> Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                         
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo e(url('/settings')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('adminlte_lang::message.profile')); ?></a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <?php echo e(trans('adminlte_lang::message.signout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="submit" value="logout" style="display: none;">
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Control Sidebar Toggle Button -->
                
            </ul>
        </div>
    </nav>
</header>
