<?php 
require("./db.php");

// 
$sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table: ";
}

?>