 <?php
 //khi muốn sd $_SESSION , buộc phải sd hàm session_start
 session_start();
 echo "<pre>";
 print_r($_SESSION);
 echo "</pre>";

 // khi muon thao tac vs SESSION tại nơi ko trực tiếp khai báo nó thì sd hàm isset đê chắc chắn $session đó đã tồn tại
 if (isset($_SESSION['age'])){
     echo "Age = :" . $_SESSION['age'];
 }