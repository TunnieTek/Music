<?php
    $severname = "localhost";
    $username = "id17446086_tunesource";
    $password = "-m@_<cs64nbQif+<---testgithub";
    $database = "id17446086_music_testgithub";
    //Khai báo biến để kết nỗi CSDL
    $connect = new mysqli($severname,$username,$password,$database);
    //$connect = new mysqli_connect ----> Hướng Thủ Tục
    if(!$connect)
        {
            echo "Connect Failed!";
        }
        else
        {
            
        }
        

?>

