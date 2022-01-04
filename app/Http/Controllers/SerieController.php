<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Http\Resources\SerieResource;
use Illuminate\Support\Facades\Validator;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $serie = Serie::all();
        return response([ 'series' => SerieResource::collection($serie), 
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

        $validator = Validator::make($data, [
            'name' => 'required|max:50',
            'age' => 'required|max:50',
            'job' => 'required|max:50',
            'salary' => 'required|max:50'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 
            'Validation Error']);
        }

        $series = Serie::create($data);

        return response([ 'series' => new SerieResource($series), 
        'message' => 'Success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $series
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $series)
    {
        
        return response([ 'series' => new 
        SerieResource($series), 'message' => 'Success'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $series)
    {
        
        $series->update($request->all());

        return response([ 'series' => new SerieResource($series), 'message' => 'Success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        
        $serie->delete();

        return response(['message' => 'Serie deleted']);
    }
}
