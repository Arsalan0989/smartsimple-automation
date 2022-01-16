<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldsetStoreRequest;
use App\Http\Requests\FieldsetUpdateRequest;
use App\Models\Fieldset;
use Illuminate\Http\Request;

class FieldsetController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fieldsets = Fieldset::paginate(fieldsets)->get();

        return view('fieldset.index', compact('fieldsets'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('fieldset.create');
    }

    /**
     * @param \App\Http\Requests\FieldsetStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldsetStoreRequest $request)
    {
        $fieldset = Fieldset::create($request->validated());

        $request->session()->flash('fieldset.id', $fieldset->id);

        return redirect()->route('fieldset.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fieldset $fieldset
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Fieldset $fieldset)
    {
        return view('fieldset.show', compact('fieldset'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fieldset $fieldset
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Fieldset $fieldset)
    {
        return view('fieldset.edit', compact('fieldset'));
    }

    /**
     * @param \App\Http\Requests\FieldsetUpdateRequest $request
     * @param \App\Models\Fieldset $fieldset
     * @return \Illuminate\Http\Response
     */
    public function update(FieldsetUpdateRequest $request, Fieldset $fieldset)
    {
        $fieldset->update($request->validated());

        $request->session()->flash('fieldset.id', $fieldset->id);

        return redirect()->route('fieldset.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fieldset $fieldset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Fieldset $fieldset)
    {
        $fieldset->delete();

        return redirect()->route('fieldset.index');
    }
}
