<?php

    include('connect.php');

    extract($_POST);

    mysqli_query($con, "INSERT INTO `tbl_register` (`id`, `nome`, `email`, `senha`)
     VALUES (NULL, '$nome', '$email', '$senha');");
    
    header('location:list.php');



?>