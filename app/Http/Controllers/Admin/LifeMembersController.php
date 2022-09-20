<?php

namespace App\Http\Controllers\Admin;
use App\LifeMembers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LifeMembersController extends Controller
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
        $lifemembers_details= LifeMembers::orderBy('id', 'ASC')->latest()->paginate(10);
        return view('admin/lifemembers/index', compact('lifemembers_details'))
        ->with('i', (request()->input('page', 1) - 1) * 5);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lifemembers.create');
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
            'name' => 'required|string|max:30', 
            // 'profession'=> 'required|string|max:30',
            // 'contact_no'=> 'required|string|max:20',
            // 'address'=> 'required|string|max:40',
            // 'contribution'=> 'required|string|max:100',
            // 'image'        =>  'image|max:2048'
        ]);
        // $image = $request->file('image');

        // $member_image= rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images/lifemembers'), $member_image);
        $input_lifemembers = array(
            'name'  => $request->name,
            // 'profession'  => $request->profession,
            // 'contact_no' => $request->contact_no,
            // 'address' => $request->address,
            // 'contribution' => $request->contribution,
            // 'image' => $member_image
        );
            LifeMembers::create($input_lifemembers);
            return redirect('admin/lifemembers')->with('Success', 'Life Members Detailed Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lifemembers_details = LifeMembers::findOrFail($id);
        return view('admin.lifemembers.show', compact('lifemembers_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lifemembers_details = LifeMembers::findOrFail($id);
        return view('admin.lifemembers.edit', compact('lifemembers_details'));
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
        // $member_image = $request->hidden_image;
        // $image = $request->file('image');
        // if($image != '')  
        // {
        //     $request->validate([
        //         'name' => 'required|string|max:30', 
        //         'profession'=> 'required|string|max:20',
        //         'contact_no'=> 'required|string|max:20',
        //         'address'=> 'required|string|max:40',
        //         'contribution'=> 'required|string|max:100',
        //         'image'        =>  'image|max:2048'
        //     ]);

        //     $member_image = rand() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images/lifemembers'), $member_image);
        // }
        // else  // this is the else part when you dont want to update the image not required
        // {
            $request->validate([
                'name' => 'required|string|max:30', 
                // 'profession'=> 'required|string|max:20',
                // 'contact_no'=> 'required|string|max:20',
                // 'address'=> 'required|string|max:40',
                // 'contribution'=> 'required|string|max:100',
                // 'image'        =>  'image|max:2048'
            ]);
        // }
        $input_members = array(
            'name'  => $request->name,
            // 'profession'  => $request->profession,
            // 'contact_no' => $request->contact_no,
            // 'address' => $request->address,
            // 'contribution' => $request->contribution,
            // 'image' => $request->member_image
        );
        LifeMembers::whereId($id)->update($input_members);
        return redirect('admin/lifemembers')->with('Success', 'Life Members Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lifemembers_details = LifeMembers::findOrFail($id);
        $lifemembers_details->delete();
        return redirect('admin/lifemembers')->with('error', 'Life Members Detail Deleted Successfully ');
    }
    public function lifemembersearch(Request $request)
    {
        $lifemember_search = $request->get('lifemember-query');
        $lifemembers_details = LifeMembers::where('name' , 'like', '%'.$lifemember_search.'%')->paginate(20);
        return view ('admin.lifemembers.results',compact('lifemembers_details'));
    }
}
