<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function getAll()
    {
        return $this->tag;
    }
    public function store(array $data)
    {
        $tag = $this->tag->create($data);
        return $tag;
    }

    public function update(array $data, int $tagId)
    {
        $tag = $this->tag->findOrFail($tagId);
        $tag->update($data);
        return $tag;
    }

    public function delete(int $tagId)
    {
        $tag = $this->tag->findOrFail($tagId);
        $tag->delete();
        return $tag;
    }
}
