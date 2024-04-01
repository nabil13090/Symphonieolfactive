<?php
namespace Models;


class Users extends Model
{
    protected $table = 'produits';


    function inscription($nom, $email, $mot_de_passe)
    {
        $query = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $query->execute(['email' => $email]);
        if ($query->fetch()) {
            return ['success' => false, 'message' => "Un utilisateur avec cet email existe déjà."];
        }

        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $query = $this->pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mot_de_passe)");
        $success = $query->execute(['nom' => $nom, 'email' => $email, 'mot_de_passe' => $mot_de_passe_hash]);

        if ($success) {
            return ['success' => true, 'message' => "L'utilisateur a été inscrit avec succès."];
        } else {
            return ['success' => false, 'message' => "Erreur lors de l'inscription de l'utilisateur."];
        }
    }


    function connexion($email, $mot_de_passe)
    {
        $query = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $query->execute(['email' => $email]);
        $utilisateur = $query->fetch();
        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            return $utilisateur;
        } else {
            return false;
        }
    }

}