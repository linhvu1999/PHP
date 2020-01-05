1/tạo bảng trực tiếp
CREATE DATABASE db_ngay19;
USE db_ngay19;
CREATE TABLE `employees` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`description` text COLLATE utf8_unicode_ci,
`gender` tinyint(4) DEFAULT NULL,
`salary` int(10) DEFAULT NULL,
`birthday` date DEFAULT NULL,
`created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

INSERT INTO `employees` VALUES ('1', 'manh', 'des manh', '1', '20000', '2019-11-12', '2019-11-03 22:41:49');
INSERT INTO `employees` VALUES ('2', 'nvmanh', 'des nvmanh', '0', '10000', '2018-12-12', '2019-11-03 22:42:12');


#Xóa
#DROP DATABASE demo_db;
#Chọn CSDL
USE nhanvien;
#Tạo bảng -table tên students có :id, name, address, birthday, class,
CREATE TABLE students(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
address VARCHAR(255) DEFAULT NULL,
birthday DATETIME DEFAULT NULL,
class VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME DEFAULT NULL
);

USE nhanvien;
#Tạo bảng categories
CREATE TABLE configs(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
status TINYINT(2) DEFAULT 0,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
USE nhanvien;
# Lấy tất cả danh sách categor đang hiện thị trên hệ thống
#SELECT * FROM categories;
# lấy 1 số trg cụ thể
#SELECT id, name FROM categories;

#lấy theo điều kiện
#lấy danh mục có id < 0
#SELECT * FROM categories WHERE id < 0;
#lấy danh mục có tên = Linh
#SELECT * FROM categories WHERE name = 'Linh';
#lấy danh mục giới hạn chỉ lấy 2 dạnh mục đầu tiên
SELECT * FROM categories LIMIT 2;
#lây ra 2 bản ghi bắt đầu từ bản ghi thứ 2
#SELECT * FROM categories LIMIT 2 OFFSET 2;
#lấy ra tất cả thư mục có id < 1
#SELECT * FROM categories WHERE id > 1;
#lấy ra tất cả các danh mục có id > 0 và status >=0
SELECT * FROM categories WHERE id > 0 AND status >=0;

#Update luôn phải đi cùng where
#luôn phải chỉ ĐK là update cho bản ghi nào
UPDATE categories SET name = 'New name' , status = 5
WHERE id = 1;
SELECT * FROM configs;

USE nhanvien;
SELECT * FROM configs ORDER BY id DESC;

SELECT * FROM configs ORDER BY status ASC;
#Lấy ra tất cả các danh mục có id > 1 và sắp xếp the chiều giảm dần của ngày tạo
SELECT * FROM configs WHERE id > 1 ORDER BY created_at DESC;

#join bảng
#tạo 1 bẩng tên là products với id, name, category_id, name, price

CREATE TABLE products(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
category_id INT(11) NOT NULL,
name VARCHAR(255) NOT NULL,
price INT(11) DEFAULT NULL
);

#bắt buộc 2 bảng có mối quan hệ vs nhau
#SELECT * FROM products
SELECT
products.*,
configs.name AS configs_name,
configs.status AS configs_status
FROM products
INNER JOIN configs ON products.category_id = configs.id

# Từ khóa IN
#lấy ra all danh mục có id = 1||2||4
SELECT * FROM configs WHERE id = 1 OR id = 2 OR id = 4;
#viết bằng IN
SELECT * FROM configs WHERE id IN(1,2,4);

#Từ khóa BETWEEN
#lấy ra all danh mục có id nằm trong khoảng 1-8
SELECT * FROM configs WHERE id >=1 and id <=8;
#viết bằng between
SELECT * FROM configs WHERE id BETWEEN 1 AND 8;

# Từ khóa IN
#lấy ra all danh mục có id = 1||2||4
SELECT * FROM configs WHERE id = 1 OR id = 2 OR id = 4;
#viết bằng IN
SELECT * FROM configs WHERE id IN(1,2,4);

#Từ khóa BETWEEN
#lấy ra all danh mục có id nằm trong khoảng 1-8
SELECT * FROM configs WHERE id >=1 and id <=8;
#viết bằng between
SELECT * FROM configs WHERE id BETWEEN 1 AND 8;

#hàm count
#lấy số bản ghi có trong configs
SELECT COUNT(id) AS count_id FROM configs;

#hàm MAX
SELECT MAX(status) AS MAX_status FROM configs;
#hàm min
SELECT MIN(status) AS MAX_status FROM configs;
#hàm AVG - tính gt TB
SELECT AVG(status) FROM configs;
#hàm tính tổng
SELECT SUM(status) FROM configs;
#Group by
#tìm số lần x.hiện của trường status trong bảng danh mục
SELECT status,  COUNT(id) AS count_status
FROM configs GROUP BY status;
