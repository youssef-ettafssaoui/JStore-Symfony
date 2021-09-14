<?php

namespace App\Controller\Admin;

use App\Entity\Carrier;
use App\Entity\Cart;
use App\Entity\Categories;
use App\Entity\Contact;
use App\Entity\HomeSlider;
use App\Entity\Order;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

       return $this->redirect($routeBuilder->setController(ProductCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('AgriExpress Shopping Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Products', 'fas fa-shopping-cart', Product::class);
        yield MenuItem::linkToCrud('Orders', 'fas fa-shopping-bag', Order::class);
        yield MenuItem::linkToCrud('Carts', 'fas fa-boxes', Cart::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Categories::class);
        yield MenuItem::linkToCrud('Carrier', 'fas fa-truck', Carrier::class);
        yield MenuItem::linkToCrud('Home Sliders', 'fas fa-images', HomeSlider::class);
        yield MenuItem::linkToCrud('Contacts', 'fas fa-envelope', Contact::class);
        
    }
}
