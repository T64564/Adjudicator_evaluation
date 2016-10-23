# Adjudicator_evaluation
パーラメンタリーディベートの大会のためのジャッジ評価システムを提供するWebアプリケーション
## Installation
1. .env.exampleを元に.envをrootに作成
2. frameworkをインストール
    ```
    $ composer install  
    ```
3. マイグレーション
    ```
    $ php artisan migrate  
    ```
    もしくは，database/migrations/migration.sqlをDBに対して実行．
    
4. サーバーを起動
    ```
    $ php -S localhost:8000 -t public  
    ```
5. [localhost:8000/feedbacks](localhost:8000/feedbacks)にアクセス

## Authors and Contact
- Daigo Kimura(木村大吾) ([e-mail](a91381@gmail.com))
