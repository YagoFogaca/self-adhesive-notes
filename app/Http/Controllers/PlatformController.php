<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class PlatformController extends Controller
{
    public function index()
    {
        $notes = User::find(Auth::id())->notes->toArray();
        return view('pages.platform.index', ['data' => $notes]);
    }

    public function store(Request $req)
    {
        try {
            $req->validate([
                'title' => 'required',
                'text' => 'required|max:150',
                'color' => 'required'
            ]);
            $note = [
                'user_id' => Auth::id(),
                'title' => $req->input('title'),
                'text' => $req->input('text'),
                'color' => $req->input('color'),

            ];
            Note::create($note);
            return redirect()->route('app');
        } catch (Exception $error) {
            echo $error->getMessage();
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao criar a nota']);
        }
    }

    public function delete(string $id)
    {
        Note::find($id)->delete();
        return redirect()->back();
    }

    public function update(Request $req, string $id)
    {
        $note = $req->validate([
            'title' => 'required',
            'text' => 'required|max:150',
            'color' => 'required'
        ]);
        $noteUpdated = Note::find($id);
        $noteUpdated->update($note);

        return redirect()->route('app');
    }
}
