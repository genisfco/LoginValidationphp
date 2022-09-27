<?php

require_once('conn.php');

$email = filter_var($_POST['email']);
$password = filter_var($_POST['password']);

$sql = 'SELECT * FROM users WHERE email=:email AND senha=:password';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'password' => $password]);
$user = $result->fetch();

if (!empty($user)) {
    session_start();

    $_SESSION['id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];

    header('Location: ../');
}
else {
    echo 'Usuário não cadastrado! <a href="logout.php"><button>Voltar</button></a>';
}

?> 