<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                                             //On affiche tout les post
        $livre =  Livre::all();   //  <- return tout les post de la BDD
        
        return view('livre.index', compact('livre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                                        // On va vouloir créer un nouveau post
        return view('livre.create');                                  
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
        {
            $request->validate([
                'author'=>'required',
                'title'=>'required',
                'genre'=>'required',
                'quantity'=>'required'
                ]);
                livre::create($request->all());
        
                return redirect()->route('livre.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        // return view('post.show', compact('post'));
        return view('livre.show', compact('livre'));
        //affiche un post en particulier
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(livre $livre)

    {
        return view('livre.edit', compact('livre'));
                                    //Editer un post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livre $livre)
    {
        $request->validate([
            'author'=>'required',
            'title'=>'required',
            'quantity'=>'required',
            'genre'=>'required',
        ]);

        $livre->update($request->all());
        return redirect()->route('livre.index');
    }
    
    
                                                                // représente la page d'action du formulaire
       

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(livre $livre)
    {
        $livre->delete();
        return redirect()->route('livre.index');
    }
}
