<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>XSS学习-发送cookie中的token</title>
    </head>
<body>
    <h2>XSS学习-发送cookie中的token</h2>
    <form action=" " method="get">
        账号：
        <input type="text" name="user" value="XuMoheng" ><br />
        密码：
        <input type="text" name="password" value="" >
        
        <input type="submit" value="登录"
            <?php 
                $user=$_GET["user"];
                $password=$_GET["password"];
                setcookie("token",$user.'+'.$password,time()+3600);
            ?>
        >
        <br />
        留言：
        <textarea name="txt"></textarea>
        <input type="submit" value="提交">
    </form>
    <hr>
    <h2>
        当前登录用户：
        <?php
            $xssToken=$_COOKIE['token'];
            $xssUser=explode('+',$xssToken)[0];
            print $xssUser;
         ?>
    </h2>
    <h3>该用户留言：</h3>
    <p>
        <?php
            $message=$_GET["txt"];
            print $message;
        ?>
    </p>
</body>
</html>


<!-- <script>alert(document.cookie)</script> -->
