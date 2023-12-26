<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\PublicModel;

class PublicController extends Controller
{
    public function index()
    {
        // Получение данных о конкурсах из базы данных
        $contests = Contest::all();

        // Получение данных о пабликах из базы данных
        $publics = PublicModel::all();

        // Определение активной вкладки на основе параметра запроса 'tab'
        $activeTab = Request::get('tab', 'contests');

        // Передача данных о конкурсах, пабликах и активной вкладке в представление
        return view('publics.index', compact('contests', 'publics', 'activeTab'));
    }

    public function create()
    {
        return view('publics.create');
    }

    public function store(Request $request)
    {
        // Валидация данных $request

        $public = new PublicModel();
        $public->vk_id = $request->input('vk_id');
        $public->name = $request->input('name');
        $public->token = $request->input('token');
        $public->save();

        return redirect()->route('publics.index')->with('success', 'Паблик успешно добавлен');
    }

    public function edit($id)
    {
        $public = PublicModel::find($id);
        return view('publics.edit', compact('public'));
    }

    public function update(Request $request, $id)
    {
        // Валидация данных $request

        $public = PublicModel::find($id);
        $public->vk_id = $request->input('vk_id');
        $public->name = $request->input('name');
        $public->token = $request->input('token');
        $public->save();

        return redirect()->route('publics.index')->with('success', 'Паблик успешно обновлен');
    }

    public function destroy($id)
    {
        $public = PublicModel::find($id);
        $public->delete();

        return redirect()->route('publics.index')->with('success', 'Паблик успешно удален');
    }
}
