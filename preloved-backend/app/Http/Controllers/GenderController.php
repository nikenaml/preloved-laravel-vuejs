<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Http\Requests\GenderRequest;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {


        $items = Gender::orderBy('created_at')->paginate(10);
        // return view('pages.categories.index', compact('categories'));
        return view('pages.genders.index')->with([
            'items' => $items,
        ]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.genders.create');
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
        // $type = $request->input('type');
        Gender::create($data);
        return redirect()->route('genders.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Gender::findOrFail($id);
        return view('pages.genders.show')->with([
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gender::findOrFail($id);
        return view('pages.genders.edit')->with([
            'item' => $item
        ]);
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

        $data = $request->all();
        $item = Gender::findOrFail($id);
        $item->update($data);
        return redirect()->route('genders.index');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gender::findOrFail($id);
        $item->delete();
        Gender::where('genders_id', $id)->delete();
        return redirect()->route('genders.destroy');
    }

}
