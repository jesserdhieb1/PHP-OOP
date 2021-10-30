<?php
require ('user_validator.php');
if (isset($_POST['submit'])){
    //validate the entry
    $validation =new UserValidator($_POST);
    $errors=$validation->validateForm();

    //save data to db
}


?>




<html>
<head>
    <title>PHP OOP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div class="new-user">
    <h2>Create new user</h2>
    <form action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST">

        <label >Username : </label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? '')?>">
        <div class="error">
            <?php echo $errors['username'] ?? '' ?>
        </div>

        <label >email : </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>">
        <div class="error">
            <?php echo $errors['email'] ?? '' ?>
        </div>


        <input type="submit" value="submit" name="submit">

    </form>
</div>


</body>
</html>
