<?php
/**
 * Created by PhpStorm.
 * User: macbookair
 * Date: 2018-08-13
 * Time: 11:25 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        return new Response('The genus is: '.$genusName);
    }
}