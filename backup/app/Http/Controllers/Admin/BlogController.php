<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Repositories\BlogRepository;
use App\Repositories\TagRepository;
use App\Services\Helper\FileService;
use Exception;

class BlogController extends Controller
{
    public function __construct(BlogRepository $blogRepo, TagRepository $tagRepo)
    {
        $this->blogRepo = $blogRepo;
        $this->tagRepo = $tagRepo;
    }

    public function index()
    {
        $blogs = $this->blogRepo->getAll()->paginate(8);
        return view('admin.pages.blogs.index')->with(compact('blogs'));
    }

    public function create()
    {
        $tags = $this->tagRepo->getAll()->get();
        return view('admin.pages.blogs.create')->with(compact('tags'));
    }

    public function store(StoreBlogRequest $request)
    {
        try {
            if ($request->hasFile('img'))
                $request['image'] = FileService::saveFile($request->img, 'blogs');
            $this->blogRepo->store($request->all());
            return redirect()->back()->with('success','Blog created successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function delete(int $tagId)
    {
        try {
            $this->blogRepo->delete($tagId);
            return redirect()->back()->with('success','Tag deleted successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }
}
