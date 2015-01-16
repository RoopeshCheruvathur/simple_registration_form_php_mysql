<html>
<body>
<?php
    if(isset($_GET['err_msg']))
    echo $_GET['err_msg'];
    ?>
    <form action="insert.php" enctype="multipart/form-data" method="post">
    <label>Username:<input name="username" type="text" /></label>
    <label>Password:<input name="password" type="password" /></label>
    <label>Re-Password:<input name="repassword" type="password" /></label>
   
    <input name="sign up" type="submit" value="sign up" />
    </form>

</body>
</html>
