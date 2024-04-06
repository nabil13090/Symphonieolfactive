<?php
namespace Models;


class Users extends Model
{
    protected $table = 'utilisateurs';


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

    function findUser($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE id = :id");
        $query->execute([':id' => $id]);
        $utilisateur = $query->fetch();
        return $utilisateur;
    }
    
    function findUserAll()
    {
        $query = $this->pdo->prepare("SELECT * FROM `utilisateurs`");
        $query->execute();
        $utilisateur = $query->fetchAll();
        return $utilisateur;
    }

    function roleUser()
    {
        $query = $this->pdo->prepare("SELECT utilisateurs.role, utilisateurs.id FROM `utilisateurs`");
        $query->execute();
        $role = $query->fetchAll();
        return $role;
    }

    public function  delete(int $id)
    {
        $query = $this->pdo->prepare("DELETE FROM utilisateurs WHERE id = :id");
        $query->execute(['id' => $id]);
        header('Location: comptes.php');
    }

    public function updateUser($id_utilisateur, $nouveau_nom, $nouvel_email, $nouveau_mot_de_passe)
    {
        // Préparation de la requête SQL
        $query = $this->pdo->prepare('UPDATE utilisateurs SET nom = :nom_modifie, email = :email_modifie, mot_de_passe = :mot_de_passe_modifie WHERE id = :id_utilisateur');

        // Liaison des valeurs
        $query->bindParam(':nom_modifie', $nouveau_nom);
        $query->bindParam(':email_modifie', $nouvel_email);
        $query->bindParam(':mot_de_passe_modifie', $nouveau_mot_de_passe);
        $query->bindParam(':id_utilisateur', $id_utilisateur);

        // Exécution de la requête
        $update = $query->execute();

        // Retourne le résultat de la mise à jour (true ou false)
        return $update;
    }

}