Project môn thực hành cơ sở dữ liệu IT3290 - lớp 126879
Trường Công Nghệ Thông Tin (SoICT) đại học Bách Khoa Hà Nội (HUST)
Nhóm: Đinh Việt Long - 20194608 (leader), Đỗ Minh Hiếu - 20194558, Phạm Quang Đức - 20194518
Hoàn thành: 24/1/2022
Tên: Ascale Store
Chú thích: Website quản trị cửa hàng và giao diện cửa hàng
-----------------------------------------------

Yêu cầu: cài đặt laravel 8, Xampp
Hướng dẫn thực hiện:
->Chạy Apache và server mySQL 
->Mở command prompt trong thư mục source và chạy server với lệnh php artisan serve
->Mở trang quản trị dữ liệu phpMyAdmin và tạo cơ sở dữ liệu mới tên ascale_store (hoặc kiểm tra trong file .env)
->quay lại command prompt chạy lệnh php artisan migrate để tạo các bảng trong cơ sở dữ liệu
->lưu ý cơ sở dữ liệu ban đầu là trống và bạn cần phải tự import dữ liệu từ đầu
->để quản trị dữ liệu bạn cần truy cập đường dẫn /admin/users/login từ trang web ban đầu
->để login bạn cần tạo tài khoản trong database với mật khẩu được mã hóa bằng hàm bcrypt(*)
(*)hướng dẫn tạo tài khoản login: bạn tạo trong cơ sở dữ liệu mySQL (phpMyAdmin) mật khẩu cần được mã hóa bằng hàm bcrypt bằng cách sau
Mở commad prompt trong thư mục source và nhập php artisan tinker, tiếp theo nhập echo bcrypt('<mật khẩu của bạn>')
copy chuỗi kĩ tự đã được mã hóa và nhập vào cơ sở dữ liệu

Tiếp theo bạn sử dụng tài khoản đã tạo vào truy cập được trang quản trị dữ liệu
