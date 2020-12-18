<?php
namespace App\Services;

use App\Repositories\EmailRepository;

class DeleteEmailService
{

    public function execute(int $id):void
    {
        (new EmailRepository())->delete($id);
    }

}