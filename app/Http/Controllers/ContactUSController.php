<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contactUS');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
      
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'date' => 'required',
        'steviloLjudi' => 'required',
        'vrsta' => 'required',
        'body' => 'required'
        ]);
     
     //
      $contactus = new ContactUS;
       $contactus->name = $request->input('name')  ;
       $contactus->email = $request->input('email')  ;
       $contactus->date = $request->input('date')  ;
       $contactus->steviloLjudi = $request->input('steviloLjudi	')  ;
       $contactus->vrsta = $request->input('vrsta')  ;
       $contactus->body = $request->input('body')  ;

       $contactus->save();

       //ContactUS::create($request->all());

       return back()->with('success', 'Thanks for contacting us!');

      
   }
}