<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContestModel;
use App\Models\PublicModel;

class ContestController extends Controller
{
    public function index(Request $request)
    {
        $contests = ContestModel::all();
        $publics = PublicModel::all();
        $activeTab = $request->get('tab', 'contests');

        return view('contests.index', compact('publics', 'contests', 'activeTab'));
    }

    public function create()
    {
        return view('contests.create');
        // Получение данных о пабликах из базы данных
        $publics = PublicModel::all();
        return view('contests.create', compact('publics'));
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'text' => 'required',
            'draw_time' => 'required|date',
            'public_id' => 'required|max:255',
        ]);

        // Загрузка изображения
        $imagePath = $request->file('image')->store('images');

        // Создание новой записи в базе данных
        ContestModel::create([
            'image' => $imagePath,
            'text' => $request->input('text'),
            'draw_time' => $request->input('draw_time'),
            'public_id' => $request->input('public_id'),
        ]);

        return redirect()->route('contests.index')->with('success', 'Конкурс успешно добавлен');
    }

    public function edit($id)
    {
        $contest = ContestModel::find($id);
        $publics = PublicModel::all();
        return view('contests.edit', compact('contest'));
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
