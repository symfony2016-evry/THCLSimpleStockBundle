<?php
// src/SYM16/SimpleStockBundle/Controller/MonPremierControleurController.php
namespace SYMSimpleStockBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MonPremierControleurController extends Controller
{
    public function produitAction($nombre1,$nombre2){
 	 $resultat=$nombre1*$nombre2;
        return new Response("Le produit de".$nombre1." et de:".$nombre2."est".$resultat);
    }
}

