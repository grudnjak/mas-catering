<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use App\Mail\mailus;

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
       $contactus->steviloLjudi = $request->input('steviloLjudi');
       $contactus->vrsta = $request->input('vrsta')  ;
       $contactus->body = $request->input('body')  ;

       $contactus->save();
    
       /*Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('body')
       ), function($message)
   {
       $message->from('info@mas-catering.si');
       $message->to('info@mas-catering.si', 'Admin')->subject('Povpraševanje');
   });*/
   //$mail = new \stdClass();
Mail::to('info@mas-catering.si')->send(new mailus(array(
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'user_message' => $request->input('body'),
    'date' => $request->input('date'),
    'steviloLjudi' => $request->input('steviloLjudi'),
    'vrsta' => $request->input('vrsta'),
    
)));

    return back()->with('success', 'Thanks for contacting us!'); 


      
   }
}