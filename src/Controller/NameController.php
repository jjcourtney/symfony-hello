<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;
    
    class NameController extends AbstractController
    {
        /**
         * @Route("/api/{name}", name="show", methods={"GET","HEAD"})
         */
        public function show(string $name): Response
        {
            $message = "Welcome ".$name;

            return new Response(
                '<html><body> '.$message.'</body></html>'
            );
        }
    
        // /**
        //  * @Route("/api/posts/{id}", methods={"PUT"})
        //  */
        // public function edit(int $id): Response
        // {
        //     // ... edit a post
        // }
    }
?>