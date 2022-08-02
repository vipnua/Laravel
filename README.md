# Laravel
Học laravel cơ bản

php artisan : commands câu lệnh ;

tạo user: 
php artisan migrate : tạo bảng user trong database :

chạy môi trường ảo artisan tinker: 

chạy function sẵn trên laravel : echo bcrypt ('mật khẩu') $ nghĩa là ta đang tạo 1 cái mật khẩu rồi mã hóa nó ra base64 luôn 
ok rồi ta đặt cái mật khẩu đã được mã hóa vào db

=)

OK ta đã có mk tài khoản. bây giờ ta sẽ làm giao diện (có thể dùng bosstrap làm giao diện nhé);
tiếp theo thì làm đăng nhập
 ; Bước 1 ta phải tạo Controller ; app>Http>Controllers>controller.php
	- Ok rồi: tiếp theo thì tạo file controller =)) tạo ko nên tạo bth. laravel đã có mấy cái terminal chạy cho ta 	rồi . quên thì php artisan ra ; ở đây thì ta dùng make:controller + name
	Ok man; tạo thì phải tạo đằng name ý nó tính cả file luôn nhé bro : make:controller Admin\Users\LoginControler 	-mc  oh. ở đây -mc nghĩa là model nhé ;
	lúc này nó sẽ tạo cho ta luôn 1 cái model 
	wth : ở đây ta lại phải chạy lại câu lệnh lúc đầu 
