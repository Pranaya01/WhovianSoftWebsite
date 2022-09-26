<?php

namespace App\Http\Controllers\Admin;
use App\ResourceSlider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceSliderController extends Controller
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
        $resourceslider_details= ResourceSlider::orderBy('id', 'ASC')->latest()->paginate(10);
        return view('admin.resource-slider.index', compact('resourceslider_details'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resource-slider.create');

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
            'image'        =>  'image|max:2048'
        ]);
        $image = $request->file('image');

        $new_image= rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/resource-slider'), $new_image);
        $input_resourceslider = array(
           'title' => $request->title,
           'image' => $new_image
        );
            ResourceSlider::create($input_resourceslider);
            return redirect('admin/resource-slider')->with('Success', 'Resource Slider Detailed Saved!');
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
        $resourceslider_details = ResourceSlider::find($id);
        return view('admin.resource-slider.edit', compact('resourceslider_details'));
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
            $image->move(public_path('images/resource-slider'), $news_image);
        }
        else  // this is the else part when you dont want to update the image not required
        {
            $request->validate([
                'title' => 'required|string|max:30',
                'image'        =>  'image|max:2048'
            ]);
        }

        $input_resourceslider = array(
            'title' => $request->title,
            'image' => $news_image
        );
  
        ResourceSlider::whereId($id)->update($input_resourceslider);

        return redirect('admin/resource-slider')->with('Success', 'Resource Slider Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resourceslider_details = Resourceslider::findOrFail($id);
        $resourceslider_details->delete();

        return redirect('admin/resource-slider')->with('error', 'Resource Slider Detail Deleted Successfully ');
    }
}
