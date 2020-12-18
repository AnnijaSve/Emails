<?php

namespace App\Models;

class Email

{
    private int $id;
    private string $email;
    private string $createdAt;

    public function __construct(int $id, string $email, string $createdAt)
    {
        $this->id = $id;
        $this->email = $email;
        $this->createdAt = $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public static function create(array $data): Email
    {
        return new self(
            (int)$data['id'],
            $data['email'],
            $data['created_at']
        );
    }

}