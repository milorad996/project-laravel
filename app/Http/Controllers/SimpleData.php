<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest as RequestsDataRequest;
use Illuminate\Http\Request;
use App\Requests\DataRequest;
class SimpleData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            [
            
                    "name" => "Route that returns some data",
                    "type"=> "GET",
                    "description"=> "This route returns some data"
               
            ]
            );
            
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsDataRequest $request)
    {
        $request->validated();

        $value = $request->body('value');

        return response()->json([ "value" => $value . " - modified" ]);


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
