<!doctype html>
<html lang="ja">
    <head>
        <mata charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <title>Player List</title>
    </head>
    <body>
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>

        <header class="py-4">
            <div class="container text-center">
                <h1 class="text-center"><a href="#"><img class="w-25" src="/img/ccblogo.png"></a></h1>
            </div>
        </header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">TOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Roster</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedule</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <!-- メインビジュアル -->
            <div class="py-4">
                <div class="container">
                    <div id="main_visual" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                            <li data-target="#main_visual" data-slide-to="1"></li>
                            <li data-target="#main_visual" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- 一枚目 -->
                                <img class="img-fluid" src="/img/pic1.png">
                            </div>
                            <div class="carousel-item">
                                <!-- 二枚目 -->
                                <img class="img-fluid" src="/img/pic2.png">
                            </div>
                            <div class="carousel-item">
                                <!-- 三枚目 -->
                                <img class="img-fluid" src="/img/pic3.png">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">前に戻る</span>
                        </a>
                        <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">次に進む</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-4 bg-light">
                <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">猪股　光</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">金澤　啓太</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">岩村　岳</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">岩村　岳</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">岩村　岳</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="/img/no_image.png" alt="" class="img-fluid">
                                    <div class="card-body d-flex justify-content-between">
                                        <h4 class="card-title">岩村　岳</h4>
                                        <button type="button" class="btn btn-primary">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>