<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <img src="<?= base_url('assets/img/icon/logo1.jpg') ?>" alt="" class="img-fluid mr-2" width="50px">
            <img src="<?= base_url('assets/img/icon/logo2.png') ?>" alt="" class="img-fluid mr-2" width="50px">
            <img src="<?= base_url('assets/img/icon/logo3.png') ?>" alt="" class="img-fluid mr-5" width="40px">


            <div class="d-flex justify-content-end">
                <h5 class="mr-2 d-none d-md-block"><b class="text-success">Aplikasi</b> <b>Penentuan Penerima Bantuan Rumah Layak Huni</b></h5>
            </div>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-1 d-none d-lg-inline text-gray-600 small"><b><?= $user['nama']; ?></b></span>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">(<?= $user['role']; ?>)</span>
                        <?php if (!$user['foto']) : ?>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/auth/user/profile.png') ?>">
                        <?php else : ?>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/auth/user/') . $user['foto']; ?>">
                        <?php endif; ?>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#infoUserModal">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-700"></i>
                            Profil
                        </a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editUserModal">
                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-700"></i>
                            Edit Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-700"></i>
                            Keluar
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->