<?php

namespace App\Http\Controllers;

use App\Models\Preguntasl;
use Illuminate\Http\Request;

/**
 * Class PreguntaslController
 * @package App\Http\Controllers
 */
class PreguntaslController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntasls = Preguntasl::paginate();

        return view('preguntasl.index', compact('preguntasls'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntasls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntasl = new Preguntasl();
        return view('preguntasl.create', compact('preguntasl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preguntasl::$rules);

        $preguntasl = Preguntasl::create($request->all());

        return redirect()->route('preguntasl.index')
            ->with('success', 'Pregunta creada de manera satisfactoria.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntasl = Preguntasl::find($id);

        return view('preguntasl.show', compact('preguntasl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntasl = Preguntasl::find($id);

        return view('preguntasl.edit', compact('preguntasl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preguntasl $preguntasl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntasl $preguntasl)
    {
        request()->validate(Preguntasl::$rules);

        $preguntasl->update($request->all());

        return redirect()->route('preguntasl.index')
            ->with('success', 'Preguntasl updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preguntasl = Preguntasl::find($id)->delete();

        return redirect()->route('preguntasl.index')
            ->with('success', 'Preguntasl deleted successfully');
    }
}
