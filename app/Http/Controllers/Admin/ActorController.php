<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Actor;

class ActorController extends Controller
{
    public function __construct()
    {
        $this->middleware('authadmin');
        View::share('title','Actors');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::orderBy('name')->paginate(15);
        return view('admin.actor',['actors'=>$actors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createactor');
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
            'name' => 'required',
            'biodata' => 'required',
            'website' => 'nullable|url',
            'foto' => 'image|max:2000',
        ]);

        if($request->hasFile('foto')){
            $uploadedFile = $request->file('foto');        
            $path = $uploadedFile->move('foto',md5(date('Y-m-d H:i:s')).".".$request->file('foto')->getClientOriginalExtension());
            Actor::create([
                'name' => $request->name,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'biodata' => $request->biodata,
                'website' => $request->website,
                'foto' => $path
            ]);
        }
        else{
             Actor::create([
                'name' => $request->name,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'biodata' => $request->biodata,
                'website' => $request->website,
            ]);
        }

        return redirect()->route('actor.index')->with('success','Actor successfully saved in the database!');
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
}
