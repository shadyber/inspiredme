<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('auth')->except('index','show');
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
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
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }


        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'icon'=>'required',

        ]);


        BlogCategory::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(BlogCategory::class,'slug',$request->title.$request->_token),
                 'icon'=>$request->input('icon'),
            ]
        );

        return redirect()->back()->with('success','Article Category Created Succusfully!');

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

        $category=BlogCategory::where('slug',$slug)->first();

        $blogs=$category->Blogs()->orderBy('id','desc')->paginate(9);
     return  view('category.show')->with(['blogs'=>$blogs,'category'=>$category]);
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
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
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
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }


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
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
        $blogCategory->delete();
    }
}
