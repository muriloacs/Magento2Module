<?php
namespace MuriloAmaral\Sample\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}