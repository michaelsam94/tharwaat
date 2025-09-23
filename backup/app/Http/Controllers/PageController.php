<?php

namespace App\Http\Controllers;

use App\Repositories\GroupRepository;
use App\Repositories\JobRepository;
use App\Repositories\MessageRepository;
use App\Services\Helper\FileService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(
        GroupRepository $groupRepo,
        MessageRepository $messageRepo,
        JobRepository $jobRepo
    )
    {
        $this->groupRepo = $groupRepo;
        $this->messageRepo = $messageRepo;
        $this->jobRepo = $jobRepo;
    }

    public function aboutUs()
    {
        return view('front.pages.about_us');
    }

    public function contactUs()
    {
        return view('front.pages.contact_us');
    }

    public function joinUs()
    {
        return view('front.pages.join_us');
    }

    public function sendMessage(Request $request)
    {
        $this->messageRepo->store($request->all());
        return redirect()->back()->with('success','Message Sent successfully');
    }

    public function uploadResume(Request $request)
    {
        if ($request->hasFile('cv'))
            $request['resume'] = FileService::saveFile($request->cv, 'resumes');
        $this->jobRepo->store($request->all());
        return redirect()->back()->with('success','Job Submitted successfully');
    }


    public function group(string $groupTitle)
    {
        $groupDetails = $this->groupRepo->getGroupByTitle($groupTitle);
        return view('front.pages.group')->with(compact('groupDetails'));
    }
}
