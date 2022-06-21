<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\SummernoteWithUpload;

class ProcedureController extends Controller
{
    use SummernoteWithUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = Procedure::all();
        return view('admin.procedure.index', compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.procedure.create');
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
            'title' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'editor1' => 'required',
        ]);
        $procedure = new Procedure;
        $procedure->title = $request->title;
        $procedure->description = htmlspecialchars_decode($this->summernote($request['editor1']));
        $procedure->image_path = Storage::disk('public')->put('procedure', $request->file('photo'));
        $procedure->save();
        return redirect()->route('procedure');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure, $id)
    {
        $procedure = Procedure::find($id);
        return view('admin.procedure.edit', compact('procedure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procedure = Procedure::find($id);
        $request->validate([
            'title' => 'required',
            'editor1' => 'required',
        ]);
        $procedure->title = $request->title;
        $procedure->description = htmlspecialchars_decode($this->summernote($request['editor1']));
        if ($request->file('photo')) {
            $procedure->image_path = Storage::disk('public')->put('procedure', $request->file('photo'));
        }
        $procedure->save();
        return redirect()->route('procedure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        return redirect()->route('procedure');
    }
}
