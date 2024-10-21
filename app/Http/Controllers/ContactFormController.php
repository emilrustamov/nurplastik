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
        // Проверка honeypot поля
        if ($request->input('extra_field')) {
            // Если поле заполнено, отклоняем запрос как спам
            return redirect()->back()->with('error', 'Ошибка! Пожалуйста, попробуйте снова.');
        }

        // Валидация данных
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
            'g-recaptcha-response' => 'required|captcha',
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

    public function destroy($id)
    {
        try {
            // Находим заявку по ID
            $submission = ContactFormSubmission::findOrFail($id);
            
            // Удаляем заявку
            $submission->delete();
            
            // Перенаправляем с сообщением об успехе
            return redirect()->back()->with('success', 'Заявка успешно удалена.');
        } catch (Exception $e) {
            // В случае ошибки, перенаправляем с сообщением об ошибке
            return redirect()->back()->with('error', 'Произошла ошибка при удалении заявки.');
        }
    }
}
