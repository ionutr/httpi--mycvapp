<?php
/**
 * Created by ionutr
 * Date: 11/24/13
 * Time: 3:52 AM
 */

namespace Httpi\Mycv\Bundle\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HtmlController extends Controller {

    public function indexAction(Request $request)
    {
        return $this->render('HttpiMycvDemoBundle:Default:index.html.twig');
    }

    public function pdfAction(Request $request)
    {
        $html = $this->renderView('HttpiMycvDemoBundle:Default:index.html.twig');
        $pdfGenerator = $this->get('spraed.pdf.generator');

        return new Response($pdfGenerator->generatePDF($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="out.pdf"'
            )
        );
    }

} 