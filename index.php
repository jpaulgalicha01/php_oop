<?php
include 'includes/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
         <h1>PHP login using OOP</h1>
            <form action="inputConfig.php" method="post">
                <input type="hidden" name="function" value="logging_in">
                <label for="Username">Username :</label>
                <input type="text" class="form-control control" name="uname" required><br><br>
                <label for="Password">Password :</label>
                <input type="password" class="form-control control" name="pass" id="pass" required>
                <div class="showpass">
                    <div>
                        <input type="checkbox" id="showpass">
                    </div>
                    <label for="showpass" class="text-white">Show Password</label>
                </div>

                <button type="submit" name="logging_in" class="btn">Submit</button>

            </form>
    </div>
</body>
</html>

<script>
    function showpass (){
        if(this.checked){
            document.getElementById('pass').setAttribute('type','text');
        }else{
            document.getElementById('pass').setAttribute('type','password');
        }
    }
    document.getElementById('showpass').addEventListener('click',showpass)
</script>