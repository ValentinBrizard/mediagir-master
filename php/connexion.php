<?php if (isset($_POST['login'])) {
    include 'connexion-bdd.php';

            $requete=$connexion->prepare(
             'SELECT *
             FROM utilisateur
            WHERE login = ?'
    );

$requete->execute([$_POST['login']]);

$utilisateur=$requete->fetch();

    if($utilisateur==false){
             echo 'Login inexistant';
            }else{
             $motDePassBcrypt=$utilisateur['password'];
             $motDePassEnClair=$_POST['password'];

    if (password_verify($motDePasseEnClair, $motDePasseBcrypt)) {
            $_SESSION['id'] = $utilisateur['id'];
            $_SESSION['login'] = $utilisateur['login'];
            $_SESSION['administrateur'] = $utilisateur['administrateur'];

            header('Location: index.php');
            }else{
             echo 'Mauvais mot de passe';
        }
    }
} ?>

<h1>Connexion</h1>

<form method="POST">

    <input name="login">
    <input name="password" type="password">
    <input type="submit" value="connexion">

</form>