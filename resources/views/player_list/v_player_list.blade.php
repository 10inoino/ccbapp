<?php
    ini_set("memory_limit","1024M");

    $player_names = [
    	['伊星 洵一郎','iboshi','Junichiro Iboshi','#3','SG/SF','社会人1年目、しがく古谷さん担当。キャリアコンサルティングバスケットボール部のキャプテン。大学では武蔵野大学のバスケットボール部のキャプテンとしても活躍。持ち前のスピードとジャンプシュートでチームを勝利に導く。'],
        ['岩村 岳','gaku','Gaku Iwamura','#15','SF/PF','社会人1年目。キャリアコンサルティングSP事業部社員。ボディバランスが高く、どんな体勢からでもシュートを狙う事ができる。また、ロングシュートも得意とする。チームメイトの演出したチャンスを着実に決めてくるフィニッシャー。'],
        ['山田 航希','yamada','Kouki Yamada','#12','PG','大学4年生。NEXUS研修生。高校時代は名門校、土浦日大高校のシックスマンとして活躍。八村塁に勝った男。卓越したボールハンドリングと、しなやかなドライブ、視野の広さから生まれるアシストを武器する。自分で点数を取れるし、仲間を活かすこともできる両刀ガード。'],
        ['藤田 竜輔','ryu','Ryusuke Fujita','#20','PF/C','大学4年生。NEXUS古谷主任担当。キャリアバスケ部のイケメン枠。利き手の右手を骨折するという選手生命の危機を、シュートハンドを左手に切り替えることで乗り越えた男。助走ありだったら軽々とリングに触れることができ、ダンクシュートが見れる日も近いのかもしれない。'],
        ['内山 智哉','tomo','Tomoya Uchiyama','#22','SF','大学2年生。NEXUS柳島さん担当。静岡出身。若さゆえの身体能力により、ドライブやシュートを仕掛ける事もできれば、身長の高い相手選手とリバウンドで競り合うこともできる。チームに足りない要素を補いながら動くことができるプレイヤー。'],
        ['新山 航希','niiyama','Kouki Niiyama','#23','SF','大学2年生。プレスタ小星主任担当。名門校土浦日大高校出身で、初めてメンバー入りした試合からチームの得点王となった絶対的エース。ファンも多い。オフェンス、ディフェンスともに高いステータスを持つが、特にミドルシュートの精度が高く、得点を量産することができる。'],
        ['佐藤 丈太郎','jo','Jotaro Sato','#18','C','社会人2年目。しがく山本主任担当。ペルーと日本のハーフで、ミドルネームはファビオ。190cmの身長を活かしたポストアップの他、ミドルレンジからシュート、ドライブと多彩なオフェンススキルを持つ。日本の3×3のリーグである、SOMECITYにも出場経験あり。サムネイルの写真は加工している訳では無いらしい（本人談）。彼女募集中。'],
        ['宮本 康平','miyamoto','Kohei Miyamoto','#24','SG','大学４年生。プレスタ渋谷さん担当。土浦日大高校出身。今現在通う東海大学にはバスケ推薦で入学したという実力者でありながら、東海大学バスケ部のコーチもこなすというマルチな才能を持つ。バスケIQが高く、常に選択肢を持ちながらプレーできる。'],
        ['田中 幸之介','tana','Konosuke Tanaka','#25','PG/SG','21歳。2019年5月まで東京サンレーヴスでプレーをしていた。170cmという身長ながら、305cmのリングにぶら下がることができる驚異的な跳躍力を持つ。5on5は勿論のこと、3×3でも大活躍中で、日本の3×3のプロチームに所属している他、中国のトーナメントでプレーした経験もある。'],
        ['金井 賢治','ken','Kenji Kanai','#1','ALL ROUND','31歳、1人の愛娘を持つ父であり、2019年5月までB3の東京サンレーヴスでプレーをしていた元プロバスケットボール選手。大学時代は関東大学バスケットボールリーグ戦2部でアシスト王を獲得。190cmという長身ならではの力強いポストプレーは勿論のこと、繊細なドリブルや3ポイントシュートも狙うことができ、どこのポジションからでもゴールにアタックできる。'],
        ['山本 純也','yamamoto','Junya Yamamoto','#0','PG/SG','大学2年生。NEXUS柳島さん担当。高校バスケ名門校の土浦日大高校出身。時には落ち着いたPGとしてチームの司令塔となり、時には持ち前のドライブとガッツで果敢にゴールにアタックする。'],
        ['飯塚 春太','zuka','Haruta Iizuka','#16','C','社会人1年目。しがく古谷さん担当。エンジニア。高い身長とフィジカルを武器とし、リバウンド、ポストアップ、ブロックとゴール下で活躍するチームの大黒柱。ビールが好き。'],
        ['山田 修也','shuya','Shuya Yamada','#17','C','大学4年生。NEXUS豊田さん担当。182cmという長身に加え、ジャンプ力が高く、リバウンドに粘り強く絡むことができる。また、ボディバランスも良く、ゴール下での攻防にも屈しない。キャリアバスケ部の急成長株。'],
        ['藤田 凌平','ryohei','Ryohei Fujita','#6','PG/SG','大学4年生。長野県出身。ボールハンドリング、シューティング能力、フィジカルなどそれぞれのステータスにおいてバランスの良い能力値を持つ。特にディフェンス能力はチーム内でも群を抜いて高い。敵に回すと厄介なタイプ。'],
        ['猪股 光','ino','Hikaru Inomata','#10','SF/PF','社会人1年目。エンジニア。しがく阿部さん担当。キャリアバスケ部では、選手として活動する傍ら、日本公認審判員として審判活動も行う。恵まれた体格を活かして、スクリーンプレーを得意とする。'],
        ['佐藤 悠希','yuki','Yuki Sato','#14','C','社会人3年目。しがく岩村さん担当。学校の先生。決して派手なプレーをするわけではないが、粘り強いリバウンドと安定したミドルシュートでチームに貢献し続ける仕事人。玄人好みのロールプレイヤー。']
    ];

    $coaches = [
    	['高松 僚','takamatsu','Ryo Takamatsu','','HEAD COACH','キャリアコンサルティングSP事業部部長。キャリアコンサルティングバスケットボール部の監督。自身も元プレイヤーであり、現役当時は170cm台の身長でリングが掴めた程の抜群の身体能力の持ち主だった。現役を退いたその後は、日本公認のコーチライセンスを取得し、キャリアバスケ部の監督に従事。現役当時の経験と豊富な知識により、チームを上に押し上げるキャリアバスケ部の軍師。']
    ];

    $managers = [
    	['小星 理恵','koboshi','Rie Koboshi','','MANAGER','キャリアコンサルティング社員。プレスタ学生担当。日本公認のコーチライセンス保持者。新婚。学生時代はバスケットボール部に所属しており、エースプレイヤーだったらしく、引退した今でもプレーをするとエースプレイヤーの片鱗を見せる。キャリアバスケ部には発足当時から関わり、スコアシートの記入やチームの事務仕事などを担って頂いている。'],
    	['渡邊 育子','watanabe','Ikuko Watanabe','','MANAGER','キャリアコンサルティング社員。プレスタ学生担当。バスケットボールは未経験だが、長きに渡りキャリアバスケ部のマネージャーとして動いてもらっている。試合の時にベンチワークや写真撮影、スコアシートの補佐など、1日の間に様々な仕事をやって頂いている。'],
    	['拝野 恵里','haino','Rie Koboshi','','MANAGER','社会人1年目。しがく金子課長代理担当。バスケットボールは未経験ながら、ルールなどの知識を貪欲に吸収し、今では日本公認の審判ライセンスを持つ。チームでは動画の撮影、ベンチワーク、試合や練習のSNSへのアップロードなどをやって頂いている。また、キャリアバスケ部以外にもしがくの活動や、万祭の神話劇の実行委員や講師養成コースなど積極的に活動している。'],
    	['加藤 友里','kato','Yuri Kato','','MANAGER','社会人1年目。しがく金子課長代理担当。今現在も現役のプレイヤーとして活動し、女子キャリアバスケ部ではキャプテンを務める。男子の試合や練習の際にはマネージャーとして入って頂き、拝野と共にベンチワークや動画の撮影などをやってもらっている。また、バスケットボールに関わる仕事に従事しており、国内のバスケットボールに詳しい。']
    ];

    $base_url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    //$base_url = "http://localhost/ccbapp/public/";

    $player_array_js = json_encode($player_names);
    $coach_array_js = json_encode($coaches);
    $manager_array_js = json_encode($managers);
