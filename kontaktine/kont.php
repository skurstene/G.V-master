<?php
if (isset($_POST['submit'])){
$vardas= trim($_POST ['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['kalusimai']);

if(!empty($vardas) && !empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        include 'jung.php';
        $from = $email;
        $to = "vereskaitegabriele@gmail.com";
        $subject = "Nauja žinutė";
        $autorius = 'Nuo:' . $vardas . ', ' . $email;
        $zinute = htmlspecialchars($message);
    }
}
}
?>