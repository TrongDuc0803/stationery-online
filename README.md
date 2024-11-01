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

