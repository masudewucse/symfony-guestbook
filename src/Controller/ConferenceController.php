<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/{name}", name="homepage")
     */
    public function index(string $name = ''): Response
    {
        $greet = sprintf('<h1> Hello %s!</h1>', htmlspecialchars($name)) ?? '';

        return new Response("
        <html>
        <body>
        <img src=\"/images/under-construction.gif\" />
        {$greet}
        </body>
        </html>");
    }
}
