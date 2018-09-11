<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
<style>
           body{
            margin: 0;
            padding: 0;
            text-align: center;
            width: 100%;
            height: 100%;
            background-color: rgba(100,30,200,0.5);
           }
            p.username{
                  margin-top: 80px;

                  font-size: 30px;
                  color:red;
            }
            p.password{
                  font-size: 30px;
                  color:green;
            }
            div.bd{

            }
            div.bd form{}
            div.bd form p{}
            div.bd form input[type="text"]{width:400px; height: 30px; line-height: 30; color:yellowgreen; border-radius:15px; border:2px solid red; background-color: rgba(100,30,200,0.5);font-size:24px;}
            div.bd form input[type="password"]{width:350px; height: 30px; line-height: 30; color:yellowgreen; border-radius:15px;border: 2px solid green; background-color: rgba(100,30,200,0.5);font-size:24px;}
            div.bd form input[type="submit"]{ display: inline-block; width: 150px; height: 30px; background-color: rgba(200,100,10,0.5);margin-left: -400px;margin-top: 100px;}

            div.bd form a{   
                              left: 374px;
                              position: relative;
                              /* margin-right: -21px; */
                              display: inline-block;
                              font-size: 19px;
                              text-decoration: none; }
 </style>
      <title>Document</title>
</head>
<body>
      <div class="Welcome"><h1 style="margin-top: 100px;">亲爱的游客，欢迎您来到青春游，请登录或注册</h1></div>
        <div class="bd">
            <form action="logincheck.php" method="post">  
               <p class="username">用户名</p><input type="text" name="username" />   
               <p class="password"> 密码：</p><input type="password" name="password" />  
               <br />  
               <input type="submit" name="submit" value="登陆" />             
               <a href="register.php">注册</a>  
           </form>  
        </div>
     
       
      
</body>
</html>
      