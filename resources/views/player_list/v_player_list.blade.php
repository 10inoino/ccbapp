<?php
    ini_set("memory_limit","1024M");

    $player_names = [
    	['伊星 洵一郎','iboshi','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['藤田 凌平','ryohei','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['猪股 光','ino','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['山田 航希','yamada','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['佐藤 悠希','yuki','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['岩村 岳','gaku','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['飯塚 春太','iizuka','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['山田 修也','shuya','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['佐藤 丈太郎','jo','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['藤田 竜輔','ryu','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['内山 智哉','tomo','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['新山 航希','niiyama','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['宮本 康平','miyamoto','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['田中 幸之介','tanaka','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','jpg'],
        ['金井 賢治','ken','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png'],
        ['山本 純也','yamamoto','Junichiro Iboshi','4','SG','キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。','png']
    ];

    $base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    $array_js = json_encode($player_names);
?>

<!doctype html>
<html lang="ja">
    <head>
        <mata charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/custom_style.css">
        <title>Player List</title>
    </head>
    <body>
        <script src="<?= $base_url ?>js/jquery-3.4.1.min.js"></script>
        <script src="<?= $base_url ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= $base_url ?>js/player_list.js"></script>
        <script>
            $(document).ready( function(){
                var players = <?php echo $array_js ?>;
                var base_url_js = "<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>";

                $('.player_detail_btn').on('click',function(){
                    var btn_val = $(this).val();
                    console.log(btn_val);
                    $("#number").text(players[btn_val][3]);
                    $("#name").text(players[btn_val][0]);
                    $("#name-eng").text(players[btn_val][2]);
                    $("#position").text(players[btn_val][4]);
                    $("#desc").text(players[btn_val][5]);
                    $('#modal-player-img').attr('src', base_url_js + '/img/' + players[btn_val][1] + '/top.' + players[btn_val][6]);
                    $("#player_detail").modal('show');
                });
            });
        </script>

        <header class="m-0 logo-area">
            <div class="container text-center py-4">
                <h1 class="text-center z-1"><a href="#"><img class="w-25" src="<?= $base_url ?>img/ccblogo.png"></a></h1>
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
                            <a class="nav-link" href="#roster">Roster</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <!-- メインビジュアル -->
            <div class="py-4">
                <div class="container">
                    <div id="main_visual" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="">
                        <ol class="carousel-indicators">
                            <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                            <li data-target="#main_visual" data-slide-to="1"></li>
                            <li data-target="#main_visual" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic0.png">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic1.png">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic2.png">
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
                <section id="roster">
                    <div class="container">
                        <div class="row">
                            <?php foreach($player_names as $key => $player): ?>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="<?= $base_url ?>img/<?= $player[1] ?>/top.<?= $player[6] ?>" alt="" id="player-img" class="img-fluid"  onerror="this.src='<?= $base_url ?>img/no_image.png'">
                                        <div class="card-body d-flex justify-content-between">
                                            <h4 class="card-title"><?= $player[0] ?></h4>
                                            <button type="button" class="player_detail_btn btn btn-primary" value="<?= $key ?>">詳しく見る</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal fade" id="player_detail" tabindex="-1"role="dialog" aria-labelledby="label1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="font-weight-bold mr-3">#<span id="number"></span></h3>
                            <h3 class="modal-title" id="name"><small id="name-eng" class="ml-3"></small></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="" alt="" id="modal-player-img" class="img-thumbnail" onerror="this.src='<?= $base_url ?>img/no_image.png'">
                                </div>
                                <div class="col-md-8 pt-4">
                                    <div class="w-100">
                                        <h5>ポジション:<span id="position" class="ml-3"></span></h5>
                                    </div>
                                    <div id="desc" class="pl-3">
                                    </dvi>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>