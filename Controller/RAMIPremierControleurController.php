<?php
// src/SYM16/SimpleStockBundle/Controller/RAMIPremierControleurController.php

namespace SYM16SimpleStockBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RAMIPremierControleurController extends Controller{

	public function iLikeAction($verbe){

		return new Response("J'aime beaucoup ".$verbe." !");

	}

	public function produitAction($var1,$var2){

		$var1 = hexdec{$var1};
		$var2 = hexdec{$var2};

		$resultat = $var1*$var2;
		return new Response("Le résultat de ".$var1." par ".$var2." est égale à ".$resultat);
	}
}
