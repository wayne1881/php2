<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
修改使用者跟刪除使用者一樣，可透過GET方式，傳送使用者id給php程式
修改使用者，需要建立與新增使用者相同的介面，讓使用者更新資訊。
一般來說，帳號資訊不許更改
使用$_GET["id"]，擷取上個頁面用GET方法傳過來，變數名稱為id的參數(tony)
sql命令：update user set pwd='tony123' where id='tony'
