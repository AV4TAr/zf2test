<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * TestController
 *
 * @author
 *
 * @version
 *
 */
class TestController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction ()
    {
        // TODO Auto-generated TestController::indexAction() default action
        return new ViewModel();
    }
}