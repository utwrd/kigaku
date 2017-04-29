@written by umezawa 2016-12-06 

-------------------------
upload方法
-------------------------
１．ssh鍵認証を使えるので、sftpコマンドでファイル転送できる。(推奨)
PCに~/.ssh/id_rsaをダウンロードする。
sftp unpowww@post-3.cc.uec.ac.jp　
でログイン。
パスフレーズはftpパスワードと同一。
/html/ 内にウェブページ構造を置く。
putコマンドでアップロード。getコマンドでダウンロード。
sftpで検索すればでてくる。

２．ftpでファイル転送(セキュリティ面が弱い,学内有線ネットワークアクセスのみ)
ftp post-3.cc.uec.ac.jp
でログイン。
user: unpowww
password: xxxx
アップロードコマンドはftpで検索。


-------------------------
bootstrapでできること
-------------------------
bootstrapはtwitter社が開発した、css/javascriptフレームワークである。
つまり、デザイナーが逐一css/jsをこねくり回さずとも、bootstrapに指定されたhtml構造でクラス名をつければ自動的に
デザインが適用されるというわけである。

特徴として、

1.レスポンシブなページの作成

2.modalBox

3.アコーディオンパネル

4.カルーセルパネル

5.ボタン

6.ナビゲーションパネル

を提供してくれる。

bootstrapは、主にブロックにpaddingを設定することでレイアウトを保ちつつ、レスポンシブページを提供しているので、
デザイナーがむやみにmarginを設定すると、思わぬ挙動を起こしかねない。


-------------------------
仕様
-------------------------
各ファイル・フォルダについて、

index.html トップページ

audio.php 音源ダウンロード


以下modal内で表示される。

whatsNew.html 新着情報

schedule.html 年間スケジュール

timeTable.html ライブタイムテーブル


css/ CSSを配置。bootstrap.cssもここ

js/ JavaScriptを配置。 bootstrap.js,jqueryもここ

font/ fontを配置。

audio/ 音源のmp3を配置。


styleはbootstrapを使用。レイアウト面の変更はbootstrapを参照。
style.cssが自前css。
jsはheadタグのscriptタグ内で、タイトルのセンタリング・画面スクロール・アコーディオンの不具合について記述している。

modalで表示するhtmlのcssはそのhtmlのheadタグ内styleタグで記述。

現状のaudio.phpに依存してaudio/のディレクトリ階層は
子にディレクトリ（ライブの日付とその名前、ディレクトリ名はyyyy_mm_name）、
その子にmp3ファイル(ファイル名はnn_name)に統一する。


-------------------------
編集方法
-------------------------

index.htmlの構造は極力いじらない。

phpに詳しい人はaudio.phpのスクリプトを再帰的にディレクトリにアクセスして、
ディレクトリ階層が変わっても対応できるようになれば有難い。

配置構造と名前指定は以下のようにする必要がある。
audio/yyyy_mm_liveName/nn_bandName.mp3


-------------------------
新歓用
-------------------------
新歓期にはHPを差し替える。
最新のindex.htmlをまずローカルに落としてくる。
新歓用のindex.htmlをサーバーに設置。(ローカルでは仮にsinkan_index.htmlとしておき、サーバではindex.htmlとする)
新歓特設ページ仮にsinkan.htmlを設置。

ここで、indexのナビゲーションパネルに新歓の項目を追加することを忘れない。
