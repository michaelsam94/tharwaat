<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\MessageRepository;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct(MessageRepository $messageRepo)
    {
        $this->messageRepo = $messageRepo;
    }

    public function index()
    {
        $messages = $this->messageRepo->getAll()->paginate(8);
        return view('admin.pages.messages.index')->with(compact('messages'));
    }
}
