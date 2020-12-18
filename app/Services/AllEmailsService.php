<?php

namespace App\Services;

use App\Repositories\EmailRepository;

class AllEmailsService
{
    public function execute(?string $order, ?string $sort)
    {
        if (!$order) {
            $order = 'created_at';
        }

        if (!$sort) {
            $sort = 'ASC';
        }
        return $emailQuery = (new EmailRepository())->getAll($order, $sort);

    }
}