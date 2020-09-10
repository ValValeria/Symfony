<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\Mime\MimeTypes;


class FileLoading {
    
    protected $fs;
    protected $mimes;

    public function __construct()
    {
        $this->fs = new Filesystem();
        $this->mimes = new MimeTypes();
    }
    
    /**
     * Manage file upload
     * @param Request $request
     * @param string $dirname
     * @param string $filename
     * @return Response
     */
    public function fileHandling(Request $request,string $dirname,string $filename):Response
    {
        $path = "\\public\\client\\$dirname\\$filename";
        $response = new Response();
        $mimeType = $this->mimes->guessMimeType($filename);

        if ($this->fs->exists($path) && $mimeType) {
            $content = file_get_contents($path);
            $response->headers->set('Content-Type',$mimeType);
            $response->setContent($content);
        } else {
            $response->setContent("No file was found".$path);
            $response->setStatusCode(403);
        }

        return $response;
    }

}


?>
