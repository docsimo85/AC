<?php
/**
 * Created by PhpStorm.
 * User: sgaido
 * Date: 11/10/17
 * Time: 11:35
 */

namespace AppBundle\Utils\Service;

use AppBundle\Entity\Post;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;


class UserList
{
    use ContainerAwareTrait;
    /**
     * UtilsService constructor.
     */
    public function __construct(ContainerInterface $container){
        $this->setContainer($container);
    }

    /**
     * @return array
     *
     * @author sgaido 10/ott/2017
     */
    public function getUser(){
        return $this->container->get('doctrine')->getRepository('AppBundle:User')->findBy([], ['id' => 'DESC']);
    }
}