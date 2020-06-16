<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Produit::class);

        $produits = $repo->findAll();
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produits
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('produit/home.html.twig');
    }

    /**
     * @Route("/produit/{id}", name="produit_show")
     */

    public function show($id){

        $repo = $this->getDoctrine()->getRepository(Produit::class);

        $produit=$repo->find($id);

        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }
}
