<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('layouts.frontend.todolist.index',[
            'todolists' => Frontend::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.frontend.todolist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
            'title' => 'required',
        ]);
        // error part
        // insert part
        Frontend::insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('home')->with('success','Todo list created successfully');
        // insert part
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todolist = Frontend::find($id);
        return view('layouts.frontend.todolist.edit',compact('todolist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // upadate part
        Frontend::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        // upadate part
        return redirect()->route('home')->with('success','Todo list update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo_delete = Frontend::find($id);
        $todo_delete ->delete();
        return back()->with('warning','Todo list delete successfully');;
    }

    // incomplete todolist
    public function IncompleteTodoList($id)
    {
        Frontend::find($id)->update([
            'status' => '0',
        ]);
        return back()->with('success','Your To Do Is Complete');
    }
    // end methods


    //complete todolist
    public function CompleteTodoList($id)
    {
        Frontend::findOrFail($id)->update([
            'status'=> '1',
        ]);
        return back()->with('success','Your To Do Is Incomplete');

    }

    // end
}
