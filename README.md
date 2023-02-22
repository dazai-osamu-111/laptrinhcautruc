Structured-Programming_SP-08
Quick Start
Version 1.2 for round 2

To run this project locally
Prerequisites
Make sure you've installed docker
You must run commands in Linux or Powershell environment on Windows
ATM card information
Ngân hàng: NCB
Số thẻ: 9704198526191432198
Tên chủ thẻ:NGUYEN VAN A
Ngày phát hành:07/15
Mật khẩu OTP:123456
Copy .env of app
$ cp .env.example .env
Config DB in .env
APP_URL=https://localhost/
...
DB_CONNECTION=mysql
DB_HOST=sp-db
DB_PORT=3306
DB_DATABASE=sp_database
DB_USERNAME=root
DB_PASSWORD=123456
Build docker container
After Docker runs, the process takes about 5p to complete the processes. You can watch your process in server's log terminal by click View details at sp08-server.

$ docker-compose up -d --build
Migrate and seed data
$ docker-compose exec sp08-server ash

[/var/www/html]

$ php artisan storage:link

$ php artisan key:generate

$ php artisan migrate

$ php artisan db:seed

Go ahead and play with the app and the code. As you make code changes, the app will automatically reload.
