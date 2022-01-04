<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleoInformal;
use App\Http\Resources\EmpleoInformalResource;
use Illuminate\Support\Facades\Validator;

class EmpleoInformalController extends Controller
{
    public function index()
    {
       $empleoInformals = EmpleoInformal::all(); 
       return response([ 'empleoInformals' => EmpleoInformalResource::collection($empleoInformals), 
       'message' => 'Successful'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmpleoInformal  $empleo_informal
     * @return \Illuminate\Http\Response
     */
    public function show(EmpleoInformal $empleo_informal)
    {
        return response(['empleo_informal' => new 
        EmpleoInformalResource($empleo_informal), 'message' => 'Success'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpleoInformal  $empleo_informal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpleoInformal $empleo_informal)
    {
        $empleo_informal->update($request->all());

        return response([ 'empleo_informal' => new EmpleoInformalResource($empleo_informal), 'message' => 'Success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpleoInformal  $empleo_informal
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpleoInformal $empleo_informal)
    {
        $empleo_informal->delete();
        return response(['message' => 'EmpleoInformal deleted']);
    }
}
