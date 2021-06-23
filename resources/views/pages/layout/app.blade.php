<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Admin section</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/front.css" rel="stylesheet">
    <style>
        table.table form {
            display: inline-block;
        }
        button.delete-task {
            background: transparent;
            border: none;
            color: #ad2b43;
            padding: 0;
        }
    </style>
    <!-- Bootstrap core CSS -->
</head>
<body class="bg-light">
<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="/images/logo.png" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="about-me.html">ABOUT ME </a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>

                <ul class="nav navbar-nav text-uppercase pull-right">
                    <li><a href="#">Register</a></li>
                    <li><a href="about-me.html">Login</a></li>
                    <li><a href="contact.html">My profile</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->


            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<!--main content start-->
<div class="main-content">
    @yield('content')
</div>
<!-- end main content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/front.js"></script>
</body>
</html>
