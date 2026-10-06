# ProQuiz

## 概要

ProQuizは、プログラミングやITに関する知識をクイズ形式で学習できるWebアプリです。

Python・PHP・SQL・Git・Dockerの5カテゴリに対応しており、通常クイズ、ランダムクイズ、総合テストから学習方法を選択できます。

ユーザー登録・ログイン機能やクイズ結果の保存、マイページでの学習履歴確認にも対応しています。

## 主な機能

* ユーザー登録・ログイン・ログアウト
* Python・PHP・SQL・Git・Dockerの5カテゴリ
* 通常クイズ
* ランダムクイズ
* 総合テスト（ランダム10問）
* 3択形式のクイズ
* 回答後の解説表示
* クイズ結果の保存
* 回答履歴の保存
* マイページでのクイズ結果・学習履歴の確認
* カテゴリ別のベストスコア表示

## 使用技術

| 分類      | 技術                                |
| ------- | --------------------------------- |
| フロントエンド | React / Vite                      |
| バックエンド  | Laravel / PHP                     |
| データベース  | MySQL                             |
| 認証      | Laravel Fortify / Laravel Sanctum |
| CI      | GitHub Actions                    |
| 開発環境    | Docker / XAMPP                    |
| バージョン管理 | Git / GitHub                      |

## 画面

### クイズ開始画面

![クイズ開始画面](Screenshots/home.png)

### クイズ画面

![クイズ画面](Screenshots/quiz.png)

### マイページ

![マイページ](Screenshots/mypage.png)

## 工夫した点

* ユーザーごとにクイズ結果・回答履歴を保存可能に
* 学習履歴を確認できるようにマイページを実装
* カテゴリ別ベストスコアを表示
* ReactとLaravelを分けてAPIで通信
* Laravel Fortify / Sanctumを使用した認証
* クイズ問題・選択肢をSeederで管理
* 楽しく勉強できるようにレトロポップをイメージしたデザインに
* Dockerを利用してバックエンドの実行環境を構築

## テスト

各カテゴリ・各クイズモードを実際に操作し、クイズの出題・回答・結果保存・マイページへの反映などの動作を確認しました。

また、GitHubからリポジトリを新しくcloneし、Dockerを使用した環境でもバックエンドAPIとクイズが正常に動作することを確認しています。

## セットアップ

### 必要な環境

* PHP 8.5.7
* Composer 2.10.1
* Laravel 13.17.0
* Node.js 24.18.0
* npm 11.16.0
* MySQL
* Docker Desktop

### 1. リポジトリを取得

```bash
git clone https://github.com/rjypojp/ProQuiz.git

cd ProQuiz
```

### 2. MySQLの準備

MySQLを起動し、`proquiz` データベースを作成します。

XAMPPを使用する場合は、XAMPPのMySQLを起動してください。

データベース名：

```text
proquiz
```

### 3. Backendのセットアップ

BackendのDockerイメージを作成します。

```bash
cd backend

docker build -t proquiz-backend .
```

Dockerコンテナを起動します。

```bash
docker run -d -p 8080:80 --name proquiz-backend proquiz-backend
```

### 4. Laravelの環境設定

コンテナ内で `.env` を作成します。

```bash
docker exec -it proquiz-backend sh -c "cp .env.example .env"
```

アプリケーションキーを生成します。

```bash
docker exec -it proquiz-backend php artisan key:generate
```

`.env` のデータベース設定を以下のようにします。

```env
DB_CONNECTION=mysql
DB_HOST=host.docker.internal
DB_PORT=3306
DB_DATABASE=proquiz
DB_USERNAME=root
DB_PASSWORD=
```

`host.docker.internal` は、DockerコンテナからホストOS上のMySQLへ接続するために使用します。

### 5. データベースのセットアップ

マイグレーションとSeederを実行します。

```bash
docker exec -
```