?>

<!doctype html>
<html lang="ja">
    <head>
        <mata charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/custom_style.css">
        <title>CCB Player List</title>
        <style>
        .logo-area{
            width: 100%;
            height: auto;
            background-image: url(<?= $base_url ?>img/logo_area_background.JPG);
            background-size: cover;
            background-position:0% 50%;
        }

        .logo-area::after {
            content: '';
            background-color: rgba(255,255,255,0.5);
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
        }
        </style>
    </head>
    <body>
        <script src="<?= $base_url ?>js/jquery-3.4.1.min.js"></script>
        <script src="<?= $base_url ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= $base_url ?>js/player_list.js"></script>
        <script>
            $(document).ready( function(){
                var players = <?php echo $player_array_js ?>;
                var coaches = <?php echo $coach_array_js ?>;
                var managers = <?php echo $manager_array_js ?>;
                var base_url_js = "<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>";

                $('.player_detail_btn').on('click',function(){
                    var btn_val = $(this).val();
                    $("#number").text(players[btn_val][3]);
                    $("#name").text(players[btn_val][0]);
                    $("#name-eng").text(players[btn_val][2]);
                    $("#position").text(players[btn_val][4]);
                    $("#desc").text(players[btn_val][5]);
                    $('#modal-player-img').attr('src', base_url_js + 'img/' + players[btn_val][1] + '/top.jpg');
                    $("#player_detail").modal('show');
                });

                $('.coach_detail_btn').on('click',function(){
                    var btn_val = $(this).val();
                    $("#number").text(coaches[btn_val][3]);
                    $("#name").text(coaches[btn_val][0]);
                    $("#name-eng").text(coaches[btn_val][2]);
                    $("#position").text(coaches[btn_val][4]);
                    $("#desc").text(coaches[btn_val][5]);
                    $('#modal-player-img').attr('src', base_url_js + 'img/' + coaches[btn_val][1] + '/top.jpg');
                    $("#player_detail").modal('show');
                });

                $('.manager_detail_btn').on('click',function(){
                    var btn_val = $(this).val();
                    $("#number").text(managers[btn_val][3]);
                    $("#name").text(managers[btn_val][0]);
                    $("#name-eng").text(managers[btn_val][2]);
                    $("#position").text(managers[btn_val][4]);
                    $("#desc").text(managers[btn_val][5]);
                    $('#modal-player-img').attr('src', base_url_js + 'img/' + managers[btn_val][1] + '/top.jpg');
                    $("#player_detail").modal('show');
                });

                $('#ccb_movie_btn').on('click',function(){
                    if ($("#movie_pass").val() == $("#ccb_movie_pass").val()) {
                        $("#movie_pass_danger").addClass('d-none');
                        $("#movie_pass_success").removeClass('d-none');
                        $("#movie-link-area").removeClass('d-none');
                    } else {
                        $("#movie_pass_danger").removeClass('d-none');
                        $("#movie_pass_success").addClass('d-none');
                        $("#movie-link-area").addClass('d-none');
                    }
                });
            });
        </script>

        <header class="m-0 logo-area">
            <div class="container text-center py-4">
                <h1 class="text-center z-1"><a href="#"><img class="w-25" src="<?= $base_url ?>img/ccblogo.PNG"></a></h1>
            </div>
        </header>
        <!-- ナビゲーションバー -->
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="playerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Roster
                            </a>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="playerDropdown">
                                <?php foreach($player_names as $key => $player): ?>
                                    <a class="dropdown-item" href="#<?= $player[1] ?>"><?= $player[2] ?></a>
                                <?php endforeach ?>                      
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="coachDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Coach
                            </a>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="coachDropdown">
                                <?php foreach($coaches as $key => $player): ?>
                                    <a class="dropdown-item" href="#<?= $player[1] ?>"><?= $player[2] ?></a>
                                <?php endforeach ?>                      
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="managerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manager
                            </a>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="managerDropdown">
                                <?php foreach($managers as $key => $player): ?>
                                    <a class="dropdown-item" href="#<?= $player[1] ?>"><?= $player[2] ?></a>
                                <?php endforeach ?>                      
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#position_desc">Position Description</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <!-- カルーセル -->
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
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic0.PNG">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic1.PNG">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?= $base_url ?>img/carousel/pic2.PNG">
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
            <!-- 選手 -->
            <div class="pl-3 py-1 mx-5 bg-secondary"><span class="text-white h3">Roster</span><span class="ml-3 h6 text-white">登録選手</span></div>
            <div class="py-4 bg-light">
                <section id="roster">
                    <div class="container">
                        <div class="row">
                            <?php foreach($player_names as $key => $player): ?>
                                <div class="col-md-4 card-area" id="<?= $player[1] ?>">
                                    <div class="card mb-3">
                                        <img src="<?= $base_url ?>img/<?= $player[1] ?>/top.jpg" alt="" id="player-img" class="img-fluid"  onerror="this.src='<?= $base_url ?>img/no_image.png'">
                                        <span class="card-body d-flex justify-content-between">
                                            <h4 class="card-title"><?= $player[0] ?></h4>
                                            <button type="button" class="player_detail_btn btn btn-primary" value="<?= $key ?>" style="cursor: pointer;">詳しく見る</button>
                                        </span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </section>
            </div>
            <!-- 監督 -->
            <div class="pl-3 py-1 mx-5 bg-secondary"><span class="text-white h3">Head Coach</span><span class="ml-3 h6 text-white">監督</span></div>
            <div class="py-4 bg-light">
                <section id="coaches">
                    <div class="container">
                        <div class="row">
                            <?php foreach($coaches as $key => $player): ?>
                                <div class="col-md-4 card-area" id="<?= $player[1] ?>">
                                    <div class="card mb-3">
                                        <img src="<?= $base_url ?>img/<?= $player[1] ?>/top.jpg" alt="" id="player-img" class="img-fluid"  onerror="this.src='<?= $base_url ?>img/no_image.png'">
                                        <div class="card-body d-flex justify-content-between">
                                            <h4 class="card-title"><?= $player[0] ?></h4>
                                            <button type="button" class="coach_detail_btn btn btn-primary" value="<?= $key ?>" style="cursor: pointer;">詳しく見る</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </section>
            </div>
            <!-- マネージャー -->
            <div class="pl-3 py-1 mx-5 bg-secondary"><span class="text-white h3">Manager</span><span class="ml-3 h6 text-white">マネージャー</span></div>
            <div class="py-4">
                <section id="manager">
                    <div class="container">
                        <div class="row">
                            <?php foreach($managers as $key => $player): ?>
                                <div class="col-md-4 card-area" id="<?= $player[1] ?>">
                                    <div class="card mb-3">
                                        <img src="<?= $base_url ?>img/<?= $player[1] ?>/top.jpg" alt="" id="player-img" class="img-fluid"  onerror="this.src='<?= $base_url ?>img/no_image.png'">
                                        <div class="card-body d-flex justify-content-between">
                                            <h4 class="card-title"><?= $player[0] ?></h4>
                                            <button type="button" class="manager_detail_btn btn btn-primary" value="<?= $key ?>" style="cursor: pointer;">詳しく見る</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ポジション説明 -->
            <section id="position_desc">
                <div class="pl-3 py-1 mx-5 bg-secondary"><span class="text-white h3">Position Description</span><span class="ml-3 h6 text-white">ポジション説明</span></div>
                <div class="py-4 mx-5">
                    <div class="row">
                        <div class="col-md-4 text-center position-desc pb-2">
                            <div class="h4">PG</div><div class="ml-3 h6">Point Guard  ポイントガード</div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-1">
                        </div>
                        <div class="col">
                            チームの司令塔。コート上ではチームを統率し、仲間のチャンスを演出する。得点が必要な場合は、自分でドライブし、得点を取りにいくことも必要とされる。常にコートの状況判断ができる広い視野と、正確な判断が下せるバスケIQが要求される。代表的な選手にはスラムダンク 宮城リョータ、千葉ジェッツ 富樫勇樹などがいる。
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center position-desc pb-2">
                            <div class="h4">SG</div><div class="ml-3 h6">Shooting Guard  シューティングガード</div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-1">
                        </div>
                        <div class="col">
                            ロングシュートの精度が良い選手がこのポジションになることが多い。海外では特に確率の良いSGは「スナイパー」と称されることも。仲間の作ったチャンスを着実に決めてくるシュート精度や、いかなる状況でも安定したシュートが打てるメンタリティが必要になる。代表的な選手にはスラムダンク　三井寿、シカゴ・ブルズ　マイケル・ジョーダンなどがいる。
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center position-desc pb-2">
                            <div class="h4">SF</div><div class="ml-3 h6">Small Forward  スモールフォワード</div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-1">
                        </div>
                        <div class="col">
                            点取り屋。正確なロングシュート。1on1で相手を抜き去るハンドリングとスピード。敵とぶつかっても力強くゴールにアタックできるフィジカルなど、多彩なステータスが要求される。チームのエースがこのポジションを担うことが多く、チームの勝敗を大きく分けるポジション。代表的な選手にはスラムダンク　流川楓、メンフィス・ハッスル　渡邊雄太などがいる。
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center position-desc pb-2">
                            <div class="h4">PF</div><div class="ml-3 h6">Power Forward  パワーフォワード</div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-1">
                        </div>
                        <div class="col">
                            ペイントエリア周辺で動くプレイヤー。ディフェンスがいても決めることができるミドルレンジのシュートや、相手に当たり負けしないタフネスが必要なプレイヤー。最近ではプレーの幅が広がり、スリーポイントやドライブを得意とするPFもいる。代表的な選手にはスラムダンク　桜木花道、ワシントン・ウィザーズ　八村塁などがいる。
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center position-desc pb-2">
                            <div class="h4">C</div><div class="ml-3 h6">Center  センター</div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-1">
                        </div>
                        <div class="col">
                            主にゴール下で動くプレイヤー。チーム内で長身のプレイヤーが担うことが多く、ゴール下でのリバウンドや、激しいぶつかり合いの中で、得点することが求められる。ディフェンスにおいてもゴールを守る最後の砦となるため、バスケットボールの攻防において重要なポジション。代表的な選手にはスラムダンク　赤木剛憲、元ロサンゼルス・レイカーズ　シャキール・オニールなどがいる。
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal fade" id="player_detail" tabindex="-1"role="dialog" aria-labelledby="label1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="font-weight-bold mr-3" id="number"></h3>
                            <h3 class="modal-title" id="name"></h3>
                            <h3><small id="name-eng" class="ml-3"></small></h3>
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