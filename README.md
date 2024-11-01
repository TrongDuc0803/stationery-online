<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# Hướng dẫn cài đặt dự án Laravel trên Laragon

## 1. Yêu cầu
- **PHP**: Đảm bảo bạn đã cài đặt PHP phiên bản 7.3 trở lên.
- **Composer**: Cần có Composer để quản lý các gói PHP.
- **Laragon**: Cài đặt Laragon để dễ dàng quản lý các dự án Laravel.
Khởi tạo Git (nếu chưa):

Nếu dự án của bạn chưa được khởi tạo với Git, chạy lệnh:
git init

## 2. Fork Repository
1. Truy cập vào repository của dự án trên GitHub.
2. Nhấn vào nút **Fork** ở góc trên bên phải để tạo một bản sao của repository về tài khoản GitHub của bạn.

## 3. Clone Repository
1. Mở terminal (Git Bash hoặc Command Prompt).
2. Điều hướng đến thư mục mà bạn muốn lưu trữ dự án:
   ```bash
   cd đường/dẫn/đến/thư/mục

Clone repository của bạn về máy:
git clone https://github.com/USERNAME/TEN_REPOSITORY.git
(Thay USERNAME bằng tên người dùng GitHub của bạn và TEN_REPOSITORY bằng tên của repository mà bạn vừa fork.)
4. Cài đặt dự án
    1.Di chuyển vào thư mục dự án:
    cd TEN_REPOSITORY
    2.Chạy lệnh sau để cài đặt các phụ thuộc:
    composer install
    3. Tạo file .env từ file .env.example:
    cp .env.example .env
    4.Thiết lập các thông số trong file .env (bao gồm thông tin kết nối cơ sở dữ liệu, khóa ứng dụng, v.v.).

5. Cài đặt cơ sở dữ liệu
    1.Mở Laragon và khởi động MySQL.
    2.Tạo một cơ sở dữ liệu mới tương ứng với thông tin trong file .env.
    3.Chạy các migrations để tạo bảng trong cơ sở dữ liệu:
    php artisan migrate

6. Chạy ứng dụng
Khởi động máy chủ Laravel:
php artisan serve.

