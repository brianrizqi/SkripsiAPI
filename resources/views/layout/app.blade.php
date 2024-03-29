<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">

</head>
<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">E - Farm</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">EF</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Starter</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Article</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="layout-default.html">Article</a></li>
                            <li><a class="nav-link" href="{{route('article.create')}}">Create Article</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Plants</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('plant')}}">Plants</a></li>
                            <li><a class="nav-link" href="{{route('plant.create')}}">Create Plant</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Criteria</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('criteria')}}">Criteria</a></li>
                            <li><a class="nav-link" href="{{route('criteria.create')}}">Create Criteria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Values</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('value')}}">Values</a></li>
                            <li><a class="nav-link" href="{{route('value.create')}}">Create Value</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Data</span></a>
                        <ul class="dropdown-menu">
{{--                            <li><a class="nav-link" href="{{route('data')}}">Data</a></li>--}}
                            <li><a class="nav-link" href="{{route('data.create')}}">Create Data</a></li>
                            <li><a class="nav-link" href="{{route('sppk')}}">Create SPPK</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="{{route('users')}}"><i class="far fa-user"></i> <span>User</span></a>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="main-content">
            <section class="section">
                @yield('content')
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2019
            </div>
        </footer>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('js/stisla.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('js/page/index.js')}}"></script>
</body>
</html>
