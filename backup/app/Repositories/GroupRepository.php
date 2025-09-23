<?php

namespace App\Repositories;

use App\Models\Group;

class GroupRepository
{
    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function getAll()
    {
        return $this->group;
    }

    public function getGroupById(int $groupId)
    {
        return $this->group->findOrFail($groupId);
    }

    public function getGroupByTitle(string $groupTitle)
    {
        return $this->group->with('content')->where('title', $groupTitle)->first();
    }
    public function store(array $data)
    {
        $group = $this->group->create($data);
        return $group;
    }

    public function update(array $data, int $groupId)
    {
        $group = $this->group->findOrFail($groupId);
        $group->update($data);
        return $group;
    }

    public function delete(int $groupId)
    {
        $group = $this->group->findOrFail($groupId);
        $group->delete();
        return $group;
    }
}
