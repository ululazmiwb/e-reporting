<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <a href="#" class="brand-link elevation-4">
                <img src="<?= base_url('assets/'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class=" brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">e-Reporting</span>

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['name']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <!-- Querry Menu -->

                        <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryMenu = " SELECT `user_menu`.`id`,`menu`
                        FROM `user_menu` JOIN `user_access_menu` 
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY`user_access_menu`.`menu_id` ASC";
                        $menu = $this->db->query($queryMenu)->result_array();
                        ?>

                        <!-- Heading -->
                        <!-- lOOPING MENU -->
                        <?php foreach ($menu as $m) : ?>
                            <div class="sidebar-heading">
                                <li class="nav-header has-treeview "> <?= $m['menu']; ?></li>

                                <!-- sub menu sesuai menu -->

                                <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1 
                                ";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>
                            </div>
                            <?php foreach ($subMenu as $sm) : ?>

                                <li class="nav-item has-treeview">

                                    <?php if ($title == $sm['title']) : ?>
                                        <a class="nav-link active " href="<?= base_url() . $sm['url']; ?>">
                                        <?php else : ?>
                                            <a class="nav-link has-treeview" href="<?= base_url() .  $sm['url']; ?>">
                                            <?php endif; ?>
                                            <i class="<?= $sm['icon']; ?>"></i>
                                            <span><?= $sm['title']; ?></span></a>
                                </li>


                            <?php endforeach ?>
                            <!-- Divider -->

                        <?php endforeach; ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>