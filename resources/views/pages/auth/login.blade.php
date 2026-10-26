@extends('layouts.main')

@section('meta-title', 'Вход в аккаунт | Расслабуха Вики')
@section('meta-description', 'Энциклопедия по Расслабухе')
@section('meta-keywords', 'Расслабуха, Вики, Rasslabuha, Wiki')
@section('meta-url', 'https://rasslabuha.wiki/login')
@section('meta-image', '')
@section('meta-image-alt', 'Расслабуха Вики')
@section('meta-site-name', 'Расслабуха Вики')

@section('mode-desktop')
    <div class="S-LOGIN-panel">
        <div class="S-PANEL-wrapper">
            <div class="S-PANEL-carcass">
                <form class="S-PANEL-form" action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <div class="S-PANEL-text">
                        <p class="TYPO-D-PRESET-CORE_DEFAULT" >
                            Регистрация пока закрыта! Напиши sh1ftik<br>в дискорде для получения данных от аккаунта
                        </p>
                    </div>
                    <div class="S-PANEL-login">
                        <input type="text" name="login" value="{{ old('login') }}" class="TYPO-D-PRESET-CORE_DEFAULT" placeholder="Логин" required>
                    </div>
                    <div class="S-PANEL-password">
                        <input type="password" name="password" class="TYPO-D-PRESET-CORE_DEFAULT" placeholder="Пароль" required>
                    </div>
                    <div class="S-PANEL-button">
                        <button type="submit" class="TYPO-D-PRESET-CORE_DEFAULT">Войти</button>
                    </div>
                </form>

                @if ($errors->any())
                    <div style="color: red;">
                        {{ $errors->first() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('mode-landscape')
    <p>Landscape</p>
@endsection

@section('mode-mobile')
    <p>Mobile</p>
@endsection
