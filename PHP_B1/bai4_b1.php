<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>bai 4-PHP</title>
</head>
<body>
<?php
$name = 'Nguyễn Viết Mạnh';
$age = 29;
$date = '05/01/1990';
$gender = 'Nam';
$address = 'Sơn Đồng-Hoài Đức-Hà Nội';
echo"<h2>Thông tin căn bản về bạn</h2>";
echo "<table border=1 cellspacing=0 cellpading=0>
		<tr>
			<th>Họ tên</th>
			<th>Tuổi</th>
			<th>Ngày sinh</th>
			<th>Gioi tính</th>
			<th>Quê quán</th>
		</tr>
		<tr>
			<td>$name</td>
			<td>$age</td>
			<td>$date</td>
			<td>$gender</td>
			<td>$address</td>
		</tr>
		</table>";
?>

</body>
</html>