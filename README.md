# coachtechフリマ
フリマアプリ

■環境構築
Dockerビルド<br>
1.git clone git@github.com:yurie-n/frema-system.git<br>
2.docker-compose up -d-build<br>
*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。<br>

Laravel環境構築<br>
1.docker-compose exec php bash<br>
2.composer install<br>
3.enc.exampleファイルから.envを作成し、環境変数を変更<br>
4.php artisan migrate<br>
5.php artisan db:seed<br>

■テストアカウント<br>
・testuser1<br>
  email：user1@attetest.com<br>
  PW：11111111<br>

■使用技術<br>
・PHP 8.0<br>
・Laravel 10.0<br>

※時間が足りず、ログイン画面と商品一覧画面のみの実装です。
　申し訳ございません。
