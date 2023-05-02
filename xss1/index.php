<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>XSS学习</title>
    </head>
<body>
    <center>
        <h6>输入字符</h6>
        <form action=" " method="get">
            <h6>字符</h6>
            <input type="text" name="xss_input_value" value="输入" ><br />
            <input type="submit">
        </form>
        <hr>
        <input type="text"
           value= <?php
                $xss=$_GET['xss_input_value'];
                print $xss;
                ?>
        >
    </center>
</body>
</html>
