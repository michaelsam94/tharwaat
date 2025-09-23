<?php

namespace App\Repositories;

use App\Models\Blog;
use DB;
class BlogRepository
{
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog;
    }
    public function store(array $data)
    {
        $blog = $this->blog->create($data);
        foreach ($data['tags'] as $tag){
            DB::table('tags_blogs')->insert(['tag_id'=>$tag, 'blog_id'=> $blog->id]);
        }
        return $blog;
    }

    public function update(array $data, int $tagId)
    {
        $blog = $this->blog->findOrFail($tagId);
        $blog->update($data);
        return $blog;
    }

    public function delete(int $tagId)
    {
        $blog = $this->blog->findOrFail($tagId);
        $blog->delete();
        return $blog;
    }
}
