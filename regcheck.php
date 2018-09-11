<?php  
    header("Content-Type: text/html; charset=utf-8");
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"]; 
        $psw_confirm = $_POST["confirm"];  
        if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm) 

            { 



                // mysql_connect("localhost","root","root123");   //连接数据库  
                // mysql_select_db("userku");  //选择数据库  
                // mysql_query("set names 'gdk'"); //设定字符集  
                
                
                
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
                mysqli_set_charset($link, 'utf8');
                







                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  


               

                // $result = mysql_query($sql);    //执行SQL语句  
                // $num = mysql_num_rows($result); //统计执行结果影响的行数  
                $result = mysqli_query($link, $sql);
                $num = mysqli_num_rows($result); 
              


                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  


                else    //不存在当前注册用户名称  
                {  
                    $sql = "insert into  user (username,password) values('$_POST[username]','$_POST[password]')";  
                    $res_insert = mysqli_query($link,$sql);  
                    echo "<script>alert('拿到结果集')</script>";

                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('注册成功！');</script>"; 
                        echo "<script>alert('3秒后跳转到登录界面')";
                        sleep(3);
                        header('Location:index.php'); 
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！');;</script>";  
                    }  
                }  




            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  







