<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\ImageSlider;
use App\News;
use App\Contacts;
use Mail;
use Mailchimp;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_details=News::orderBy('id', 'DESC')->take(3)->latest()->paginate(3);
        $imageslider_details= ImageSlider::orderBy('id', 'ASC')->latest()->paginate(10);
        return view('user.index', compact('news_details', 'imageslider_details'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);    
            

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.index');
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
            'name' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',
            'requirement' => 'required',
            'message' => 'required'
        ]);
        $input_contact = array(
            'name' => $request->name,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'requirement' => $request->requirement,
            'message' => $request->message,
        );
            Mail::to('pradhanpranaya8@gmail.com')->send(new ContactMail($input_contact));
            Contacts::create($input_contact);
            return redirect('')->with('Success', 'Thank you, We will contact you soon');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getContact() { 

        return view('user.index'); 
      } 

      public function saveContact(Request $request) { 

        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|email',
            'email' => 'required|email',
            'requirement' => 'required',
            'message' => 'required',
        ]);
        $input_contact = array(
            'name' => $request->name,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'requirement' => $request->message,
            'message' => $request->message
         );
            Contact::create($input_contact);
            return redirect('user.index')->with('Success', 'Thank you, We will contact you soon');
            

            
        }
        public function subscribe(Request $request)
        {
            $request->validate([
                'email' => 'required|email'
            ]);
            try{
                if(NewsLetter::isSubscribed($request->email)){
                    return redirect('')->with('error', 'Email already subscribed');
                }
                else{
                    NewsLetter::subscribe($request->email);
                    return redirect('')->with('Success', 'Email subscribed');
                }

            } catch (Exception $e){
                return redirect('')->with('error', $e->getMessage);

            }
        }


    
}
