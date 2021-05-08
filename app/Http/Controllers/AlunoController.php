<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    protected $model;
    public function __construct (Aluno $model){
        $this->model=$model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = $this->model->all();
        return $aluno;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = $this->model->fill($request->all());
        $aluno->save();
        return $aluno;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = $this->model->findOrFail($id);
        return $aluno;
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
        $aluno = $this->model->findOrFail($id);
        $aluno = $this->model->fill($request->all());
        $aluno->save();
        return $aluno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = $this->model->findOrFail($id);
        $aluno->delete();
        return $aluno;
    }
}
