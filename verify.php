<?php
$password = "1234"; // Güvenli bir şekilde saklanmalıdır (örn. hash kullanarak)
$inputPassword = $_POST['password'];

if ($inputPassword === $password) {
    echo "success";
} else {
    echo "error";
}
?>
