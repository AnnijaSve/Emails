<?php
namespace App\Services;

use App\Repositories\EmailRepository;
use App\Validator\EmailValidator;

class AddEmailService
{
    public function execute(string $email, $checkBox)
    {

        $messages = (new EmailValidator())->execute($email, $checkBox);

        if(!$messages) {
            (new EmailRepository())->save($email);
        }
            return $messages;

    }
}