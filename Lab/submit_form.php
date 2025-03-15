


<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    echo"<h2>Form Submission Result</h2>";
    echo"<p><strong>Name:</strong>$name</p>";
    echo"<p><strong>Email:</strong>$email</p>";
    echo"<p><strong>Message:</strong>$message</p>";
    echo"<p>Welcome to PHP</p>"
}else{
    echo "<p>Access denied</p>";
}
?>