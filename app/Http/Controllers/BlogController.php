<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralException;
use App\Http\Requests\admin\Blog\CreateBlogRequest;
use App\Http\Requests\admin\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Repositories\admin\BlogRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public $blogRepository;


    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function blog_list(Request $request){
        if ($request->ajax()){
            $data = Blog::query();
            try {
                $data->get();
                return datatables($data)
                    ->addColumn('checkbox', function ($item) {
                        return '<input type="checkbox" id="'.$item->id.'" name="someCheckbox" />';
                    })->editColumn('image', function($item) {
                        return '<img src="'.asset('storage/'.$item->image).'" width="100px" />';
                    })->editColumn('title_en', function($item) {
                        return Str::limit($item->title_en,30);
                    })->editColumn('title_ar', function($item) {
                        return Str::limit($item->title_ar,30);
                    })->addColumn('action', function ($item) {
                        return '<div class="activity-icon">
                     <ul style="list-style: none">
                        <li><a id="delete" data-blog="'.$item->id.'" data-url="' . route('blogs_delete') . '" class=""><i class="mdi mdi-trash-can"></i></a></li>
                        <li><a  href="' . route('blogs.edit', $item->id) . '" class=""><i class="mdi mdi-grease-pencil"></i></a></li>
                        <li><a  href="' . route('blogs.show', $item->id) . '" class=""><i class="mdi mdi-eye"></i></a></li>
                     </ul>
                </div>';
                    })->rawColumns(['checkbox','image','action'])->make(true);
            } catch (\Exception $e) {
                return new GeneralException($e);
            }
        }
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateBlogRequest $request)
    {
        $this->blogRepository->create($request->all());
        session()->flash('success', 'Blog has been added successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $this->blogRepository->update($blog,$request->all());
        session()->flash('success', 'Blog has been updated successfully!');
        return redirect()->back();
    }

    public function delete_blog(Request $request){
        $this->blogRepository->deleteById($request->id);
        session()->flash('success', 'Blog has been deleted successfully!');
    }
}
