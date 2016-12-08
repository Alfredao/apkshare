<?php
namespace Application\Controller;


class AbstractActionController extends \Zend\Mvc\Controller\AbstractActionController
{
    /**
     * @return \Zend\ServiceManager\ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->getEvent()->getApplication()->getServiceManager();
    }
}
