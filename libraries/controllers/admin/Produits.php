<?php
namespace Controllers;



use Renderer;
use Http;


class Produit extends Controller
{
    protected $modelName = \Models\Produit::class;

    public function admin()
    {
        $produits = $this->model->findAll(array('order' => 'id'));
        Renderer::render('admin/produits', compact('produits'));
    }

    public function insertTo()
    {
        $id = null;
        if (!empty($_POST['id']) && ctype_digit($_POST['id'])) {
            $id = $_POST['id'];
        }
        $nom = null;
        if (!empty($_POST['nom'])) {
            $nom = $_POST['nom'];
        }
        $descritpion = null;
        if (!empty($_POST['descritpion'])) {
            $descritpion = htmlspecialchars($_POST['descritpion']);
        }
        $prix = null;
        if (!empty($_POST['prix'])) {
            $prix = htmlspecialchars($_POST['prix']);
        }
        $contenances = null;
        if (!empty($_POST['contenances'])) {
            $contenaces = htmlspecialchars($_POST['contenances']);
        }
        $rating = null;
        if (!empty($_POST['rating'])) {
            $rating = htmlspecialchars($_POST['rating']);
        }
        $created_at = null;
        if (!empty($_POST['created_at'])) {
            $created_at = htmlspecialchars($_POST['created_at']);
        }
        $genreId = null;
        if (!empty($_POST['genreId'])) {
            $genreId = htmlspecialchars($_POST['genreId']);
        }
        $imageId = null;
        if (!empty($_POST['imageId'])) {
            $imageId = htmlspecialchars($_POST['imageId']);
        }
        $categorieId = null;
        if (!empty($_POST['categorieId'])) {
            $categorieId = htmlspecialchars($_POST['categorieId']);
        }

        $produits = $this->model->find($id);
        if (!$id) {
            die("Aucun commentaire n'a l'identifiant $id !");
        }
        $this->model->insert($id, $nom, $descritpion, $prix, $contenances, $rating, $created_at, $genreId, $imageId, $categorieId);
        Http::redirect("dashBord.html.php?=produits&task=edit&id=" . $produits);
        
    }

    public function delete()
    {

        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            die("Ho ! Fallait préciser le paramètre id en GET !");
        }
        $id = $_GET['id'];
        $commentaire = $this->model->find($id);
        if (! $commentaire) {
            die("Aucun commentaire n'a l'identifiant $id !");
        }
        $produits = $commentaire['id'];
        $this->model->delete($id);
        Http::redirect("dashBord.html.php?controller=produits&task=edit&id=" . $produits);
    }
}