<?php
    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $addr = $_POST['addr'];
    $mysqli = connectSql();
    $query = "INSERT INTO cd (name, phone_no, address) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $name, $phno, $addr);

    if ($stmt->execute()) {
        echo '<script language="javascript">alert("slot booked successfully sent")</script>';
        echo '<script language="javascript">window.location.href = "index.php";</script>';
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $mysqli->close();
function connectSql()
{
    $HOST = 'localhost';
    $NAME = 'root';
    $PASS = "";
    $DB = 'db';
    $mysqli = new mysqli($HOST, $NAME, $PASS, $DB);

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}
?>