<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class CategoryController extends AbstractActionController
{
    public function indexAction()
    {
        $entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        $query = $entityManager->createQuery('SELECT u FROM Blog\Entity\Category u ORDER BY u.id DESC');
        $rows = $query->getResult();
        
        return array('category' => $rows);
    }
}

