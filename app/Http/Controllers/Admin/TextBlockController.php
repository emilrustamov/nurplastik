<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TextBlock;
use Illuminate\Http\Request;

class TextBlockController extends Controller
{
    public function index()
    {
        $textBlocks = TextBlock::all();
        return view('admin.text_blocks.index', compact('textBlocks'));
    }

    public function edit(TextBlock $textBlock)
    {
        return view('admin.text_blocks.edit', compact('textBlock'));
    }

    public function update(Request $request, TextBlock $textBlock)
    {
        $validatedData = $request->validate([
            'content' => 'required|array', // Ожидаем массив данных для всех языков
        ]);

        $textBlock->update([
            'content' => $validatedData['content']
        ]);

        return redirect()->route('text-blocks.index')->with('success', 'Text block updated successfully.');
    }
}
