**Cài đặt môi trường và project </br>**
<p>
<b>Cài đặt Apache, PHP7, MySQL, Phpmyadmin</b><br>
- Đối với môi trường windows ta chỉ cần tải về và cái đặt gói XAMPP hoặc WAMPP<br>
- Đối với môi trường ta cần cài đủ apache2, php7, mysql và phpmyadmin<br>
</p>

<p>
<b>Cài đặt Composer</b><br>
- Đối với môi trường windows, ta chỉ cần tải file composer.exe về và cài đặt, điều kiện là đã cài đặt php, từ phiên bản 5.3<br>
- Đối với môi trường linux cần cài đặt từ package trên terminal, kiểm tra bằng cách vào terminal và gõ: composer, nếu có info hiện ra là đã thành công.<br>
</p>

<p>
<b>Cài đặt Npm</b><br>
- Tương tự như cài đặt composer, với môi trường windows ta cần tải về và cài đặt từ file .exe, còn với môi trường linux, ta cần update và cài đặt từ các package.
<br>
- Để kiểm trả npm đã được cài đặt thành công hay chưa, ta gõ vào terminal dòng lệnh: npm -v, nếu kết quả trả về là version của npm thì ta đã cài đặt thành công.<br>
</p>

<p>
<b>Cài đặt Git</b><br>
- Với môi trường windows, ta cần tải về và cài đặt git bash<br>
- Với môi trường linux ta chỉ cần chạy dòng lệnh sudo apt-get install git<br>
</p>

<p>
<b>Clone project từ github.com</b><br>
- Link clone project từ github: https://github.com/phongtmitbka/IT_tutorial.git<br>
- Tạo file .env và copy nội dung từ .env.example<br>
</p>

<p>
<b>Build vendor</b><br>
- Từ terminal, ta cd đến thư mục chứa project<br>
- Chạy lệnh composer install<br>
- Chạy lệnh composer install<br>
- Trường hợp xảy ra lỗi phiên bản, ta chạy lại bằng lệnh composer update --no-scripts<br>
</p>

<p>
<b>Build node_modules </b><br>
- Chạy lệnh npm install<br>
- Trường hợp xảy ra lỗi phiên bản, ta xóa node_modules đi và  chạy lại bằng lệnh npm install  --no-optional<br>
</p>

<p>
<b>Khởi tạo database</b><br>
- Vào địa chỉ localhost/phpmyadmin, tạo database có tên it_tutorials (trùng với tên database trong file .env)<br>
- Chạy lệnh php artisan key:generate để tạo key project trên .env<br>
- Chạy php artisan serve để chạy project trên cổng mặc định 8000, muốn thay đổi port thì chạy lệnh: php artisan serve --port=8888<br>
- Chạy npm run watch để biên dịch các file .scss thành .css.<br>
</p>

<p>
<b>Chạy thử</b><br>
- Vào địa chỉ localhost:8000<br>
</p>