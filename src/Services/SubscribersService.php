<?php

namespace Thaldos\HarmonieLimoges\Services;

use DateTime;
use PDO;

class SubscribersService extends DataBaseService
{
    /**
     * Create, eventually, a subscriber.
     */
    public function createSubscriber(string $email): string
    {
        $createSubscriberReturn = '';

        $data = [
            'email' => $email,
        ];
        $sql = 'SELECT * FROM subscribers WHERE email = :email';
        $query = $this->connection->prepare($sql);
        $results = $query->execute($data);
        var_dump($sql);
        exit;
        if (count($results) == 0) {
            $now  = new DateTime();
            $data = [
                'email' => $email,
                'created_date' => $now->format(DateTime::RFC3339),
            ];
            $sql = 'INSERT INTO subscribers (email, created_date) VALUES (:email, :created_date)';
            $query = $this->connection->prepare($sql);
            $query->execute($data);
        } else {
            $createSubscriberReturn = 'Cette adresse email est déjà inscrite à notre newsletter.';
        }

        return $createSubscriberReturn;
    }

    /**
     * Return all subscribers.
     */
    public function getSubscribers(): array
    {
        $subscribers = [];

        $sql = 'SELECT * FROM subscribers';
        $query = $this->connection->query($sql);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($results)) {
            $subscribers = $results;
        }

        return $subscribers;
    }
}
