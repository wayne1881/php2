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
把滑鼠放在『刪除』之上，可以看到左下角的連結
透過呼叫17.user_delete.php，並且使用GET資料傳遞方式，把id=tony這個參數傳遞過去
sql命令：delete from user where id='tony'
使用$_GET["id"]，擷取上個頁面用GET方法傳過來，變數名稱為id的參數(tony)
