<?php

namespace App\Http\Controllers;

use App\Models\Preguntasf;
use Illuminate\Http\Request;

/**
 * Class PreguntasfController
 * @package App\Http\Controllers
 */
class PreguntasfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntasfs = Preguntasf::paginate();

        return view('preguntasf.index', compact('preguntasfs'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntasfs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntasf = new Preguntasf();
        return view('preguntasf.create', compact('preguntasf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preguntasf::$rules);

        $preguntasf = Preguntasf::create($request->all());

        return redirect()->route('preguntasf.index')
            ->with('success', 'Preguntasf created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntasf = Preguntasf::find($id);

        return view('preguntasf.show', compact('preguntasf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntasf = Preguntasf::find($id);

        return view('preguntasf.edit', compact('preguntasf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preguntasf $preguntasf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntasf $preguntasf)
    {
        request()->validate(Preguntasf::$rules);

        $preguntasf->update($request->all());

        return redirect()->route('preguntasf.index')
            ->with('success', 'Preguntasf updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preguntasf = Preguntasf::find($id)->delete();

        return redirect()->route('preguntasf.index')
            ->with('success', 'Preguntasf deleted successfully');
    }
}
