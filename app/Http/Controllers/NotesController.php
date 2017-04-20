<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    public function index()
    {
    	$notes=Note::paginate(20);
    	return view('notes.index')->with(compact('notes'));
    }

    public function create()
    {
    	return view('notes.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,['note'=>'required|min:2|max:200']);


    	Note::create($request->all());

    	return redirect()->action('NotesController@index');
    	
    }

    public function show($note)
    {

        return view('notes.show')->with(compact('note'));
    }
}
