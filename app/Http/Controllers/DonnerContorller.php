<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donner;
use Illuminate\Support\Facades\Auth;

class DonnerContorller extends Controller
{
    public function __construct(){
        $this->middleware('role', ['except' => ['store','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'phone' => 'required',
            'group' => 'required',
            'history'=>'numeric'
        ]);
        $donner = new Donner();
        $donner->name = $request->name;
        $donner->reg_num = $request->reg_num;
        $donner->email = $request->email;
        $donner->phone = $request->phone;
        $donner->group = $request->group;
        $donner->location = $request->location;
        $donner->history = $request->history;
        $donner->date = $request->date;
        $donner->team = $request->team;
        $donner->save();
        if(NULL!=session('role')){
            $status=1;
            return view('home')->with(compact('status'));
        }
        return view('messages.success_save');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donner=Donner::find($id);
        if(!is_null($donner)){
            $title='Update Donner';
            $route='donor.update';
            $data=compact('donner','title','route');
            return view('edit')->with($data);
        }
        else{
            echo 'ID wrong';
        }
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
        if($request->ajax()){
            $request->validate([
                'last_call' => 'required',
                'remarks' => 'required',
            ]);
            $donner =Donner::findOrFail($id);
            $donner->last_call = $request->last_call;
            $donner->remarks = $request->remarks;
            $donner->remarks_by = session('id');
            if($donner->update()){
                return response()->json([true]);
            }
            else{
                return response()->json([false]);
            }
        }
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'group' => 'required'
        ]);
        $donner =Donner::findOrFail($id);
        $donner->name = $request->name;
        $donner->reg_num = $request->reg_num;
        $donner->email = $request->email;
        $donner->phone = $request->phone;
        $donner->group = $request->group;
        $donner->location = $request->location;
        $donner->history = $request->history;
        $donner->date = $request->date;
        $donner->team = $request->team;
        $donner->update();
        return view('messages.success_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donner=Donner::find($id);
        if(!is_null($donner)){
            $donner->delete();
        }
        return redirect()->back();
    }
}
