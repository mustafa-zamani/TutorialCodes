<?php

if(isset($_POST['submit']))
{
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root','', 'loginapp');
    if($connection)
    {
        echo "Connection Stablished\n";
    }else
    {
        echo "Connection Faild";
    }

    if($userName && $password)
    {
        echo "Your Username is: $userName and Your password is: $password\n";
    }else
    {
        echo "username or password is blank";
    }
}
?>