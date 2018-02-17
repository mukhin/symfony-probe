<?php
/**
 * Файл DefaultControl.php
 * 
 * @author Андрей Мухин
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 *  Класс DefaultController  
 */
class DefaultController extends Controller
{
    /**
     * function indexAction -- blah blah blah
     * @Route("/", name="homepage")
     * 
     * @param Request $request
     * 
     * @return чего-то там...
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
