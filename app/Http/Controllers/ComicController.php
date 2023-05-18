<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // chiamo la funzione di validazione
        $this->validation($request);

        $formData = $request->all();

        $formData['price'] = '$' . number_format($formData['price'], 2);

        $newComic = new Comic();

        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // chiamo la funzione di validazione
        $this->validation($request);

        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    // funzione per validare
    private function validation($request)
    {
        // con il metodo all prendo i parametri del form
        $formData = $request->all();

        // importo il validator con il percorso Illuminate\Support\Facades\Validator;
        $validator = Validator::make($formData, [
            // controllo che i parametri del form rispettino le seguenti regole
            'title' => 'required|max:100|min:3',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:50',
            'type' => 'nullable|max:50',
        ], [
            // messaggi da comunicare all'utente per ogni errore
            'title.required' => 'Il campo Title non può essere vuoto.',
            'title.max' => 'Il campo Title deve essere minore di 100 caratteri.',
            'title.min' => 'Il campo Title deve essere maggiore di 3 caratteri',
            'description.required' => 'Il campo Description non può essere vuoto.',
            'thumb.required' => "Il campo Image Link non può essere vuoto.",
            'price.required' => 'Il campo Price non può essere vuoto.',
            'price.max' => 'Il campo Price deve essere minore di 10 caratteri.',
            'series.required' => 'Il campo Series non può essere vuoto.',
            'series.max' => 'Il campo Series deve essere minore di 100 caratteri.',
            'sale_date.required' => 'Il campo Sale Date non può essere vuoto.',
            'sale_date.max' => 'Il campo Sale Date deve essere minore di 10 caratteri.',
            'type.max' => 'Il campo Type deve essere minore di 50 caratteri.',
        ])->validate();

        // restituisco il validator che in caso di errore fa automaticamente il redirect
        return $validator;
    }
}
