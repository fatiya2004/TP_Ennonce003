<?php

namespace App\Controller;

use App\Form\ProductOrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(Request $request): Response
    {
        // need the class name  as reference not  the object that's why we did not use DI
        $form = $this->createForm(ProductOrderType::class);

        // to hanlde request (if we fortet it its  like we did nothing)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $this->addFlash('success', 'Product added to cart!');
        }

        return $this->render('product/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
