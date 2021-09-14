<?php

namespace App\Controller\Stripe;

use App\Entity\Cart;
use App\Services\OrderServices;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeCheckoutSessionController extends AbstractController
{
    /**
     * @Route("/create-checkout-session/{reference}", name="create_checkout_session")
     */
    public function index(?Cart $cart, OrderServices $orderServices,
    EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();

        if (!$cart) {
          return $this->redirectToRoute("home");
        }

        $order = $orderServices->createOrder($cart);
        Stripe::setApiKey('sk_test_51JFTNKHaYaU3WTp9Z16iTTtrEsL6OpIxHRat1L1xV7Yg0KUf7RyI1n2ie82WSlrMQS3K8svOtfDLkGforu9q8r9o00MQp6FuuG');

        $checkout_session = Session::create([
            'customer_email' => $user->getEmail(),
            'payment_method_types' => ['card'],
            'line_items' => $orderServices->getLineItems($cart),
            'mode' => 'payment',
            'success_url' => $_ENV['YOUR_DOMAIN'] . '/stripe-payment-success/{CHECKOUT_SESSION_ID}',
            'cancel_url' => $_ENV['YOUR_DOMAIN'] . '/stripe-payment-cancel/{CHECKOUT_SESSION_ID}',
          ]);
          $order->setStripeCheckoutSessionId($checkout_session->id);
          $manager->flush();
          
        return $this->json(['id' => $checkout_session->id]);
    }
}
