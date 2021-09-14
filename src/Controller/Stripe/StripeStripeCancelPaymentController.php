<?php

namespace App\Controller\Stripe;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeStripeCancelPaymentController extends AbstractController
{
    /**
     * @Route("/stripe-payment-cancel/{StripeCheckoutSessionId}", name="stripe_payment_cancel")
     */
    public function index(?Order $order): Response
    {
        if(!$order || $order->getUser() !== $this->getUser()){
            return $this->redirectToRoute("home");
        }

        return $this->render('stripe_stripe_cancel_payment/index.html.twig', [
            'controller_name' => 'StripeStripeCancelPaymentController',
            'order' => $order
        ]);
    }
}
