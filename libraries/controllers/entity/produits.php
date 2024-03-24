<?php


use Database;

class Produits 
{

    private $id;
    private $nom;
    private $description;
    private $prix;
    private $contenances;
    private $rating;
    private $stock;
    private $created_at;
    private $genreId;
    private $imageId;
    private $categorieId;

    public static $produits;
    
   public function __construct($id, $nom, $description, $prix, $contenances, $rating, $stock, $created_at, $genreId, $imageId, $categorieId)
   {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->contenances= $contenances;
        $this->rating = $rating;
        $this->stock=$stock;
        $this->created_at = $created_at;
        $this->genreId = $genreId;
        $this->imageId = $imageId;
        $this->categorieId = $categorieId;
        self::$produits[] = $this;

   }

   public function getId(){return $this->id;}
   public function setId($id){$this->id = $id;}

   public function getNom(){return $this->nom;}
   public function setNom($nom){return $this->nom = $nom;}

   public function getDescription(){return $this->description;}
   public function setDescription($description){return $this->description = $description;}

   public function getPrix(){ return $this->prix ;}
   public function setPrix($prix) { $this->prix = $prix; }

   public function getContenance( ) { return $this->contenances; }
   public function setContenance($contenances) { $this->contenances = $contenances;}

   public function getRating() { return $this->rating; }
   public function setRating($rating){ $this->rating = $rating;}

   public function getStock( ){ return $this->stock; }
   public function setStock( $stock ) { $this->stock = $stock; }

   public function getCreatedAt() { return $this->created_at; }
   public function setCreatedAt($created_at) { $this->created_at = $created_at; }
   
   public function getGenreId() { return $this->genreId; }
   public function setGenreId($genreId) { $this->genreId =  $genreId; }

   public function getImageId() { return $this->imageId; }
   public function setImageId($imageId) { $this->imageId = $imageId; }

   public function getCategorieId( ) { return $this->categorieId; }
   public function setCategorieId($categorieId) { $this->categorieId = $categorieId; }







}