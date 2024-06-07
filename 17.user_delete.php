<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
sql命令: insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
insert into user(id,pwd) values('tony', 'tony1234')
