<style> <?php include '../style.css'; ?> </style>
<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "abhigysaxena", "saetaej7", "abhigysaxena");
    if ($mysqli->connect_error){
        printf("Connection failed %s\n", $mysqli->connect_error);
        exit();
    }

    $user = $_POST["user_id"];

    if ($user == ""){
        echo "User was not created because the field was left empty";
        exit();
    }

    $query = "INSERT INTO Users (user_id) VALUES ('" . $user .  "')";
    if ($result = $mysqli->query($query)){
        echo "User created successfully";
    }
    else{
        echo "User was not created because " . $user . " is already taken";
    }
    $mysqli->close();
?>