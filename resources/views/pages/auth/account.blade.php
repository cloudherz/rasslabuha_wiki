@extends('layouts.main')

@section('meta-title', 'Аккаунт | Расслабуха Вики')
@section('meta-description', 'Энциклопедия по Расслабухе')
@section('meta-keywords', 'Расслабуха, Вики, Rasslabuha, Wiki')
@section('meta-url', 'https://rasslabuha.wiki/account')
@section('meta-image', '')
@section('meta-image-alt', 'Расслабуха Вики')
@section('meta-site-name', 'Расслабуха Вики')

@section('mode-desktop')
    <div class="S-ACCOUNT-panel">
        <div class="S-PANEL-wrapper">
            <div class="S-PANEL-carcass">
                @if(!isset($R_USER))
                    <p>Ты сначала в акк зайди не выебывайся да тоже</p>
                @else
                    @if(session('success'))
                        <div style="color: green; margin-bottom: 15px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div style="color: red; margin-bottom: 15px;">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('post.account.info') }}" method="POST">
                        @csrf

                        <div style="margin-bottom: 10px;">
                            <label>Никнейм:</label><br>
                            <input type="text" name="nickname" value="{{ old('nickname', $R_USER->nickname) }}" required>
                        </div>

                        <div style="margin-bottom: 10px;">
                            <label>Статус:</label><br>
                            <textarea name="status" rows="4" style="width: 100%;">{{ old('status', $R_USER->status) }}</textarea>
                        </div>

                        <button type="submit">Обновить данные аккаунта</button>
                    </form>

                    <form action="{{ route('post.logout') }}" method="POST">
                        @csrf
                        <button type="submit">Выйти из аккаунта</button>
                    </form>
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
