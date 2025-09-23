<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\GroupContentRepository;
use App\Repositories\GroupRepository;
use App\Services\Helper\FileService;
use Illuminate\Http\Request;
use Exception;
class GroupContentController extends Controller
{
    public function __construct(GroupContentRepository $groupContentRepo, GroupRepository $groupRepo)
    {
        $this->groupContentRepo = $groupContentRepo;
        $this->groupRepo = $groupRepo;
    }

    public function index(int $groupId)
    {
        $group_content = $this->groupContentRepo->getAll($groupId)->paginate(4);
        $group = $this->groupRepo->getGroupById($groupId);
        return view('admin.pages.group_content.index')->with(compact('group_content','group'));
    }

    public function create(int $groupId)
    {
        $group = $this->groupRepo->getGroupById($groupId);
        return view('admin.pages.group_content.create')->with(compact('group'));
    }

    public function edit(int $groupContentId)
    {
        $groupContent = $this->groupContentRepo->getGroupContentById($groupContentId);
        return view('admin.pages.group_content.edit')->with(compact('groupContent'));
    }

    public function store(Request $request, int $groupId)
    {
        $request['group_id'] = $groupId;
        try {
            if ($request->hasFile('img'))
                $request['image'] = FileService::saveFile($request->img, 'groups_content');
            $this->groupContentRepo->store($request->all());
            return redirect()->route('admin.groupsContent.show',$groupId)->with('success','Group Content created successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function update(Request $request, $groupContentId)
    {
        try {
            if ($request->hasFile('img'))
                $request['image'] = FileService::saveFile($request->img, 'groups_content');
            $group = $this->groupContentRepo->update($request->all(), $groupContentId);
            return redirect()->route('admin.groupsContent.show',$group->group_id)->with('success','Group Content updated successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function delete(int $groupContentId)
    {
        try {
            $groupId = $this->groupContentRepo->getGroupContentById($groupContentId)->group_id;
            $this->groupContentRepo->delete($groupContentId);
            return redirect()->route('admin.groupsContent.show',$groupId)->with('success','Group Content deleted successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }
}
