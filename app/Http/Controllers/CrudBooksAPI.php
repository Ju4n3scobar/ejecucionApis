<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultBookRequest;
use App\Http\Requests\CreateBookRequest;
use App\Models\Books;
use Illuminate\Http\Request;

class CrudBooksAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request)
    {
        Books::create($request->all());
        return response()->json([
            'resp'=>true,
            'message'=>'Libro registrado correctamente',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $books = new Books();
        return $books->get();
    }

    public function showC(ConsultBookRequest $request)
    {
        $books = Books::where('id', $request->id);
        return $books->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultBookRequest $request)
    {
        Books::where('id', $request->id)->update($request->all());
        $books = new Books();
        return $books->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
