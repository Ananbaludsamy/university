<?php $page = substr($_SERVER['SCRIPT_NAME'], strripos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>
<!-- Main Sidebar Container -->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars "></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt fa-spin"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/temple.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ວິທະຍາໄລ </span> <!--ເສຕຖາທິຣາຊ໌ -->
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                ໜ້າຫຼັກ
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">ມະຫາວິທະຍາໄລ</li>
                    <li class="nav-item <?= $page == 'new_register.php' || $page == 'old_register.php' ? 'menu-open' : '' ?>">
                        <a href="new_register.php" class="nav-link <?= $page == 'new_register.php' || $page == 'old_register.php' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-retweet"></i>
                            <p>
                                ລົງທະບຽນ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="new_register.php" class="nav-link <?= $page == 'new_register.php' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        ນັກຮຽນໃຫມ່
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="old_register.php" class="nav-link <?= $page == 'old_register.php' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        ນັກຮຽນເກົ່າ
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item <?= $page == 'main_classroom.php' ? 'menu-open' : '' ?>">
                        <a href="main_classroom.php" class="nav-link <?= $page == 'main_classroom.php' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-retweet"></i>
                            <p>
                                ຫ້ອງຮຽນ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item <?= $page == 'Score.php' ? 'menu-open' : '' ?>">
                        <a href="Score.php" class="nav-link <?= $page == 'Score.php' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-retweet"></i>
                            <p>
                                ຄະແນນ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item <?= $page == 'Playment.php' ? 'menu-open' : '' ?>">
                        <a href="Playment.php" class="nav-link <?= $page == 'Playment.php'  ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-retweet"></i>
                            <p>
                                ຈ່າຍຄ່າເທີມ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item <?= $page == 'i_information_student.php' || $page == 'i_information_staff.php' || $page == 'i_information_subject.php' ? 'menu-open' : '' ?>">
                        <a href="i_information_student.php" class="nav-link <?= $page == 'i_information_student.php' || $page == 'i_information_staff.php' || $page == 'i_information_subject.php' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-retweet"></i>
                            <p>
                                ຈັດການຂໍ້ມູນພື້ນຖານ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="i_information_student.php" class="nav-link <?= $page == 'i_information_student.php' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        ນັກຮຽນ
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="i_information_staff.php" class="nav-link <?= $page == 'i_information_staff.php' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        ພະນັກງານ
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="i_information_subject.php" class="nav-link <?= $page == 'i_information_subject.php' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        ວີຊາຮຽນ
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>