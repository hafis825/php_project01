<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELE']); ?>" method="post">
        <div class="form-info">
            <label for="">Name : </label>
            <input type="text" name="user">
        </div>

        <div class="form-info">
            <label for="">Password : </label>
            <input type="password" name="pass">
        </div>

        <input type="submit" value="OK">

    </form>



</body>
<?php 

    error_reporting(0);

    $User = $_POST['user'];
    $Pass = $_POST['pass'];

    echo $User;
    echo $Pass;

?>
</html>
