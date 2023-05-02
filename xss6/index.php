<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>XSS学习-发送cookie中的token</title>
    </head>
<body>
    <form action=" " method="get">
        <center>
            <h2>XSS学习-在cookie中插入恶意代码</h2>
            <h3>这是一个平平无奇的文本框</h3>
            <textarea name="txt"></textarea>
            <input type="submit" value="提交"
                <?php 
                    $message=$_GET["txt"];
                    if(isset($message))
                        setcookie("msg",$message,time()+3600);
                ?>
            >
        </center>
    </form>
    <hr>
    <h3>平平无奇的文本框里写了如下内容：</h3>
    <p>
        <?php
            $message=$_COOKIE["msg"];
            print $message;
        ?>
    </p>
</body>
</html>


<!-- <script>alert("cookie中的代码开始运行")</script>  -->

