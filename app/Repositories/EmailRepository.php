<?php

namespace App\Repositories;

use App\Models\Email;

class EmailRepository
{
    public function save(string $email): void
    {
        query()
            ->insert('emails')
            ->values([
                'email' => ':email',
            ])
            ->setParameters([
                'email' => $email,
            ])
            ->execute();
    }

    public function findByEmail(string $email)
    {
        return $emailQuery = query()
            ->select('*')
            ->from('emails')
            ->where('email = :email')
            ->setParameter('email', $email)
            ->execute()
            ->fetchAssociative();
    }

    public function getAll(string $order, string $sort): array
    {

        return $emailQuery = query()
            ->select('*')
            ->from('emails')
            ->orderBy($order, $sort)
            ->execute()
            ->fetchAllAssociative();
    }

    public function getByDomain(string $result)
    {

        return $domainQuery = query()
            ->select('*')
            ->from('emails')
            ->where("email like {$result}")
            ->execute();

    }

    public function delete(int $id): void
    {
        query()
            ->delete('emails')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();
    }
}