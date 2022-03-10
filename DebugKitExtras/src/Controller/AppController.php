<?php
declare(strict_types=1);

namespace DebugKitExtras\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    /**
     * index action
     * 
     * @return void
     */
    public function index()
    {
        $this->set(['installed' => 'DebugKit Extras installed']);
    }
}
