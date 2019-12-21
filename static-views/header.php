<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" itemprop="inLanguage" lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="/images/others/favicon.png" type="image/png">
        
        <?if(isset($meta)):?>
            <?foreach($meta as $mName => $mValue):?>
                <meta name="<?=$mName;?>" content="<?=$mValue;?>" <?=( $mName == 'keywords' ? 'itemprop="keywords"' : '' );?> <?=( $mName == 'description' ? 'itemprop="description"' : '' );?>/>
            <?endforeach;?>
        <?endif;?>
        
        <link rel="stylesheet" type="text/css" href="/files/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/files/css/main-style.css">
        <link rel="stylesheet" type="text/css" href="/files/css/animations.css">
        <link rel="stylesheet" type="text/css" href="/files/css/main-style-adaptive.css">
        <script type="text/javascript" src="/files/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/files/js/popper.min.js"></script>
        <script type="text/javascript" src="/files/js/bootstrap.min.js"></script>
        
        <?if(isset($title)):?>
            <title><?=$title;?></title>
        <?endif;?>
    </head>
    <body>
        <div id="main-wrapper">
            <header id="main-wrapper-bg"></header>
            <main class="container main-wrapper-content shadow">
                <div class="row m-0">
                    <div class="col-3 container-header pl-0">
                        <a href="/">
                            <img src="/images/others/main-logotype.png" class="main-logotype"/>
                        </a>
                    </div>
                    <div class="col-9 top-menu-wrapper pr-0">
                        <div class="container menu-container">
                            <nav class="navbar navbar-expand-sm navbar-light bg-light d-flex justify-content-end">
                                <ul class="navbar-nav">
                                    <li class="nav-item <?=( preg_match('/services/', $_SERVER['REQUEST_URI']) ? 'active' : '' );?>" data-title="S">
                                        <a class="nav-link" href="/services">Услуги</a>
                                    </li>
                                    <li class="nav-item <?=( preg_match('/articles/', $_SERVER['REQUEST_URI']) ? 'active' : '' );?>" data-title="A">
                                        <a class="nav-link" href="/articles">Статьи</a>
                                    </li>
                                    <li class="nav-item <?=( preg_match('/videos/', $_SERVER['REQUEST_URI']) ? 'active' : '' );?>" data-title="V">
                                        <a class="nav-link" href="/videos">Видео</a>
                                    </li>
                                    <li class="nav-item <?=( preg_match('/contacts/', $_SERVER['REQUEST_URI']) ? 'active' : '' );?>" data-title="C">
                                        <a class="nav-link" href="/contacts">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>