@extends('layouts.base')

@section('content')
    <div class="form-place">

        <h2 class="subtitle">
            Регистрация
        </h2>
        
        <form method="POST">
            @csrf
            <label>
                ФИО
                <input type="text">
            </label>
            <label>
                Email
                <input type="email">
            </label>
            <label>
                Пароль
                <input type="password">
            </label>
            <label>
                Повторите пароль
                <input type="password">
            </label>
            <label>
                Дата рождения
                <input type="date">
            </label>
            <label>
                Телефон
                <input type="tel">
            </label>
            <label>
                Город
                <input type="text">
            </label>
            <label>
                Наименование компании
                <input type="text">
            </label>
            <label class="checkbox-label">
                <input type="checkbox">
                Даю согласие на обработку персональных данных
            </label>
            <button type="submit">
                Зарегистрироваться
            </button>
        </form>

    </div>
@endsection