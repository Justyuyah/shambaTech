<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShambaTech | @yield('title')</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/fav.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="/assets/css/style.css">
    @yield('top-script')

</head>

<body>

    <!-- =======================
Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="/">
                    <img class="navbar-brand-item light-mode-item" src="/assets/images/logo.png" alt="logo">
                    <img class="navbar-brand-item dark-mode-item" src="/assets/images/logo-light.png" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
                        <li class="nav-item"> <a
                                class="nav-link @if ((Request::is('/')) || Request::is('farmer*') ) active    @endif"
                                href="/">Farmer</a></li>
                        <li class="nav-item"> <a class="nav-link @if (Request::is('veo*')) active    @endif"
                                href="/veo">Veo</a></li>
                        <li class="nav-item"> <a class="nav-link @if (Request::is('about*')) active    @endif"
                                href="/about">About</a></li>
                        <li class="nav-item"> <a class="nav-link @if (Request::is('contact*')) active    @endif"
                                href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Main navbar END -->
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->
