@extends('layouts.admin')

@section('content')
    <h1>Edit Text Block</h1>

    <form action="{{ route('text-blocks.update', $textBlock->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Language Tabs -->
        <ul class="nav nav-tabs" id="languageTabs" role="tablist">
            @foreach(['ru', 'en', 'tm'] as $locale)
                <li class="nav-item" role="presentation">
                    <a class="nav-link @if($loop->first) active @endif" id="{{ $locale }}-tab" data-bs-toggle="tab" href="#{{ $locale }}" role="tab" aria-controls="{{ $locale }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ strtoupper($locale) }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content mt-3" id="languageTabsContent">
            @foreach(['ru', 'en', 'tm'] as $locale)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="{{ $locale }}" role="tabpanel" aria-labelledby="{{ $locale }}-tab">
                    <div class="mb-3">
                        <label for="title_{{ $locale }}" class="form-label">Title ({{ strtoupper($locale) }})</label>
                        <input type="text" id="title_{{ $locale }}" name="content[{{ $locale }}][title]" class="form-control @error('content.'.$locale.'.title') is-invalid @enderror" value="{{ old('content.'.$locale.'.title', $textBlock->content[$locale]['title'] ?? '') }}">
                        @error('content.'.$locale.'.title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content_{{ $locale }}" class="form-label">Content ({{ strtoupper($locale) }})</label>
                        <textarea id="content_{{ $locale }}" name="content[{{ $locale }}][text]" class="form-control tinymce-editor @error('content.'.$locale.'.text') is-invalid @enderror" rows="4">{{ old('content.'.$locale.'.text', $textBlock->content[$locale]['text'] ?? '') }}</textarea>
                        @error('content.'.$locale.'.text')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('text-blocks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tiny-custom.js') }}"></script>
@endsection
