@extends('layouts.base')

@section('content')
    <div class="form-place">

        <h2 class="subtitle">
            Вход
        </h2>
        
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <label>
                Email
                <input type="email">
            </label>
            <label>
                Password
                <input type="password">
            </label>
            <button type="submit">
                Войти
            </button>
        </form>

    </div>
@endsection