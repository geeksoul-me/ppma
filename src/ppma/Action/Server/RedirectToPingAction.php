<?php


namespace ppma\Action\Server;


use ppma\Action\ActionImpl;

class RedirectToPingAction extends ActionImpl
{

    /**
     * @return \ppma\Service\ResponseService
     */
    public function run()
    {
        return $this->response
            ->setStatusCode(300)
            ->addHeader('Location', '/ping')
        ;
    }

} 