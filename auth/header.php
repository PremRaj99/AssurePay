<?php
session_start();
include "config.php";

// error_reporting(E_ALL);
// ini_set("display_errors",true);
// error_reporting(0);


if (isset($_SESSION['username'])) {
    $mobile = $_SESSION['username'];
    $user = "SELECT * FROM users WHERE mobile = '$mobile'";
    $uu = mysqli_query($conn, $user);
    $userdata = mysqli_fetch_array($uu);

    $tdate = date("Y-m-d");
    $todayallpayment = $conn->query("SELECT COUNT(`id`) as amt FROM `orders` WHERE `user_id` = '{$userdata["id"]}' AND `status` = 'SUCCESS' AND DATE(`create_date`) = '$tdate' ")->fetch_assoc();
    $todaysuccesspayment = $conn->query("SELECT SUM(`amount`) as amt FROM `orders` WHERE `user_id` = '{$userdata["id"]}' AND `status` = 'SUCCESS' AND DATE(`create_date`) = '$tdate' ")->fetch_assoc();
    $todaypendingpayment = $conn->query("SELECT SUM(`amount`) as amt FROM `orders` WHERE `user_id` = '{$userdata["id"]}' AND `status` = 'PENDING' AND DATE(`create_date`) = '$tdate' ")->fetch_assoc();

    $todayfail = $conn->query("SELECT SUM(`amount`) as amt FROM `orders` WHERE `user_id` = '{$userdata["id"]}' AND `status` = 'FAILURE' AND DATE(`create_date`) = '$tdate' ")->fetch_assoc();

    // $todaysettlement = $conn->query("SELECT SUM(`amount`) as amt FROM `settlement` WHERE `userid` = '{$userdata["id"]}' AND `status` = 'Success' AND DATE(`date`) = '$tdate'")->fetch_assoc();

    $fixednavbar = $userdata["fixed_navbar"];
    $fixedlayout = $userdata["fixed_layout"];
    $fixedsidebar = $userdata["sidebar_layout"];
    $boxstyle = $userdata["box_style"];
    $themecolor = $userdata["theme_color"];

    $class = '';
    if ($fixednavbar == 1) {
        $class .= 'fixed-navbar';
    }
    if ($fixedlayout == 1) {
        $class .= ' fixed-layout';
    }
    if ($fixedsidebar == 1) {
        $class .= ' sidebar-mini';
    }
    if ($boxstyle == 1) {
        $class .= ' boxed-layout';
    }

    $server = $_SERVER["SERVER_NAME"];

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title><?php echo $site_settings['brand_name'] ?? ''; ?> | Dashboard</title>
        <!-- GLOBAL MAINLY STYLES-->
        <link href="https://imbx.in/secret/serve-css.php?token=window.history.replaceState&file=bootstrap"
            rel="stylesheet" />
        <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://imbx.in/secret/serve-css.php?token=window.history.replaceState&file=main">
        <!-- PAGE LEVEL STYLES-->

        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }


        </script>
        <style>
            body:not(.fixed-layout).sidebar-mini .content-wrapper {
                width: 100%;
                margin-left: 0 !important;
            }
        </style>
    </head>



    <style>
        body {
            line-height: 1.2;
        }

        a {
            text-decoration: none !important;
        }

        header {
            border-bottom: 2px solid #0882FF !important;
        }

        /* header .page-brand a div.logo {
                                border-bottom: 2px solid #0882FF!important;
                            } */

        .hand {
            cursor: pointer;
        }

        .table-sm td,
        .table th {
            font-size: 0.98458em;
            border-color: #ebedf2 !important;
            padding: 0.4375rem !important;
        }

        .bg-brown {
            background: brown !important;
        }

        .d-none {
            display: none;
        }

        .m-primary {
            background: #285d29 !important;
            color: white !important;
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: unset !important;
            left: unset !important;
        }


        .form-check {
            display: block;
            min-height: 1.3125rem;
            padding-left: 1.8em;
            margin-bottom: 0.125rem;
        }

        .form-check .form-check-input {
            float: left;
            margin-left: -1.8em;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.1em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, 0.25);
            appearance: none;
            color-adjust: exact;
        }

        .form-check-input[type=checkbox] {
            border-radius: 0.15em;
        }

        .form-check-input[type=radio] {
            border-radius: 50%;
        }

        .form-check-input:active {
            filter: brightness(90%);
        }

        .form-check-input:focus {
            border-color: #cbd1db;
            outline: 0;
            box-shadow: none;
        }

        .form-check-input:checked {
            background-color: #42bb37;
            border-color: #42bb37;
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #42bb37;
            border-color: #42bb37;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        }

        .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: 0.5;
        }

        .form-check-input[disabled]~.form-check-label,
        .form-check-input:disabled~.form-check-label {
            opacity: 0.5;
        }

        .form-switch {
            padding-left: 2.5em;
        }

        .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            transition: background-position 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                transition: none;
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23cbd1db'/%3e%3c/svg%3e");
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .btn-check[disabled]+.btn,
        .wizard>.actions .btn-check[disabled]+a,
        div.tox .btn-check[disabled]+.tox-button,
        .swal2-popup .swal2-actions .btn-check[disabled]+button,
        .fc .btn-check[disabled]+.fc-button-primary,
        .btn-check:disabled+.btn,
        .wizard>.actions .btn-check:disabled+a,
        div.tox .btn-check:disabled+.tox-button,
        .swal2-popup .swal2-actions .btn-check:disabled+button,
        .fc .btn-check:disabled+.fc-button-primary {
            pointer-events: none;
            filter: none;
            opacity: 0.65;
        }

        .card .card-category {
            font-size: 14px;
            font-weight: 600;
        }

        .card {
            border-radius: 5px !important;
        }

        .card .card-title {
            font-size: 15px;
            font-weight: 400;
            line-height: 1.6;
        }

        .Success {
            color: #ffffff;
            background-color: #59d05d;
        }

        .Failed {
            color: #ffffff;
            background-color: #ff646d;
        }

        .Pending {
            color: #ffffff;
            background: #fbad4c;
        }

        .rl-loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        div#loading_ajax {

            background: rgba(0, 0, 0, 0.4);
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9998;
        }

        .rl-loading-thumb {
            width: 10px;
            height: 40px;
            background-color: #41f3fd;
            margin: 4px;
            box-shadow: 0 0 12px 3px #0882ff;
            animation: rl-loading 1.5s ease-in-out infinite;
        }

        .rl-loading-thumb-1 {
            animation-delay: 0s;
        }

        .rl-loading-thumb-2 {
            animation-delay: 0.5s;
        }

        .rl-loading-thumb-3 {
            animation-delay: 1s;
        }

        @keyframes rl-loading {
            0% {}

            20% {
                background: white;
                transform: scale(1.5);
            }

            40% {
                background: #41f3fd;
                transform: scale(1);
            }
        }

        .page-brand {
            color: #000 !important;
            background-color: #fff !important;
        }

        .nav-link {
            color: #000 !important;
        }

        .sidebar-item-icon {
            color: #000 !important;
        }

        .side-menu {
            background-color: #fff !important;
        }

        .side-menu li a {
            color: #000 !important;
            font-weight: 400 !important;

            &.active {
                background-color: #0882ff !important;
                border-radius: 5px;
                color: #fff !important;
                display: flex;
                align-items: center;
                ;
            }

            & i {
                margin-right: 4px;
            }
        }

        .side-menu li {
            color: #000 !important;
            font-weight: 600;
            /* border: 1px solid #000; */
            border-radius: 5px;
        }

        .side-menu li a:hover {
            background-color: #0882ff !important;
            border-radius: 5px;
            color: #fff !important;
            transition: all 0.3s;
            transform: translateX(5px) !important;

            & i {
                color: #fff !important;
            }
        }

        .page-sidebar {
            background-color: #fff !important;
            color: #000 !important;
            padding: 8px !important;
            width: 230px !important;
            margin-right: 20px !important;
        }

        .page-sidebar .admin-block div {
            color: #000 !important;
        }

        .page-sidebar .admin-block div small {
            color: #000 !important;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70%;
        }

        .standard-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .standard-logo img {
            width: 120px;
        }
    </style>

    </head>

    <body class="<?= $class ?>">

        <div class="rl-loading-container" id="loading_ajax">
            <div class="rl-loading-thumb rl-loading-thumb-1"></div>
            <div class="rl-loading-thumb rl-loading-thumb-2"></div>
            <div class="rl-loading-thumb rl-loading-thumb-3"></div>
        </div>

        <div class="page-wrapper">
            <!-- START HEADER-->
            <header class="header" style="background-color:#fff!important; color:#000!important;">
                <div class="page-brand">
                    <a class="link" href="dashboard">
                        <div class="logo">
                            <a class="standard-logo" href="">
                                <img src="<?php echo $site_settings['logo_url']; ?>" alt="logo" />
                            </a>
                        </div>
                        </span>
                        <span class="brand-mini">AP</span>
                    </a>
                </div>
                <div class="flexbox flex-1">
                    <!-- START TOP-LEFT TOOLBAR-->
                    <ul class="nav navbar-toolbar">
                        <li>
                            <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                        </li>
                    </ul>
                    <!-- END TOP-LEFT TOOLBAR-->
                    <!-- START TOP-RIGHT TOOLBAR-->
                    <ul class="nav navbar-toolbar" style="margin-right: 20px;">
                        <li class="dropdown dropdown-user">
                            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                                <img
                                    src="https://cdn2.iconfinder.com/data/icons/audio-16/96/user_avatar_profile_login_button_account_member-512.png" />
                                <div style="display: flex; flex-direction: column; margin-left: 10px;">
                                    <span style="font-weight: 600; margin-bottom: 4px;"><?php echo $userdata['name']; ?><i
                                            class="fa fa-angle-down m-l-5"></i></span>
                                    <span
                                        style="font-size: 10px;"><?php echo $userdata['role'] === "User" ? "API Partner" : "Admin"; ?></span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="profile"><i class="fa fa-user"></i>Profile</a>
                                <a class="dropdown-item" href="javascript:;"><i class="fa fa-cog"></i>Settings</a>
                                <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                                <li class="dropdown-divider"></li>
                                <a class="dropdown-item" href="logout"><i class="fa fa-power-off"></i>Logout</a>
                            </ul>
                        </li>
                    </ul>
                    <!-- END TOP-RIGHT TOOLBAR-->
                </div>
            </header>
            <!-- END HEADER-->
            <!-- START SIDEBAR-->
            <nav class="page-sidebar" id="sidebar">
                <div id="sidebar-collapse" style="padding: 16px 0;">
                    <ul class="side-menu metismenu">
                        <li>
                            <a class="active" href="dashboard"><img
                                    src="https://icons.iconarchive.com/icons/pictogrammers/material/256/view-dashboard-icon.png"
                                    class="sidebar-item-icon fa fa-th-large"
                                    style="width: 20px; margin-right: 10px; filter: brightness(0) invert(1);"></img>
                                <span class="nav-label">Dashboard</span>
                            </a>
                        </li>
                        <?php
                        if ($userdata['role'] == 'Admin') {
                            ?>



                            <li class="heading">Admin Managment</li>
                            <li>

                            <li>
                                <a class="" href="sitesetting"> <i class="sidebar-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z" />
                                            <path
                                                d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466" />
                                        </svg>
                                    </i>
                                    <span class="nav-label">Website Manage</span>
                                </a>
                            </li>


                            <li>
                                <a class="<?= ($activePage === 'add_api') ? 'active' : '' ?>" href="add_api"> <i
                                        class="sidebar-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-envelope-check" viewBox="0 0 16 16">
                                            <path
                                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                            <path
                                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686" />
                                        </svg>
                                    </i>
                                    <span class="nav-label">SMTP / WhatsApp</span>
                                </a>
                            </li>
                            <li>
                                <a class="<?= ($activePage === 'manage_subscription') ? 'active' : '' ?>"
                                    href="manage_subscription"> <i class="sidebar-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-shop" viewBox="0 0 16 16">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                                        </svg>
                                    </i>
                                    <span class="nav-label">Manage Subscription</span>
                                </a>
                            </li>

                            <li>
                                <a href="add_merchant"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-person-add"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                            <path
                                                d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                        </svg></i>
                                    <span class="nav-label">Create New User</span>
                                </a>
                            </li>
                            <li>
                                <a href="merchant_list"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-list-check"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                                        </svg></i>
                                    <span class="nav-label">APi User List</span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="heading">Merchant Setting</li>
                        <li>
                            <a href="connect_merchant"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                        <path fill-rule="evenodd"
                                            d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                    </svg></i>
                                <span class="nav-label">Connect Merchant</span>
                            </a>
                        </li>
                        <li>
                            <a href="payment_link"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                        <path
                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                                    </svg></i>
                                <span class="nav-label">Payment Link</span>
                            </a>
                        </li>
                        <li>
                            <a href="transactions"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-list-check"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                                    </svg></i>
                                <span class="nav-label">Transactions</span>
                            </a>
                        </li>
                        <li>
                            <a href="subscription"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-bag-check"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                    </svg></i>
                                <span class="nav-label">Subscription</span>
                            </a>
                        </li>
                        </li>
                        <li class="heading">Account Setting</li>
                        <li>
                        <li>
                            <a href="profile"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-person-circle"
                                        viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg></i>
                                <span class="nav-label">Manage Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="change_password"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                                    </svg></i>
                                <span class="nav-label">Change Password</span>
                            </a>
                        </li>
                        </li>
                        <!-- <li class="heading">Developer Setting</li> -->
                        <li>
                        <li>
                            <a href="apidetails"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-code-slash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                    </svg></i>
                                <span class="nav-label">API Details</span>
                            </a>
                        </li>
                        <li>
                            <a href="simple_code"><i class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-download"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg></i>
                                <span class="nav-label">Simple Code</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- END SIDEBAR-->
            <div class="content-wrapper">

                <?php
} else {

    header("location:index");
}
?>

            <script disable-devtool-auto="" src="https://pay.imb.org.in/Qrcode/disable-devtool.js"
                data-url="https://www.google.com/"></script>

            <script>
                // Show content when the page is fully loaded
                window.onload = function () {
                    document.getElementById("loading_ajax").style.display = "none";
                };
            </script>