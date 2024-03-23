<?php

namespace Thaldos\HarmonieLimoges\Controllers;

use Thaldos\HarmonieLimoges\Services\SubscribersService;

class IndexController
{
    public function indexAction()
    {
        $indexActionReturn = '';

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
