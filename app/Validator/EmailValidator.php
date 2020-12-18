<?php

namespace App\Validator;

use App\Repositories\EmailRepository;
use Respect\Validation\Validator;


class EmailValidator
{
    public function execute(string $email, $checkbox)
    {

        $messages = [];

        $emptyEmail = $email == '';

        $emailQuery = (new EmailRepository())->findByEmail($email);

        $validEmail = Validator::email()->validate($email);

        $emptyCheckBox = $checkbox == '';

        $columbianEmail = substr($email, -3) === '.co';

        if ($emptyEmail) {
            $messages['email'] = "Email address is required !";
        } else if (!$validEmail) {
            $messages['email'] = "Please provide a valid e-mail address";
        } else if ($columbianEmail) {
            $messages['email'] = "We are not accepting subscriptions from Colombia emails!";
        } else if ($emailQuery) {
            $messages['email'] = "Email address is registered already !";
        }

        if (!$emptyEmail && $validEmail && !$columbianEmail && !$emailQuery && $emptyCheckBox) {
            $messages['checkbox'] = "You must accept the terms and conditions!";
        }

        return $messages;

    }
}