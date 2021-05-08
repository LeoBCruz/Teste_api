<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    protected $model;
    public function __construct (Matricula $model){
        $this->model=$model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matricula = $this->model->all();
        return $matricula;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula = $this->model->fill($request->all());
        $matricula->save();
        return $matricula;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matricula = $this->model->findOrFail($id);
        return $matricula;
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
        $matricula = $this->model->findOrFail($id);
        $matricula = $this->model->fill($request->all());
        $matricula->save();
        return $matricula;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $matricula = $this->model->findOrFail($id);
    //     $matricula->delete();
    //     return $matricula;
    // }
}