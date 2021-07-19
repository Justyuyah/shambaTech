<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/datatable/dataTables.bootstrap.min.css">
    <title>ShambaTech | @yield('head') Panel</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header class="p-0 text-white shadow navbar navbar-primary sticky-top bg-primary flex-md-nowrap">
        <a class="px-3 navbar-brand col-md-3 col-lg-2 me-0" href="#"><img src="/assets/images/logo.png" alt="logo"
                style="height: 20%; width:100%;"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            @if (Request::is('admin*'))
            <div class="nav-item text-nowrap">
                <form action="/admin/signout" method="POST">
                    @csrf
                    <button type="submit" class="px-3 btn btn-primary">Signout</button>
                </form>
            </div>
            @endif
            @if (Request::is('veo*'))
            <div class="nav-item text-nowrap">
                <form action="/veo/signout" method="POST">
                    @csrf
                    <button type="submit" class="px-3 btn btn-primary">Signout</button>
                </form>
            </div>
            @endif
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="pt-3 position-sticky">
                    <ul class="nav flex-column">
                        @if (Request::is('admin*'))
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/home')) active @endif" href="/admin/home">
                                <i class="mr-1 align-middle fas fa-fw fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/veo*')) active @endif
                                                        @endi" href="/admin/veo">
                                <i class="mr-1 align-middle fas fa-fw fa-user-circle"></i>
                                Veo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/farmer*')) active @endif

                                                        @endi" href="/admin/farmer">
                                <i class="mr-1 align-middle fas fa-fw fa-user-circle"></i>
                                Farmers
                            </a>
                        </li>
                        @endif
                        @if (Request::is('veo*'))
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/home')) active @endif" href="/veo/home">
                                <i class="mr-1 align-middle fas fa-fw fa-home"></i>
                                Post Article
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/*')) active @endif
                                                        @endi" href="/veo/category">
                                <i class="fas fa-layer-group"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/farmer*')) active @endif

                                                        @endi" href="/veo/farmer">
                                <i class="fas fa-envelope"></i>
                                Chat
                            </a>
                        </li>
                        @endif
                    </ul>

                    <h6
                        class="px-3 mt-4 mb-1 sidebar-heading d-flex justify-content-between align-items-center text-muted">
                        <span class="text-green">{{Auth::user()->name}}</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    @if (Request::is('admin*'))
                    <ul class="mb-2 nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/profile*')) active @endif" href="/admin/profile">
                                <i class="mr-1 align-middle fas fa-fw fa-eye"></i>
                                View Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/profile/edit*')) active @endif"
                                href="/admin/profile/edit">
                                <i class="mr-1 align-middle fas fa-fw fa-edit"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('admin/changePassword*')) active @endif"
                                href="/admin/changePassword">
                                <i class="mr-1 align-middle fas fa-fw fa-lock"></i>
                                Change Password
                            </a>
                        </li>
                    </ul>
                    @endif
                    @if (Request::is('veo*'))
                    <ul class="mb-2 nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/profile*')) active @endif" href="/veo/profile">
                                <i class="mr-1 align-middle fas fa-fw fa-eye"></i>
                                View Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/profile*/edit')) active @endif"
                                href="/veo/profile/edit/{{Auth::user()->id}}">
                                <i class="mr-1 align-middle fas fa-fw fa-edit"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('veo/changePassword*')) active @endif"
                                href="/veo/changePassword">
                                <i class="mr-1 align-middle fas fa-fw fa-lock"></i>
                                Change Password
                            </a>
                        </li>
                    </ul>

                    @endif

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
                    <h4 class="h2">@yield('title')</h4>
                </div>
                @include('includes.messages')
                @yield('content')
            </main>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/datatable/jquery.dataTables.min.js"></script>
    <script src="/assets/datatable/dataTables.bootstrap.min.js"></script>
</body>

</html>
