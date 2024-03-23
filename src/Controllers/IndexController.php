<?php

namespace Thaldos\HarmonieLimoges\Controllers;

use Thaldos\HarmonieLimoges\Services\SubscribersService;
use Thaldos\HarmonieLimoges\Services\MailsService;

class IndexController
{
    public function indexAction()
    {
        $indexActionReturn = '';

        $mailsService = new MailsService();
        $mailsService->sendEmail('test');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            if (!empty($email)) {
                $subscribersService = new SubscribersService();
                $indexActionReturn = $subscribersService->createSubscriber($email);
            }
        }

        return $indexActionReturn;
    }
}
