<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title><?= $title; ?></title>

    <link href="<?= base_url(); ?>/adminkit/css/app.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/datatable/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">The Esthetic </span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        <br>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard/index">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <?php if (allow('admin')) : ?>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/user">
                                <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Account</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/message">
                                <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Message</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/book">
                                <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Book History</span>
                            </a>
                        </li>

                    <?php endif; ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard/room">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Room</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard/book/create">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Book Room</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>