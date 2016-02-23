<?php
/**
 * PESCMS for PHP 5.4+
 *
 * Copyright (c) 2014 PESCMS (http://www.pescms.com)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 * @core version 2.6
 * @version 1.0
 */

namespace App\Team\GET;

class Login extends \Core\Controller\Controller{

    public function index(){
        $this->display();
    }

    public function logout(){
        session_destroy();
        $this->success('您已安全退出', $this->url('Ticket-Login-index'));
    }

}