<?php

namespace App\Services;

use App\Repositories\EmailRepository;

class EmailsByDomain

{
    public function execute(?string $result)
    {
        if ($result) {
            $result = "'$result'";
        } else {
            $result = "'%'";
        }
       return $domainQuery = (new EmailRepository())->getByDomain($result);
    }

}