<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Notifications\BlogCreatedNotification;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Image;




class BlogController extends Controller
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

        $blogs= Blog::orderBy('id','desc')->paginate(9);
        return view('blog.index')->with(['blogs'=>$blogs])->with('error','You Don\'t Have This Permission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        //
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
        return view('blog.create');


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
            'tags'=>'required',
            'blog_category_id'=>'required',

            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/blog/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnails/' . $file_name, 15);

            $request->photo->move(public_path('images/blog'),$newImageName);

        }

//dd($request);
      $lastblog=  Blog::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Blog::class,'slug',$request->title.$request->_token),
                'photo'=>'/images/blog/'.$newImageName,
                'thumb'=>'/images/blog/thumbnails/'.$newImageName,
                'tags'=>$request->input('tags'),

                'user_id'=>auth()->user()->id,

                'blog_category_id'=>$request->input('blog_category_id'),
            ]
        );


        $users=User::all();
        foreach ($users as $user){
            $user->Notify(new BlogCreatedNotification($lastblog));
        }

        return redirect()->back()->with('success','Article Created Succusfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
$blog=Blog::where('slug',$slug)->first();
$blog->visit++;
$blog->save();

        return view('blog.show')->with('blog',$blog);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        return view('blog.edit')->with(['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\t Have This Permission');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\t Have This Permission');
        }

    }


    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
}

