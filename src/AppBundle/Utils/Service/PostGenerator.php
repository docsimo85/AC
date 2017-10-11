<?php
/**
 * Created by PhpStorm.
 * User: sgaido
 * Date: 10/10/17
 * Time: 11:43
 */

namespace AppBundle\Utils\Service;


use AppBundle\Entity\Post;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PostGenerator
{
    use ContainerAwareTrait;

    /**
     * UtilsService constructor.
     */
    public function __construct(ContainerInterface $container){
        $this->setContainer($container);
    }

    public function getPost()
    {
        $messages = [
            'Ciao',
            'Bentornato',
            'Buongiorno',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

    /**
     * @return array
     *
     * @author sgaido 10/ott/2017
     */
    public function getAll(){
        return $this->container->get('doctrine')->getRepository('AppBundle:Post')->findBy([], ['id' => 'DESC']);
    }
}