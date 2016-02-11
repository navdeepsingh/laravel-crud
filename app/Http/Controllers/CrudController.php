<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = Crud::all();

        return View::make('crud.index')->with('crud', $crud);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'crud_level' => 'required'
        ]);
        Crud::create($input);
        Session::flash('flash_message', 'CRUD record created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud = Crud::findOrFail($id);
        return View('crud.show')->with('crud', $crud);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::findorfail($id);
        return View('crud.edit')->with('crud', $crud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = Crud::findorfail($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        $crud->fill($input)->save();

        Session::flash('flash_message', 'Updated Successfully');

        return redirect()->back();



        return View('crud.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);

        $crud->delete();

        Session::flash('flash_message', 'Deleted successfully!');

        return redirect()->route('crud.index');
    }
}
