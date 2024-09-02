@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit First Block</h1>
    <form action="{{ route('firstblock.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title_ru" class="form-label">Title (RU)</label>
            <input type="text" name="title_ru" class="form-control" id="title_ru" value="{{ $item->title_ru }}">
        </div>

        <div class="mb-3">
            <label for="title_en" class="form-label">Title (EN)</label>
            <input type="text" name="title_en" class="form-control" id="title_en" value="{{ $item->title_en }}">
        </div>

        <div class="mb-3">
            <label for="title_tm" class="form-label">Title (TM)</label>
            <input type="text" name="title_tm" class="form-control" id="title_tm" value="{{ $item->title_tm }}">
        </div>

        <div class="mb-3">
            <label for="desc_ru" class="form-label">Description (RU)</label>
            <textarea name="desc_ru" class="form-control" id="desc_ru">{{ $item->desc_ru }}</textarea>
        </div>

        <div class="mb-3">
            <label for="desc_en" class="form-label">Description (EN)</label>
            <textarea name="desc_en" class="form-control" id="desc_en">{{ $item->desc_en }}</textarea>
        </div>

        <div class="mb-3">
            <label for="desc_tm" class="form-label">Description (TM)</label>
            <textarea name="desc_tm" class="form-control" id="desc_tm">{{ $item->desc_tm }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            <img src="{{ asset('storage/' . $item->image) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
