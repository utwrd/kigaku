<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="uec,UEC,電通,電通大,軽音,バンド,音楽,器楽,器楽部,ギター,ドラム,ベース,調布,unpoco,楽器,音楽,ロック,メタル,アニソン,ニルバーナ,スメルズ,サークル">
        <meta name="description" content="電気通信大学 器楽部">
        <meta name="author" content="ume">

        <title>電気通信大学 器楽部</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
         $(function() {
             $('#scrollBtn, #scrollImg').click(function() {
                 $("html,body").animate({scrollTop:0});
                 return false;
             });
             $('.panel-collapse').collapse('hide');
             $(":radio[name='audio']").change(function(){$("audio").width($(this).attr("id"))});
         });
        </script>
    </head>
    <body>
        <header>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">器楽部TOP</a>
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <ul class="nav navbar-nav">
                            <li><a href="#whatsNewModal" data-toggle="modal">NEW</a></li>
                            <li><a href="#sheduleModal" data-toggle="modal">SCHEDULE</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LIVE<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#liveModal" data-toggle="modal">TIME TABLE</a></li>
                                    <li><a href="audio.php">音源</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LINK<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://www.uec-keion.club.uec.ac.jp/" target="_blank">軽音学部</a></li>
                                    <li><a href="http://www.folksong.club.uec.ac.jp/" target="_blank">フォークソング部</a></li>
                                    <li><a href="http://www.lsd.club.uec.ac.jp/" target="_blank">シンセデザイン研究部</a></li>
                                    <li><a href="http://www.studio-nido.com/" target="_blank">Studio Nido</a></li>
                                    <li><a href="http://sunmusicstudio.com/" target="_blank">サン・ミュージックスタジオ</a></li>
                                    <li><a href="https://twitter.com/shokujinjp" target="_blank">食神　餃子王</a></li>
                                    <li><a href="http://www.uec.ac.jp/" target="_blank">電気通信大学</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONTACT<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="https://twitter.com/uec_unpocoloco" target="_blank">Twitter</a></li>
                                    <li><a href="mailto:aiuk.kigaku@gmail.com">Gmail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container" id="body">
            <!-- main article -->
            <article>
                <div class="row">
                    <div class="col-lg-12" id="audioContent">
                      <h3>過去のLIVE音源</h3>
                      <p>ストリーミング再生、左アイコンクリックでダウンロードが可能です。</p>
                      <p>
                        <span>↓↓オーディオバーのサイズの変更が可能です。↓↓</span><br />
                        <input type="radio" name="audio" id="20%" /><label for="20%">20%</label>
                        <input type="radio" name="audio" id="50%" /><label for="50%">50%</label>
                        <input type="radio" name="audio" id="70%" /><label for="70%">70%</label>
                        <input type="radio" name="audio" id="100%" /><label for="100%">100%</label>
                      </p>
                        <ul class="panel-group" id="accordion">
                                      <!-- ライブひとつにつきアコーディオンパネルリスト作成 phpでファイルリスト化 -->
                                      <?php
                                         $audDir = 'audio';
                                         $dir = scandir($audDir, 1);
                                         foreach($dir as $dirE) {
                                             if($dirE != '.' && $dirE != '..') {
                                                 echo '<li class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#'.$dirE.'">'.$dirE.'</a></h4></div><div class="panel-collapse collaspe in" id="'.$dirE.'"><ul class="panel-body">';
                                                 $file = scandir($audDir.'/'.$dirE);
                                                 foreach($file as $fileE) {
                                                     if(substr($fileE, strrpos($fileE, '.') + 1) == 'mp3') {
                                                         echo '<li><span>'.$fileE.'</span>&nbsp;';
                                                         $path = $audDir.'/'.$dirE.'/'.$fileE;
                                                         echo '<a href="'.$path.'" download><img src="img/download.png" alt="download"></a>&nbsp;';
                                                         echo '<audio src="'.$path.'" controls preload="none"></audio>&nbsp;';
                                                         echo '</li>';
                                                     }
                                                 }
                                                 echo '</ul></div>';
                                                 echo '</li>';
                                             }
                                         }
                                      ?>
                        </ul>
                    </div>
                </div>
            </article>
            <!-- begin modal -->
            <section>
                <div class="modal fade" id="whatsNewModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content" id="whatsNew">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
                                </button>
                                <h2 id="modal-title">WHAT'S NEW</h2>
                            </div>
                            <div class="modal-body">
                                <iframe src="whatsNew.html"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="modal fade" id="sheduleModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content" id="schedule">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
                                </button>
                                <h2 class="modal-header">SCHEDULE</h2>
                            </div>
                            <div class="modal-body">
                                <iframe src="schedule.html"></iframe>
                            </div>
                            <div class="modal-footer">
                                <p class="small text-center">※あくまでも暫定的な日程で、今後変更の可能性があることをご了承ください</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content" id="live">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
                                </button>
                                <h2 class="modal-title">TIME TABLE</h2>
                            </div>
                            <div class="modal-body">
                                <iframe src="timeTable.html"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end modal -->
            <div id="scrollImg">
                <img src="img/scroll.png" />
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center copyright small">
                        © 2016 UEC-Kigakubu
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
