<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\GroupRepository;
use App\Services\Helper\FileService;
use Illuminate\Http\Request;
use Exception;

class GroupController extends Controller
{
    public function __construct(GroupRepository $groupRepo)
    {
        $this->groupRepo = $groupRepo;
    }

    public function index()
    {
        $groups = $this->groupRepo->getAll()->paginate(8);
        return view('admin.pages.groups.index')->with(compact('groups'));
    }

    public function create()
    {
        return view('admin.pages.groups.create');
    }

    public function edit(int $groupId)
    {
        $group = $this->groupRepo->getGroupById($groupId);
        return view('admin.pages.groups.edit')->with(compact('group'));
    }

    public function store(Request $request)
    {
        try {
            if ($request->hasFile('img'))
                $request['logo'] = FileService::saveFile($request->img, 'groups');
            $this->groupRepo->store($request->all());
            return redirect()->back()->with('success','Group created successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function update(Request $request, $groupId)
    {
        try {
            if ($request->hasFile('img'))
                $request['logo'] = FileService::saveFile($request->img, 'groups');
            $this->groupRepo->update($request->all(), $groupId);
            return redirect()->back()->with('success','Group updated successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function delete(int $groupId)
    {
        try {
            $this->groupRepo->delete($groupId);
            return redirect()->back()->with('success','Group deleted successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }
}
