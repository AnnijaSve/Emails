<?php

namespace App\Controllers;

use App\Services\AddEmailService;
use App\Services\DeleteEmailService;
use App\Services\AllEmailsService;
use App\Services\EmailsByDomain;

class EmailsController
{

    public function index()
    {

        return require_once __DIR__ . '/../Views/IndexView.php';

    }

    public function emailIndex()
    {

        $filter = $_GET['filter'] ?? null;
        $domainQuery = (new EmailsByDomain())->execute($filter);

        $order = $_GET['order'] ?? null;
        $sort = $_GET['sort'] ?? null;
        $emailQuery = (new AllEmailsService())->execute($order, $sort);


        return require_once __DIR__ . '/../Views/EmailsIndexView.php';

    }

    public function new()
    {

        $messages = (new AddEmailService())->execute($_POST['email'], $_POST['checkbox']);
        if ($messages) {
            return require_once __DIR__ . '/../Views/IndexView.php';
        }
        return require_once __DIR__ . '/../Views/SubscribedView.php';

    }

    public function delete(array $vars)
    {

        (new DeleteEmailService())->execute((int)$vars['id']);

        header('Location: /emails');

    }
}