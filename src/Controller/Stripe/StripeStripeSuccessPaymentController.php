<?php

namespace App\Controller\Stripe;

use App\Entity\Order;
use App\Services\CartServices;
use App\Services\StockManagerServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeStripeSuccessPaymentController extends AbstractController
{
    /**
     * @Route("/stripe-payment-success/{StripeCheckoutSessionId}", name="stripe_payment_success")
     */
    public function index(?Order $order, CartServices $cartServices,
            EntityManagerInterface $manager, 
            StockManagerServices $stockManager): Response
    {

        if(!$order || $order->getUser() !== $this->getUser()){
            return $this->redirectToRoute("home");
        }

        if (!$order->getIsPaid()) {
            // Commande Payée
            $order->setIsPaid(true);
            // Déstockage 
            $stockManager->deStock($order);
            $manager->flush();
            $cartServices->deleteCart();

            // Email au Client


        }
        return $this->render('stripe_stripe_success_payment/index.html.twig', [
            'controller_name' => 'StripeStripeSuccessPaymentController',
            'order' => $order
        ]);
    }
}
