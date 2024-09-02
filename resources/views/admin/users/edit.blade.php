@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank to keep current password)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" id="is_admin" name="is_admin" class="form-check-input" value="1" {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>
            <label for="is_admin" class="form-check-label">Admin</label>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" id="is_active" name="is_active" class="form-check-input" value="1" {{ old('is_active', $user->is_active) ? 'checked' : '' }}>
            <label for="is_active" class="form-check-label">Active</label>
        </div>

        <button type="submit" class="btn btn-warning">Update User</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
