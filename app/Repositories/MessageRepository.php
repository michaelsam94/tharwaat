<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository
{
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getAll()
    {
        return $this->message;
    }
    public function store(array $data)
    {
        $message = $this->message->create($data);
        return $message;
    }

    public function delete(int $messageId)
    {
        $message = $this->message->findOrFail($messageId);
        $message->delete();
        return $message;
    }
}
