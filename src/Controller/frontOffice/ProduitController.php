<?php

namespace App\Controller\frontOffice;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/home/produit', name: 'home_produit')]
    public function index(Request $request, ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();
        return $this->render('frontOffice/produit/index.html.twig', ["produits" => $produits]);
        // Use forward slashes in the path instead of backslashes
    }
}