@extends('dashboard.layouts.master')

@section('content')
    <header class="header">
        <form class="search-form" action="{{ route('dashboard.news.search') }}" method="get">
            @csrf
            <input class="search-input" type="search" name="keyword" placeholder="Поиск по Новостям..." autocomplete="off"
                value="{{ isset($keyword) ? $keyword : '' }}">
            <button class="search-submit-btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.4 488.4">
                    <path
                        d="M0 203.25c0 112.1 91.2 203.2 203.2 203.2 51.6 0 98.8-19.4 134.7-51.2l129.5 129.5c2.4 2.4 5.5 3.6 8.7 3.6s6.3-1.2 8.7-3.6c4.8-4.8 4.8-12.5 0-17.3l-129.6-129.5c31.8-35.9 51.2-83 51.2-134.7C406.4 91.15 315.2.05 203.2.05S0 91.15 0 203.25zm381.9 0c0 98.5-80.2 178.7-178.7 178.7s-178.7-80.2-178.7-178.7 80.2-178.7 178.7-178.7 178.7 80.1 178.7 178.7z" />
                </svg>
            </button>
        </form>
        <ul class="header-navigation">
            <li class="header-navigation-item">
                <a class="header-navigation-link" href="{{ route('dashboard.news') }}">Новости: {{ $newsQuantity }}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link" href="{{ route('dashboard.news.categories') }}">Категории:
                    {{ $categories->count() }}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link green-bg white current">Добавить новости</a>
            </li>
        </ul>
    </header>
    <ul class="breadcrumbs book-read-page__breadcrumbs">
        <li class="breadcrumbs-item">
            <a class="breadcrumbs-link" href="{{ route('dashboard.news') }}">Новости</a>
            <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 10L5 5L0 0V10Z" fill="#0033ab"></path>
            </svg>
        </li>
        <li class="breadcrumbs-item">
            <a class="breadcrumbs-link current" href="{{ route('dashboard.news.create') }}">Добавление</a>
        </li>
    </ul>
    <main class="news-create-page">
        <form class="form" action="{{ route('news.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset class="form__element form__element--long form__element--photo">
                <legend class="form__label">Фотография (для новости)</legend>
                <img class="form__photo-preview" src="{{ asset('img/products/muffin-grey.svg') }}" alt="Фотография новости"
                    width="40" height="44">
                <input class="form__photo-input visually-hidden" type="file" id="photo" name="photo"
                    accept="image/*">
                <label class="form__file-label" for="photo">Загрузить фото...</label>
            </fieldset>
            <fieldset class="form__element form__element--news-cat">
                <label class="form__label" for="categories">Категория</label>
                <select class="form__select" name="category-id" id="categories" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </fieldset>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <div class="form__element form__element--wide"></div>
            <fieldset class="form__element form__element--wide">
                <label class="form__label" for="ru-title">Заголовок на русском</label>
                <input class="form__input" type="text" name="ru-title" id="ru-title"
                    placeholder="Заголовок новости на русском языку" autocomplete="off" required>
            </fieldset>
            <fieldset class="form__element form__element--wide">
                <label class="form__label" for="en-title">Заголовок на английском</label>
                <input class="form__input" type="text" name="en-title" id="en-title" autocomplete="off"
                    placeholder="News headline in English" required>
            </fieldset>
            <fieldset class="form__element form__element--wide">
                <label class="form__label" for="mn-title">Заголовок на монгольском</label>
                <input class="form__input" type="text" name="mn-title" id="mn-title" autocomplete="off"
                    placeholder="Монгол хэл дээрх мэдээний гарчиг" required>
            </fieldset>
            <fieldset class="form__element form__element--wide form__element--long">
                <legend class="form__label">Описание на русском</legend>
                <textarea class="simditor-textarea" name="ru-text" placeholder="Новость на русском языке"></textarea>
            </fieldset>
            <fieldset class="form__element form__element--wide form__element--long">
                <legend class="form__label">Описание на английском</legend>
                <textarea class="simditor-textarea" name="en-text" placeholder="News in English"></textarea>
            </fieldset>
            <fieldset class="form__element form__element--wide form__element--long">
                <legend class="form__label">Описание на монгольский</legend>
                <textarea class="simditor-textarea" name="mn-text" placeholder="Монгол хэл дээрх мэдээ"></textarea>
            </fieldset>
            <fieldset class="form__element form__element--submit">
                <button class="form__submit" type="submit">Опубликовать</button> или <a class="form__reset"
                    href="javascript:window.location.href=window.location.href">очистить</a>
            </fieldset>
        </form>
    </main>
@endsection
