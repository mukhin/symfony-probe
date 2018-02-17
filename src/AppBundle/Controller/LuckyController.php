<?php
/**
 * Файл LuckyController
 */

// src/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 *  Класс LuckyController
 */
class LuckyController
{
    /**
     * Функция number
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function number()
    {
        $number = mt_rand(0, 100);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
            );
    }
}
