<?php

namespace App\Controller\Admin;

use App\Entity\Education;
use App\Entity\Hobbies;
use App\Entity\ProfessionalExperience;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Professionnal Xp', 'fa fa-tags', ProfessionalExperience::class);
        yield MenuItem::linkToCrud('Education', 'fa fa-file-text', Education::class);
        yield MenuItem::linkToCrud('Hobby', 'fas fa-list', Hobbies::class);
    }
}
