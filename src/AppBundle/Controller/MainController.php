<?php
/**
 * Created by PhpStorm.
 * User: macbookair
 * Date: 2018-08-13
 * Time: 4:40 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}