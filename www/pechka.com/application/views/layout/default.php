<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/public/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/public/css/style.css" rel="stylesheet">
</head>
<body class="info-color elegant-color-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php if (isset($_SESSION['admin'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/posts">
                                <button type="button" class="btn btn-danger btn-rounded">Админка</button>
                                </a>
                            </li>
                        <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    <button type="button" class="btn btn-elegant">На главную</button>
                                </a>
                            </li>
                        <?php if (!isset($_SESSION['auth']['id'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/login">
                                    <button type="button" class="btn btn-elegant">Авторизация</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/register">
                                    <button type="button" class="btn btn-elegant">Регистрация</button>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/post/add">
                                    <button type="button" class="btn btn-elegant">Добавить рецепт</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/profile">
                                    <button type="button" class="btn btn-elegant">Профиль</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/logout">
                                    <button type="button" class="btn btn-elegant">Выход</button>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron-bg">
            <div class="full-bg-img">
                <div class="container-fluid h-25 pt-5">
                    <div class="white-text pt-5 text-center wow fadeInUp">
                        <div class = "container-fluid pt-5">
                            <h1 class = "display-4 float-left text-light elegant-color-dark border border-dark rounded z-depth-5">
                                <?php
                                    echo $title
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mb-5 pt-3">
        <?php echo $content; ?>
    </div>
    <footer class="page-footer font-small fixed-bottom">
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="#"> Redrik_dark</a>
          </div>
    </footer>
    <script src='/public/js/jquery-3.3.1.min.js'></script>
    <script src='/public/js/form.js'></script>
    <script type="text/javascript" src="/public/js/popper.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/public/js/mdb.min.js"></script>
</body>
</html>