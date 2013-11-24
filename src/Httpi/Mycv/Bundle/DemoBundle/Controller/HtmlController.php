<?php
/**
 * Created by ionutr
 * Date: 11/24/13
 * Time: 3:52 AM
 */

namespace Httpi\Mycv\Bundle\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HtmlController extends Controller {

    public function indexAction(Request $request)
    {
        return $this->render('HttpiMycvDemoBundle:Default:index.html.twig');
    }

} 