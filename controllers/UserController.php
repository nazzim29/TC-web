<?php
require_once('models/User.php');
require_once('models/Admin.php');
require_once('models/It.php');
require_once('models/Client.php');
class UserController
{
    public function cartindex()
    {
        View::display('cart');
    }
    public function getuser(int $id =null)
    {
        View::display('account');
    }
    public function login()
    {
        $user = new Client()
        $user = $user->getByEmail($_POST["email"])
    }
    public function register(){
        $var = new User();
        if($_POST['password'] != $_POST['confirm_pass'])return View::display('register',Array('error' => 'Verifiez votre mot de passe'));
        $var->populate(Array(
            "email" => $_POST['email'],
            "password" => $_POST['password']
        ));
        $id = $var->create();
        $client = new Client();
        $client->populate(Array(
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'adresse'=>$_POST['adr'],
            'numero_cb'=>$_POST['numero_carte'],
            'client'=>true,
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'id_user'=>$id,
        ));
        $client->create();
        header("Location:\login");
    }
}   