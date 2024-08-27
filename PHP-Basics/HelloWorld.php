<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Page in Php</title>
</head>

<body bgcolor = "Black">
    <font color="White"> 
        <?php
            echo "Hello, World!";
            echo "<br>";
            echo "Welcome in Php World";
        ?> 
        <?php
            echo "<br>";
            echo "PHP info";

            //Because every system is setup differently, phpinfo() is commonly used to check configuration settings and for available predefined variables on a given system. 
            // phpinfo() is also a valuable debugging tool as it contains all EGPCS (Environment, GET, POST, Cookie, Server) data.

            // phpinfo()


            // Show just the module information.
            // phpinfo(8) yields identical results.
            //phpinfo(INFO_MODULES);

        ?>
    </font>
</body>

</html>


<!-- Using XAMPP server -->

<!-- http://localhost/PHP/PHP-Basics/HelloWorld.php --> 

