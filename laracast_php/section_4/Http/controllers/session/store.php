<?php


use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if (!$form->validate($email, $password)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
    ]);
}


// match the email and password
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);
        header('location: /');
        exit();
    }
}

// we have a user, but we don't have a password


return view('session/create.view.php', [
    'errors' => [
        'email' => 'No user record found with that email address and password'
    ]
]);


