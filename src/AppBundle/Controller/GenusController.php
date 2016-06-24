<?php
/**
 * Created by PhpStorm.
 * User: prasetia
 * Date: 6/24/2016
 * Time: 2:01 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     * @param $genusName
     * @return Response
     */
    public function showAction($genusName){
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig',[
            'name' => $genusName
        ]);
        return new Response($html);
    }
}