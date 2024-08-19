@extends('layouts.admin')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Language Tabs -->
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
        <!-- Russian Tab -->
        <div class="tab-pane fade show active" id="ru" role="tabpanel" aria-labelledby="ru-tab">
            <div class="mb-3">
                <label for="title_ru" class="form-label">Title (RU)</label>
                <input type="text" name="title_ru" class="form-control @error('title_ru') is-invalid @enderror"
                    value="{{ old('title_ru', $product->title_ru) }}">
                @error('title_ru')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_ru" class="form-label">Description (RU)</label>
                <textarea name="description_ru" class="form-control tinymce-editor @error('description_ru') is-invalid @enderror">{{ old('description_ru', $product->description_ru) }}</textarea>
                @error('description_ru')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- English Tab -->
        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">
            <div class="mb-3">
                <label for="title_en" class="form-label">Title (EN)</label>
                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                    value="{{ old('title_en', $product->title_en) }}">
                @error('title_en')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_en" class="form-label">Description (EN)</label>
                <textarea name="description_en" class="form-control tinymce-editor @error('description_en') is-invalid @enderror">{{ old('description_en', $product->description_en) }}</textarea>
                @error('description_en')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Turkmen Tab -->
        <div class="tab-pane fade" id="tm" role="tabpanel" aria-labelledby="tm-tab">
            <div class="mb-3">
                <label for="title_tm" class="form-label">Title (TM)</label>
                <input type="text" name="title_tm" class="form-control @error('title_tm') is-invalid @enderror"
                    value="{{ old('title_tm', $product->title_tm) }}">
                @error('title_tm')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_tm" class="form-label">Description (TM)</label>
                <textarea name="description_tm" class="form-control tinymce-editor @error('description_tm') is-invalid @enderror">{{ old('description_tm', $product->description_tm) }}</textarea>
                @error('description_tm')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Общие поля вне табов -->
    <div class="form-group mt-3">
        <label for="img">картинка</label>
        <div class="input-group">
            <input id="img" class="form-control @error('banner') is-invalid @enderror" type="text"
                name="img" value="{{ old('img', $product->img) }}">
            <span class="input-group-append">
                <button id="lfm" data-input="img" data-preview="holder" class="btn btn-primary" type="button">
                    <i class="fa fa-picture-o"></i> Choose
                </button>
            </span>
        </div>
        @error('img')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <img id="holder" src="{{ old('img', $product->img) }}" style="margin-top:15px;max-height:100px;">
    </div>

    <div class="mb-3">
        <label for="ordering" class="form-label">Ordering</label>
        <input type="number" name="ordering" class="form-control @error('ordering') is-invalid @enderror"
            value="{{ old('ordering', $product->ordering) }}">
        @error('ordering')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
            {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
        <label class="form-check-label" for="is_active">Active</label>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tiny-custom.js') }}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection