@extends('layouts.admin')

@section('content')
<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ru-tab" data-bs-toggle="tab" href="#ru" role="tab" aria-controls="ru"
                aria-selected="true">RU</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="en-tab" data-bs-toggle="tab" href="#en" role="tab" aria-controls="en"
                aria-selected="false">EN</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tm-tab" data-bs-toggle="tab" href="#tm" role="tab" aria-controls="tm"
                aria-selected="false">TM</a>
        </li>
    </ul>

    <div class="tab-content mt-3" id="languageTabsContent">
        <div class="tab-pane fade show active" id="ru" role="tabpanel" aria-labelledby="ru-tab">
            <div class="mb-3">
                <label for="title_ru" class="form-label">Title (RU)</label>
                <input type="text" name="title_ru" class="form-control @error('title_ru') is-invalid @enderror"
                    value="{{ old('title_ru') }}">
                @error('title_ru')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_ru" class="form-label">Description (RU)</label>
                <textarea name="description_ru"
                    class="form-control tinymce-editor @error('description_ru') is-invalid @enderror">{{ old('description_ru') }}</textarea>
                @error('description_ru')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">
            <div class="mb-3">
                <label for="title_en" class="form-label">Title (EN)</label>
                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                    value="{{ old('title_en') }}">
                @error('title_en')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_en" class="form-label">Description (EN)</label>
                <textarea name="description_en"
                    class="form-control tinymce-editor @error('description_en') is-invalid @enderror">{{ old('description_en') }}</textarea>
                @error('description_en')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="tab-pane fade" id="tm" role="tabpanel" aria-labelledby="tm-tab">
            <div class="mb-3">
                <label for="title_tm" class="form-label">Title (TM)</label>
                <input type="text" name="title_tm" class="form-control @error('title_tm') is-invalid @enderror"
                    value="{{ old('title_tm') }}">
                @error('title_tm')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_tm" class="form-label">Description (TM)</label>
                <textarea name="description_tm"
                    class="form-control tinymce-editor @error('description_tm') is-invalid @enderror">{{ old('description_tm') }}</textarea>
                @error('description_tm')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Общие поля вне табов -->
    <div class="mb-3">
        <label for="img" class="form-label">Image URL</label>
        <input type="text" name="img" class="form-control @error('img') is-invalid @enderror" value="{{ old('img') }}">
        @error('img')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="ordering" class="form-label">Ordering</label>
        <input type="number" name="ordering" class="form-control @error('ordering') is-invalid @enderror"
            value="{{ old('ordering', 0) }}">
        @error('ordering')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" class="form-check-input" id="is_active" {{ old('is_active', true)
            ? 'checked' : '' }}>
        <label class="form-check-label" for="is_active">Active</label>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection



