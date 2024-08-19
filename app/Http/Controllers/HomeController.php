<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirstBlock;
use App\Models\SecondBlock;
use App\Models\ThirdBlock;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function firstBlockEdit($id)
    {
        $item = FirstBlock::findOrFail($id);  // Получаем данные по ID

        return view('admin.firstblock', compact('item'));
    }
    public function updateFirstBlock(Request $request, $id)
    {
        $item = FirstBlock::findOrFail($id);

        // Валидация данных
        $validatedData = $request->validate([
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_tm' => 'required|string|max:255',
            'desc_ru' => 'nullable|string',
            'desc_en' => 'nullable|string',
            'desc_tm' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Обновление данных в модели
        $item->update($validatedData);

        // Обработка загрузки нового изображения
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $item->image = $imagePath;
        }

        $item->save();

        return ;
    }
    public function showFirstBlock()
    {
        $itemone = FirstBlock::first();
        return view('welcome', compact('itemone'));
    }
}
