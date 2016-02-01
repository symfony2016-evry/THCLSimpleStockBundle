<?php
// src/SYM16/SimpleStockBundle/Controller/MonPremierControleurController.php
namespace SYMSimpleStockBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MonPremierControleurController extends Controller
{
    public function iLikeAction($verbe){
        return new Response("J'aime beaucoup ".$verbe." !");
    }

    public function produitAction($nombre1,$nombre2){
 	 $resultat=hexdec($nombre1)*hexdec($nombre2);
        return new Response("Le produit de".$nombre1." et de:".$nombre2."est".$resultat);
    }


}

