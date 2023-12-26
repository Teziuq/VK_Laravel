<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\PublicModel;

class ContestController extends Controller
{
    public function index()
    {
        // Получение данных о конкурсах из базы данных
        $contests = Contest::all();

        // Передача данных о конкурсах в представление
        return view('contests.index', compact('contests'));
    }

    public function create()
    {
        // Получение данных о пабликах из базы данных
        $publics = PublicModel::all();
        return view('contests.create', compact('publics'));
    }

    public function store(Request $request)
    {
        // Валидация данных $request

        $contest = new Contest();
        $contest->image = $request->input('image');
        $contest->text = $request->input('text');
        $contest->draw_time = $request->input('draw_time');
        $contest->public_id = $request->input('public_id');
        $contest->save();

        return redirect()->route('contests.index')->with('success', 'Конкурс успешно добавлен');
    }

    public function edit($id)
    {
        $contest = Contest::find($id);
        $publics = PublicModel::all();
        return view('contests.edit', compact('contest', 'publics'));
    }

    public function update(Request $request, $id)
    {
        // Валидация данных $request

        $contest = Contest::find($id);
        $contest->image = $request->input('image');
        $contest->text = $request->input('text');
        $contest->draw_time = $request->input('draw_time');
        $contest->public_id = $request->input('public_id');
        $contest->save();

        return redirect()->route('contests.index')->with('success', 'Конкурс успешно обновлен');
    }

    public function destroy($id)
    {
        $contest = Contest::find($id);
        $contest->delete();

        return redirect()->route('contests.index')->with('success', 'Конкурс успешно удален');
    }

    // ...

}
