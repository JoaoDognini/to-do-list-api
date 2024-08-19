<?php

namespace App\Http\Controllers\API;

use App\Models\Tarefa;
use App\Http\Controllers\Controller;
use App\Http\Requests\TarefaRequest;
use App\Http\Resources\TarefaResource;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return TarefaResource::collection($tarefas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefaRequest $request)
    {
        $tarefa = Tarefa::create($request->validated());
        return new TarefaResource($tarefa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarefaRequest $request, Tarefa $tarefa)
    {
        $tarefa->update($request->validated());
        return new TarefaResource($tarefa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return response(null, 204);
    }
}
