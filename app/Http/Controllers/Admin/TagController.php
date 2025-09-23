<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Repositories\TagRepository;
use Exception;
class TagController extends Controller
{
    public function __construct(TagRepository $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }

    public function index()
    {
        $tags = $this->tagRepo->getAll()->paginate(8);
        return view('admin.pages.tags.index')->with(compact('tags'));
    }

    public function create()
    {
        return view('admin.pages.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        try {
            $this->tagRepo->store($request->validated());
            return redirect()->back()->with('success','Tag created successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    public function delete(int $tagId)
    {
        try {
            $this->tagRepo->delete($tagId);
            return redirect()->back()->with('success','Tag deleted successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }
}
