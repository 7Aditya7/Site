<?php

namespace App\Http\Controllers;

use App\Secretary;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secretary/index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
            'prefix' => 'required',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'blood_group' => 'required',
            'memb_number' => 'required',
            'formal_photo' =>  'image|nullable|max:1999',
        ]);
        

        if($request->hasFile('formal_photo')){
            $filenameWithExt = $request->file('formal_photo')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('formal_photo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('formal_photo')->storeAs('public/formal_photo',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $secretaries = new Secretary([
            'prefix' => $request->prefix,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'blood_group' => $request->blood_group,
            'membership_number' => $request->memb_number,
            ]);
        $secretaries->formal_photo = $fileNameToStore;
        $secretaries->save();
        echo "Database updated";
            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function show(Secretary $secretary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretary $secretary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretary $secretary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretary $secretary)
    {
        //
    }
}
