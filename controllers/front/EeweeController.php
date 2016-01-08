<?php

class EeweeController extends FrontController
{

    /**
     *  Initialize controller
     * @see FrontController::init()
     */
    public function init()
    {
        parent::init();
    }

    /**
     *  Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate(_PS_THEME_DIR_ . 'eewee.tpl');
    }

}