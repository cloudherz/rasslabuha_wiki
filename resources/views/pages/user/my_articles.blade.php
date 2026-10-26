@extends('layouts.main')

@section('meta-title', 'Мои статьи | Расслабуха Вики')
@section('meta-description', 'Энциклопедия по Расслабухе')
@section('meta-keywords', 'Расслабуха, Вики, Rasslabuha, Wiki')
@section('meta-url', 'https://rasslabuha.wiki/my_articles')
@section('meta-image', '')
@section('meta-image-alt', 'Расслабуха Вики')
@section('meta-site-name', 'Расслабуха Вики')

@section('mode-desktop')
    <x-blades.desktop.global.work_in_progress />
@endsection

@section('mode-landscape')
    <p>Landscape</p>
@endsection

@section('mode-mobile')
    <p>Mobile</p>
@endsection
