<?php
    $id = mysqli_connect("localhost","root","root","gametn");
    $idt = $_GET["id"];
    $req = "update persos set pdv = '-2',
                                id ='1'
        where id=$id";
    $res = mysqli_query($id, $req);
    
    header("refresh:0, url=header.php");
?>