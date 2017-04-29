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
仕様
-------------------------
styleはbootstrapを使用。レイアウト面の変更はbootstrapを参照。
style.cssが自前css。
jsはscriptタグ内で、タイトルのセンタリング・画面スクロール・アコーディオンの不具合の暫定策について。
modalで表示するhtml(以下)はインラインstyleタグで記述。
whatsNew.html,timeTable.htmlはindex.html中のiframeで表示。（cssも各自インライン）
現状のaudio.phpに依存してaudio/のディレクトリ階層は
子にディレクトリ（ライブの日付とその名前、ディレクトリ名はyyyy_mm_name）、
その子にmp3ファイル(ファイル名はnn_name)に統一する。

-------------------------
編集方法
-------------------------
whatsNew/timeTableの編集は各々個別htmlよりマークアップ。
index.htmlは極力いじらない。※html構造自体をいじる場合のみ
phpに詳しい人はaudio.phpのスクリプトを再帰的にディレクトリにアクセスして、
ディレクトリ階層が変わっても対応できるようになれば有難い。

audio/--yyyy_mm_liveName/--nn_bandName.mp3
      
