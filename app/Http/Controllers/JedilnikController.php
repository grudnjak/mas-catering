<?php

namespace App\Http\Controllers;

use App\Jedilnik;
use Illuminate\Http\Request;

class JedilnikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jedilniki = Jedilnik::orderBy('created_at','desc')->limit(3)->get();
        return view('jedilniki.index')->with('jedilniki',$jedilniki);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jedilniki.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'cover_image' => 'image|nullable|max:1999',
           
        ]);
        //Handle File Upload     
        if($request->hasFile('cover_image')){
                //Handle File Upload
  if($request->hasFile('cover_image')){
   //Get filename with the extension
    $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
    
   //Get just filename
   $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
   
   //Get just ext
   $extension = $request->file('cover_image')->guessClientExtension();
   
   //FileName to store
   $fileNameToStore = time().'.'.$extension;
   
   //Upload Image
   $path = $request->file('cover_image')->storeAs('public/cover_images/',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
         
        //create post
              $jedilnik = new Jedilnik;
              $jedilnik->user_id =auth()->user()->id; 
              $jedilnik->cover_image= $fileNameToStore;
              $jedilnik->save();
              return redirect('/jedilniki')->with('success','Jedilnik added');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jedilnik  $jedilnik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jedilnik = Jedilnik::find($id);
        return view('jedilniki.show')->with('jedilnik', $jedilnik );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jedilnik  $jedilnik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jedilnik = Jedilnik::find($id);
        //check for correct user
        if(auth()->user()->id !== $jedilnik->user_id ){
            return redirect('/jedilniki ')->with('error', 'Unautharize page' );
        }
        
            return view('jedilniki.edit')->with('jedilnik', $jedilnik );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jedilnik  $jedilnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'cover_image' => 'required',
           
        ]);
          
            //Handle File Upload
if($request->hasFile('cover_image')){
//Get filename with the extension
$filenamewithExt = $request->file('cover_image')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
//Get just ext
$extension = $request->file('cover_image')->guessClientExtension();
//FileName to store
$fileNameToStore = time().'.'.$extension;
//Upload Image
$path = $request->file('cover_image')->storeAs('public/cover_images/',$fileNameToStore);
    }
     
        //create post
              $jedilnik = Jedilnik::find($id);
              if($request->hasFile('cover_image')){
                $jedilnik->cover_image = $fileNameToStore;
              }
              $jedilnik->save();
              return redirect('/jedilniki')->with('success','Jedilnik Updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jedilnik  $jedilnik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jedilnik = Jedilnik::find($id);
        if(auth()->user()->id !== $jedilnik->user_id ){
            return redirect('/jedilniki ')->with('error', 'Unautharize page' );
        }
        
        $jedilnik ->  delete();
        return redirect('/jedilniki')->with('success','Jedilnik Deleted ');
    }
}
