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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/css/cheatsheet.css" rel="stylesheet">
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
<header class="bd-header bg-info py-3 d-flex align-items-stretch border-bottom border-dark">
    <div class="container-fluid d-flex align-items-center">
        <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Cheatsheet
        </h1>
    </div>
</header>

<aside class="bd-aside sticky-xl-top text-muted align-self-center mb-3 mb-xl-2 px-2">
    <nav class="small" id="toc">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('categories.index') }}">Категория</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">Пользователи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tags.index') }}">Тэги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Посты</a>
            </li>
        </ul>
    </nav>
</aside>
<div class="container bd-aside">
    @yield('content')
</div>
<script src="/js/app.js"></script>
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckfinder/ckfinder.js"></script>
<script>
  //  var ckeditor1 = CKEDITOR.replace( 'content' );
  document.addEventListener("DOMContentLoaded", function (event) {
      var editor = CKEDITOR.replace('content');
      CKFinder.setupCKEditor(editor);
  });
</script>
</body>
</html>
