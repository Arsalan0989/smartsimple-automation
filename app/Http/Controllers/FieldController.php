<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldStoreRequest;
use App\Http\Requests\FieldUpdateRequest;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fields = Field::paginate(fields)->get();

        return view('field.index', compact('fields'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('field.create');
    }

    /**
     * @param \App\Http\Requests\FieldStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldStoreRequest $request)
    {
        $field = Field::create($request->validated());

        $request->session()->flash('field.id', $field->id);

        return redirect()->route('field.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Field $field
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Field $field)
    {
        return view('field.show', compact('field'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Field $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Field $field)
    {
        return view('field.edit', compact('field'));
    }

    /**
     * @param \App\Http\Requests\FieldUpdateRequest $request
     * @param \App\Models\Field $field
     * @return \Illuminate\Http\Response
     */
    public function update(FieldUpdateRequest $request, Field $field)
    {
        $field->update($request->validated());

        $request->session()->flash('field.id', $field->id);

        return redirect()->route('field.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Field $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Field $field)
    {
        $field->delete();

        return redirect()->route('field.index');
    }
}
