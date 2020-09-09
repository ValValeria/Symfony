<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class FileLoading {
    
    protected $parameterBag;
    protected const mimeTypes = ["css"=>"text/css","js"=>"text/javascript"];

    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }
    
    
   
    public function fileHandling(Request $request,string $dirname,string $filename):Response
    {
        $path = $this->parameterBag->get('kernel.project_dir')."\public\client\\$dirname\\$filename";
        $response = new Response();
        $extension = pathinfo($path,PATHINFO_EXTENSION);

        if (file_exists($path) && in_array($extension,array_keys(self::mimeTypes))) {
            $content = file_get_contents($path);
            $response->headers->set('Content-Type',self::mimeTypes[$extension]);
            $response->setContent($content);
        } else {
            $response->setContent("No file was found".$path);
            $response->setStatusCode(403);
        }

        return $response;
    }

}


?>
