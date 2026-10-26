@extends('layouts.main')

@section('meta-title', 'Главная | Расслабуха Вики')
@section('meta-description', 'Энциклопедия по Расслабухе')
@section('meta-keywords', 'Расслабуха, Вики, Rasslabuha, Wiki')
@section('meta-url', 'https://rasslabuha.wiki/')
@section('meta-image', '')
@section('meta-image-alt', 'Расслабуха Вики')
@section('meta-site-name', 'Расслабуха Вики')

@section('mode-desktop')
    <div class="S-HOME-panel">
        <div class="S-PANEL-wrapper">
            <div class="S-PANEL-carcass">
                <h2 class="TYPO-D-PRESET-CORE_H2">
                    Добро пожаловать на Расслабуху Вики!
                </h2>
                <p class="TYPO-D-PRESET-CORE_DEFAULT">
                    Проект находится в ультра ранней альфа версии. Здесь можно будет писать статьи на любые темы,<br>
                    связанные с Расслабухой и ее историей и культурой. У всех активных участников Расслабухи будет<br>
                    роль редактора, так что вы сможете написать о чем захотите и даже больше! Также можно будет<br>
                    редачить статьи других юзеров, ставить лайки, и еще много-много чего.
                </p>
                <p class="TYPO-D-PRESET-CORE_DEFAULT">
                    Если вы хотите сделать вклад в развитие проекта, то вы можете сделать это уже сейчас!<br>
                    Начните делать наброски своей первой статьи: в ворде, в заметках или в уме например.<br>
                    Как только выйдет функционал написания статей, вы сразу же сможете ее выложить здесь!
                </p>
                <p class="TYPO-D-PRESET-CORE_DEFAULT">
                    Ожидайте новостей, дорогие друзьяшки, заходите в гс на сеансы разработки сайта,<br>
                    и обязательно напишите мне в лс в дисе, выдам вам данные для входа в ваш акк!
                </p>
                <p class="TYPO-D-PRESET-CORE_DEFAULT_ITALIC">
                    Everything is possible on Rasslabuha
                </p>
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
