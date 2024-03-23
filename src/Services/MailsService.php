<?php

namespace Thaldos\HarmonieLimoges\Services;

use Exception;
use PDO;

class MailsService
{
    /**
     * Send email.
     */
    public function sendEmail(string $message): void
    {
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $_ENV['EMAIL_FROM'] . "\r\n" .
            'Reply-To: ' . $_ENV['EMAIL_FROM'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $messageHtml = '<html><body>';
        $messageHtml .= $message;
        $messageHtml .= '</body></html>';
        mail("test@gmail.com", 'Raspberry garden watering notification', $messageHtml, $headers);
    }
}
