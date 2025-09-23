<?php

namespace App\Repositories;

use App\Models\Group;
use App\Models\GroupContent;

class GroupContentRepository
{
    public function __construct(GroupContent $groupContent, Group $group)
    {
        $this->groupContent = $groupContent;
        $this->group = $group;
    }

    public function getAll(int $groupId)
    {
        return $this->groupContent->where('group_id',$groupId);
    }

    public function getGroupContentById(int $groupContentId)
    {
        return $this->groupContent->findOrFail($groupContentId);
    }
    public function store(array $data)
    {
        $last = $this->groupContent->where('group_id',$data['group_id'])->orderBy('id','desc')->first();
        if($last){
            if($last->reverse == false)
                $data['reverse'] = true;
        }
        $groupContent = $this->groupContent->create($data);
        return $groupContent;
    }

    public function update(array $data, int $groupContentId)
    {
        $groupContent = $this->groupContent->findOrFail($groupContentId);
        $groupContent->update($data);
        return $groupContent;
    }

    public function delete(int $groupId)
    {
        $groupContent = $this->groupContent->findOrFail($groupId);
        $groupContent->delete();
        return $groupContent;
    }
}
