<?php

namespace App\Services;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProductRepository;

class StockManagerServices{

    private $manager;
    private $repoProduct;

    public function __construct(EntityManagerInterface $manager, ProductRepository $repoProduct)
    {
        $this->manager = $manager;
        $this->repoProduct = $repoProduct;
    }

    public function deStock(Order $order){

        $orderDetails = $order->getOrderDetails()->getValues();

        foreach ($orderDetails as $key => $details) {
            $product = $this->repoProduct->findByName($details->getProductName())[0];
            $newQuantity = $product->getQuantity() - $details->getQuantity();
            $product->setQuantity($newQuantity);
            $this->manager->flush();
        }




    }

}