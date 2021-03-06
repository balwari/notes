<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Auth;

class NoteController extends Controller
{
    public function all() {
        $id = Auth::id();
        $notes = Note::where('user_id','=',$id)->paginate(500);
        return view('all')->with('notes',$notes);
    }
    
    public function create(Request $req) {
//        dd($req);
        $note = new Note;
        $id = Auth::id();
        $note->title = $req->input('title');
        $note->description = $req->input('description');
        $note->user_id = $id;
        $note->save();
        return redirect()->back();
    }
    public function update_note($id) {
        $note = Note::find($id);
        return view('notes.form')->with('note',$note);
    }
    public function update($id, Request $req) {
        $note = Note::find($id);
        $id = Auth::id();
        $note->title = $req->input('title');
        $note->description = $req->input('description');
        $note->user_id = $id;
        $note->save();
        return redirect()->route('all');
    }
    public function delete($id) {
        $note = Note::find($id);
        $note->delete();
        return redirect()->back();
    }
}