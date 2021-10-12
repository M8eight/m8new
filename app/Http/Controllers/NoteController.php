<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NoteController extends Controller
{
    public function show()
    {
        $db = Note::get();
        return view('apps.notes.show', compact('db'));
    }

    public function add(Request $req)
    {
        $note = new Note;
        $note->header = $req->header;
        $note->text = $req->main;
        $note->save();

        session()->flash('success');
        return redirect()->route('apps-note-show');
    }

    public function delete($key)
    {
        Note::where('id', $key)->delete();

        session()->flash('danger');
        return redirect()->route('apps-note-show');
    }
}
