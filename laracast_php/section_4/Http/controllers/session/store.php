<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$form = LoginForm::validate($attributes = [
    'email' => $email,
    'password' => $password
]);

$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
    $form->error('email', 'No user record found with that email address and password')->throw();
}
redirect('/');





