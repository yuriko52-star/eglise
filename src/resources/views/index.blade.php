@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" >
@endsection

@section('content')

<div class="cake__content">
    <div class="cake__heading">
        <h2>クリスマスケーキご予約フォーム</h2>
    </div>
    <form action="/cakes/confirm" class="form" method="post">
        @csrf
        
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="てすとアリス"value="{{ old('name') }}">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            </div>
        </div>
 <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input  type="text" name="email" placeholder="test@example.com "value="{{ old('email') }}">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            </div>
        </div>
         <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="tel" placeholder="0123456789"value="{{ old('tel') }}">
            </div>
            <div class="form__error">
                @error('tel')
                {{ $message }}
                @enderror  
            </div>
            </div>
        </div>
         <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ケーキ番号</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="number" placeholder="1"value="{{ old('number') }}">
            </div>
            <div class="form__error">
                @error('number')
                {{ $message }}
                @enderror  
            </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">予約</button>
        </div>
    </form>
</div>
@endsection