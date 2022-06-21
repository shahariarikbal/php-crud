<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration form</title>
    <link rel="stylesheet" href="/Full-stack-web-development-02/oop/style.css" />
</head>
<body>
    <div class="container">
        <header>User Registration Form</header>
        <?php
        
            include 'model.php';
            
            $model = new Model();

            $insert = $model->insert();
        
        ?>
        <form method="POST">
            <fieldset>
                <input type="text" name="first_name" class="username" placeholder="Frist name" /><br/><br/>
                <input type="text" name="last_name" class="username" placeholder="Last name" /><br/><br/>
                <input type="tel" name="phone" class="username" placeholder="Phone number..." /><br/><br/>
                <input type="email" name="email" class="username" placeholder="Email..." /><br/><br/>
                <input type="password" name="password" class="username" placeholder="Password..." /><br/><br/><br/>
                <input type="submit" name="submit" id="submit" value="Register" /><br/>
                <a href="list.php" type="submit" name="login" id="login">User List</a>
            </fieldset>
        </form>
    </div>
</body>
</html>