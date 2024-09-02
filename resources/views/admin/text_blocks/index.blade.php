@extends('layouts.admin')

@section('content')
    <h1>Text Blocks</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Key</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($textBlocks as $textBlock)
                <tr>
                    <td>{{ $textBlock->key }}</td>
                    <td>
                        <a href="{{ route('text-blocks.edit', $textBlock->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
