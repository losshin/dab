<?php
    session_start();
    
    if(isset($_SESSION['user'])==TRUE) {
        session_destroy();
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Login</title>
        </head>
        <body>
            <div class="login" >
                <center>
                    <h1>Login</h1>
                    <form class="formlog" action="./checklog.php" method="post">
                        <input type="user" name="user" placeholder="Email" alt="email" required="required"/><br/><br>
                        <input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
                        <input type="submit" name="submit" value="Submit" alt="submit"/>
                    </form><br/>
                </center>
            </div>
        </body>
        </html>
<?php } ?>