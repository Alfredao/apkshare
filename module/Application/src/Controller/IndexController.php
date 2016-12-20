<?php

namespace Application\Controller;

use APK\Entity\App;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $apps = $em->getRepository(App::class)->findAll();

        $view = new ViewModel();
        $view->setVariable('apps', $apps);

        return $view;
    }
}
