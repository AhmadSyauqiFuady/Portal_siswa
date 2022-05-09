<?php
$title = 'Profil';
$path = '../';
require '../comp/header.php';

session_start();
include "../koneksi.php";
include "auth_user.php";
?>

<body class="g-sidenav-show bg-gray-100">
    <!-- aside -->
    <?php require '../comp/sidebar.php' ?>
    <!--/ aside -->

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">

        <!-- navbar -->
        <?php $title = 'Tugas' ?>
        <?php require '../comp/navbar.php' ?>

        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                <?php echo $_SESSION["Username"] ?>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Guru / Pengajar
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="modal" data-bs-target="#modal-form" style="cursor: pointer;">

                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Ubah Password</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h5>Akun Anda</h5>
                        </div>
                        <div class="card-body p-3">
                            <?php

                            $querydosen = mysqli_query($konek, "select * from users where id_users = '$_SESSION[Id_User]'");
                            if ($querydosen == false) {
                                die("Terjadi Kesalahan : " . mysqli_error($konek));
                            }
                            ?>

                            <div class="row">
                                <?php while ($user = mysqli_fetch_array($querydosen)) : ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" value="<?= $user['namaadmin'] ?>" class="form-control" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" value="<?= $user['username'] ?>" class="form-control" disabled />
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
</body>
<div class="col-md-6">
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Ubah Password</h3>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" action="update_pass.php" name="modal_popup" enctype="multipart/form-data" method="post">
                                <?php
                                $sql = $konek->query("select * from users where id_users = '$_SESSION[Id_User]'");
                                while ($data = $sql->fetch_assoc()) :
                                ?>
                                    <label>Username</label>
                                    <div class="input-group mb-3">
                                        <input type="username" name="siswa" class="form-control" placeholder="Username" value="<?= $data['username'] ?>" aria-label="Email" aria-describedby="email-addon" readonly>
                                    </div>
                                    <label>Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $data['password'] ?>" aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                <?php endwhile; ?>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ubah</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require '../comp/footer.php' ?>