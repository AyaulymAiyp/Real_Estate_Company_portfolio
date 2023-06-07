<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$conn = new mysqli('localhost', 'root', '', 'AI AC');
if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into roca_llisa(name, phone) values(?, ?)");
    $stmt->bind_param("si", $name, $phone);
    $stmt->execute();
    echo 'Thank you for your response, we will contact you in 2-3 work days. <a href="v4.html">Go back</a>';
    $stmt->close();
    $conn->close();
}
?>