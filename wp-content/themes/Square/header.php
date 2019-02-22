<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <nav>
            <div class="hamburger" id="openMenu">
                <span class="hamburger-item hamburger-top"></span>
                <span class="hamburger-item hamburger-middle"></span>
                <span class="hamburger-item hamburger-bottom"></span>
            </div>
            <ul class="hidden">
                <li class="nav-list-item">
                    <a href="portfolio.php" class="nav-list-link">portfolio</a>
                    <ul class="second-menu">
                        <li class="second-menu-item">
                            <a href="#" class="second-menu-link">fashion</a>
                        </li>
                        <li class="second-menu-item">
                            <a href="#" class="second-menu-link">editorial</a>
                        </li>
                        <li class="second-menu-item">
                            <a href="#" class="second-menu-link">street</a>
                        </li>
                        <li class="second-menu-item">
                            <a href="#" class="second-menu-link">black white</a>
                            <ul class="third-menu">
                                <li class="third-menu-item">
                                    <a href="#" class="third-menu-link">gallary /1</a>
                                </li>
                                <li class="third-menu-item">
                                    <a href="#" class="third-menu-link">gallary /2</a>
                                </li>
                                <li class="third-menu-item">
                                    <a href="#" class="third-menu-link">gallary /3</a>
                                </li>
                                <li class="third-menu-item">
                                    <a href="#" class="third-menu-link">gallary /4</a>
                                </li>
                                <li class="third-menu-item">
                                    <a href="#" class="third-menu-link border-none">gallary /5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="second-menu-item">
                            <a href="post.php" class="second-menu-link border-none">personal</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item">
                    <a href="#" class="nav-list-link">clients</a>
                </li>
                <li class="nav-list-item">
                    <a href="blog.php" class="nav-list-link">news</a>
                </li>
                <li class="nav-list-item">
                    <a href="#" class="nav-list-link">about me</a>
                </li>
                <li class="nav-list-item">
                    <a href="#" class="nav-list-link">contact</a>
                </li>
            </ul>
            <ul class="social-list">
                <li class="social-list-item"><i class="fab fa-facebook-f"></i></li>
                <li class="social-list-item"><i class="fab fa-twitter"></i></li>
                <li class="social-list-item"><i class="fab fa-instagram"></i></li>
                <li class="social-list-item"><i class="fas fa-vr-cardboard"></i></li>
                <li class="social-list-item"><i class="fab fa-google-plus-square"></i></li>
                <li class="social-list-item"><i class="fas fa-envelope"></i></li>
            </ul>
        </nav>
        <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php bloginfo('template_url') ?>/img/square_logo.png" alt="logo"></a>
    </div>
</header>