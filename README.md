概要説明
勤怠管理システムの作成

作成した目的
コーディング技術の向上

アプリケーションURL
https://github.com/aruma-joishi/laravel-atte

機能一覧
打刻機能、会員登録/ログイン機能、日付別勤怠状況確認機能


使用技術（実行環境）
PHP 8.1.2
Laravel 8.83.27
MySQL  8.0.26


テーブル設計
<img width="339" alt="image" src="https://github.com/aruma-joishi/laravel-atte/assets/144969756/5170b703-240b-45b5-8be3-9d33c39d3f22">


ER図
<img width="457" alt="image" src="https://github.com/aruma-joishi/laravel-atte/assets/144969756/62b6f2e3-6fb5-43f5-b1ff-9e34beb2b396">


環境構築
1.git clone git@github.com:aruma-joishi/laravel-atte.git
2.docker-compose up -d --build
3.docker-compose exec php bash
4.composer install
5.env.exampleファイルから.envを作成し、環境変数を変更
6.php artisan key:generate
7.php artisan migrate


使用技術
  PHP 7.4.9
  Laravel 8.83.8
  MySQL  8.0.26

URL
  開発環境: http://localhost
  phpMyAdmin: http://localhost:8080
