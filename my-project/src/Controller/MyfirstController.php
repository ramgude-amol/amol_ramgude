<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyfirstController extends AbstractController
{
    /**
     * @Route("/myfirst", name="myfirst")
     */
    public function index()
    {
	 /**
      * @Route("/myfirst/index")
      */
	  

		$client = new \Github\Client();
		$repositories = $client->api('repo')->find('symfony', array('language' => 'php','type'=>'all'));

        return $this->render('myfirst/index.html.twig', [
			'controller_name'=>'My First Project',
            'client' => $client,'repositories'=>$repositories
        ]);
    }
}

