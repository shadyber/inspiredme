<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
class BlogCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'icon'=>'required',

        ]);


        BlogCategory::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                 'icon'=>$request->input('icon'),
            ]
        );

        return redirect()->back()->with('message','Article Category Created Succusfully!');

    }

    /**
     * Display the specified resource.
     *
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        $blogCategory=BlogCategory::where('slug',$slug)->first();
        //
        $blogs=$blogCategory->blogs;
        return view('blog.index')->with(['blogs'=>$blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        //
    }
}
