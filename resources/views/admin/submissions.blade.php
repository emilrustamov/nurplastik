@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Заявки с контактной формы</h1>
    @if($submissions->isEmpty())
    <p>Заявок пока нет.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Сообщение</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $submission)
            <tr>
                <td>{{ $submission->id }}</td>
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->surname }}</td>
                <td>{{ $submission->phone }}</td>
                <td>{{ $submission->email }}</td>
                <td>{{ $submission->message }}</td>
                <td>{{ $submission->created_at->format('d.m.Y H:i') }}</td>
                <td>
                    <a href="mailto:{{ $submission->email }}" class="btn btn-primary">
                        Отправить Email
                    </a>
                    <form action="{{ route('admin.submissions.destroy', $submission->id) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить эту заявку?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection