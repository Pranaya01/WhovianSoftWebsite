<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\News;
use App\Http\Resources\News as NewsResource;
use App\Http\Controllers\Controller;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        $news_details= News::orderBy('id', 'DESC')->latest()->paginate(10);
        return view('admin/news/index', compact('news_details'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);   
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'date' => 'required|date|max:20',
            'news_title' => 'required|string',
            'news_description' => 'required|string',
            'image'        =>  'image|max:2048'
        ]);
        $image = $request->file('image');

        $new_image= rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/news'), $new_image);
        $input_news = array(
            'date' => $request->date,
           'news_title' => $request->news_title,
        //    'news_type' => $request->news_type,
           'news_description' => $request->news_description,
           'image' => $new_image
        );
            News::create($input_news);
            return redirect('admin/news')->with('Success', 'News Detailed Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news_details = News::findOrFail($id);
        return view('admin.news.show', compact('news_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_details = News::findOrFail($id);
        return view('admin.news.edit', compact('news_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_image = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')  
        {
            $request->validate([
                'date' => 'required|date|max:20',
                'news_title' => 'required|string',
                'news_description' => 'required|string',
                'image'        =>  'image|max:2048'
            ]);

            $news_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $news_image);
        }
        else  // this is the else part when you dont want to update the image not required
        {
            $request->validate([
                'date' => 'required|date|max:20',
                'news_title' => 'required|string',
                'news_description' => 'required|string',
                'image'        =>  'image|max:2048'
            ]);
        }

        $input_news = array(
            'date' => $request->date,
            'news_title' => $request->news_title,
            'news_description' => $request->news_description,
            'image' => $news_image
        );
  
        News::whereId($id)->update($input_news);

        return redirect('admin/news')->with('Success', 'News Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news_details = News::findOrFail($id);
        $news_details->delete();

        return redirect('admin/news')->with('error', 'News Detail Deleted Successfully ');
    }

    public function newsearch(Request $request)
    {
        $newsearch = $request->get('news_query');
        $news_details = News::where('news_title' , 'like', '%'.$newsearch.'%')->paginate(20);
        return view ('admin.news.results',compact('news_details'));
    }
}
