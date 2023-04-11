<?php

namespace App\Http\Controllers\Admin;
use App\ImageSlider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageSliderController extends Controller
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
        $imageslider_details= ImageSlider::orderBy('id', 'ASC')->latest()->paginate(10);
        return view('admin.image-slider.index', compact('imageslider_details'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image-slider.create');
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
            'title' => 'required|string|max:30',
            'image'        =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image = $request->file('image');

        $new_image= rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/image-slider'), $new_image);
        $input_imageslider = array(
           'title' => $request->title,
           'image' => $new_image
        );
            ImageSlider::create($input_imageslider);
            return redirect('admin/image-slider')->with('Success', 'Image Slider Detailed Saved!');
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
        $imageslider_details = ImageSlider::find($id);
        return view('admin.image-slider.edit', compact('imageslider_details'));
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
                'image'        =>  'image|max:2048'
            ]);

            $news_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/image-slider'), $news_image);
        }
        else  // this is the else part when you dont want to update the image not required
        {
            $request->validate([
                'title' => 'required|string|max:30',
                'image'        =>  'image|max:2048'
            ]);
        }

        $input_imageslider = array(
            'title' => $request->title,
            'image' => $news_image
        );
  
        ImageSlider::whereId($id)->update($input_imageslider);

        return redirect('admin/image-slider')->with('Success', 'Image Slider Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imageslider_details = Imageslider::findOrFail($id);
        $imageslider_details->delete();

        return redirect('admin/image-slider')->with('error', 'Image Slider Detail Deleted Successfully ');
    }
}
