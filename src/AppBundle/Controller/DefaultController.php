<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Utils\Service\MessageGenerator;
use AppBundle\Utils\Service\PostGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/amministrazione", name="admin")
     * @Template()
     */
    public function adminAction(Request $request)
    {
        $ret = $this->get(PostGenerator::class)->getAll();
        return ['posts'=>$ret];
    }

    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function homepageAction(Request $request)
    {
        $ret = $this->get(MessageGenerator::class)->getMessaggioBenvenuto();
//        $ret2 = $this->get(MessageGenerator::class)->getCoinDesk();
        $ret3 = $this->get(PostGenerator::class)->getAll();
        return ['saluto'=>$ret,
                'posts' => $ret3
        ];
    }

    /**
     * @Route("/account", name="account")
     * @Template()
     */
    public function accountAction(Request $request)
    {
        $ret = $this->get(MessageGenerator::class)->getMessaggioBenvenuto();
        $ret2 = $this->get(MessageGenerator::class)->getCoinDesk();
        return ['saluto'=>$ret,
            'coindesk' => $ret2->bpi->EUR->rate
        ];
    }

    /**
     * @Route("/post", name="post")
     * @Template()
     */
    public function postAction(Request $request)
    {
        $ret = $this->get(PostGenerator::class)->getAll();
        return ['posts'=>$ret];
    }

}
