<?php

namespace App\Http\Controllers\Admin;
use App\Resources;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
        $resources_details = Resources::orderBy('id', 'ASC')->latest()->paginate(10);
        return view('admin.resources.index', compact('resources_details'))
                    ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.create');
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
            'title' => 'required|string|max:200',
            'image'        =>  'required','mimes:pdf,docx','max:2048'
        ]);
        $image = $request->file('image');

        $new_image= rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('files'), $new_image);
        $input_resource = array(
           'title' => $request->title,
           'image' => $new_image
        );
            Resources::create($input_resource);
            return redirect('admin/resources')->with('Success', 'Resources Detailed Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resources_details = Resources::find($id);
        return view('admin.resources.edit', compact('resources_details'));
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
                'title' => 'required',
                'image'        =>  'required','mimes:pdf,docx','max:2048'

            ]);

            $news_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('files'), $news_image);
        }
        else  // this is the else part when you dont want to update the image not required
        {
            $request->validate([
                'title' => 'required|string|max:30',
                'image'        =>  'required','mimes:pdf,docx','max:2048'
            ]);
        }

        $input_imageslider = array(
            'title' => $request->title,
            'image' => $news_image
        );
  
        Resources::whereId($id)->update($input_imageslider);

        return redirect('admin/resources')->with('Success', 'Resources Details Updated Successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource_details = Resources::findOrFail($id);
        $resource_details->delete();

        return redirect('admin/resources')->with('error', 'Image Slider Detail Deleted Successfully ');
    }
}
