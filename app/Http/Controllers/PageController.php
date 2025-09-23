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
    ) {
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

    public function richee()
    {
        return view('front.pages.richee');
    }

    public function atasoy()
    {
        return view('front.pages.atasoy');
    }

    public function financial()
    {
        return view('front.pages.financial');
    }

    public function energy()
    {
        return view('front.pages.energy');
    }

    public function mining()
    {
        return view('front.pages.mining');
    }


    public function tourism()
    {
        return view('front.pages.tourism');
    }


    public function auto()
    {
        return view('front.pages.auto');
    }

    public function retail()
    {
        return view('front.pages.retail');
    }

    public function tech()
    {
        return view('front.pages.tech');
    }

    public function adv()
    {
        return view('front.pages.adv');
    }



    public function sendMessage(Request $request)
    {
        $this->messageRepo->store($request->all());
        return redirect()->back()->with('success', 'Message Sent successfully');
    }

    public function uploadResume(Request $request)
    {
        if ($request->hasFile('cv'))
            $request['resume'] = FileService::saveFile($request->cv, 'resumes');
        $this->jobRepo->store($request->all());
        return redirect()->back()->with('success', 'Job Submitted successfully');
    }


    public function group(string $groupTitle)
    {
        $groupDetails = $this->groupRepo->getGroupByTitle($groupTitle);
        if (!$groupDetails) {
            abort(404, 'Group not found');
        }
        return view('front.pages.group')->with(compact('groupDetails'));
    }
}
