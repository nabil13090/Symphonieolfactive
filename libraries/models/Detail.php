<?php



namespace Models;


class Detail extends Model
{
    protected $table = 'produits';


    public function find(int $id) {

     
        $query = $this->pdo->prepare("SELECT p.*, i.url FROM produits p INNER JOIN image i ON i.id = p.imageId WHERE p.id = :id");
        // On exécute la requête en précisant le paramètre :article_id 
        $query->execute([':id' => $id]);
        
        // On fouille le résultat pour en extraire les données réelles de l'article
        $item = $query->fetch();
    
        return $item;
    
    }
}