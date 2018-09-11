<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            // mysql_connect("localhost","root","root123");  
            // mysql_select_db("userku");  
            // mysqli_query($link,"set names 'utf8'");  
            
            
            
                 @$link = mysqli_connect('localhost', 'root', 'root123');

                // 2. 连接成功与否成功需要判断
                //  如果成功, 那最好, 如果不成功,需要1. 返回错误信息, 2.后面代码不执行
                if(mysqli_connect_errno($link) == 0){
                
                    echo '<script>alert("连接成功");</script>';
                
                }else{
                
                    echo mysqli_connect_error($link);
                
                }
                
                // 3.选择数据库
                // 先选择数据库  use db_name;
                mysqli_select_db($link, 'userku');
                 echo '<script>alert("选库userku");</script>';
                
                
                // 4.设置连接的字符集
                mysqli_set_charset($link, "set names 'utf8'");








            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  

            // $result = mysql_query($sql);  
            // $num = mysql_num_rows($result); 


             $result = mysqli_query($link, $sql);
             $num = mysqli_num_rows($result);


            if($num)  
            {  
                $row = mysqli_fetch_array($result,MYSQLI_NUM);  //将数据以索引方式储存在数组中  
                echo $row[0]; 
                echo "<script>alert('注册成功！');</script>"; 
                echo "<script>alert('3秒后跳转到首页')";
                sleep(3);
                header('Location:index.html');  
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
  
?>  