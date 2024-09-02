<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactFormSubmission;
use Exception;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Сохранение данных в базу данных (если это необходимо)
            ContactFormSubmission::create($validatedData);

            // Отправка письма на указанный email
            Mail::send('layouts.contact-form', ['data' => $validatedData], function ($message) {
                $message->to('erustamow2@gmail.com')
                    ->subject('Новая заявка с контактной формы');
            });

            // Если все прошло успешно, перенаправляем с успехом
            return redirect()->back()->with('success', 'Ваше сообщение было успешно отправлено!');
        } catch (Exception $e) {
            // В случае ошибки, перенаправляем с ошибкой
            return redirect()->back()->with('error', 'Произошла ошибка при отправке сообщения. Пожалуйста, попробуйте снова.');
        }
    }

    public function index()
{
    // Получаем все заявки из базы данных
    $submissions = ContactFormSubmission::all();

    // Передаем данные во вьюшку
    return view('admin.submissions', compact('submissions'));
}

}
