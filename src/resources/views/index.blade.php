@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" >
@endsection

@section('content')

<div class="cake__content">
    <div class="cake__content-heading">
        <h2>クリスマスケーキご予約フォーム</h2>
    </div>
    <form action="/cakes/confirm" class="cake-form" method="post">
        @csrf
        
        <div class="cake-form__group">
            <div class="cake-form__heading">
                <span class="cake-form__label">お名前</span>
                <span class="cake-form__required">必須</span>
            </div>
            <div class="cake-form__item">
                <input class="cake-form__item-input" type="text" name="name" placeholder="てすとアリス"value="">
            </div>
        </div>
 <div class="cake-form__group">
            <div class="cake-form__heading">
                <span class="cake-form__label">メールアドレス</span>
                <span class="cake-form__required">必須</span>
            </div>
            <div class="cake-form__item">
                <input class="cake-form__item-input" type="text" name="email" placeholder="test@example.com "value="">
            </div>
        </div>
         <div class="cake-form__group">
            <div class="cake-form__heading">
                <span class="cake-form__label">電話番号</span>
                <span class="cake-form__required">必須</span>
            </div>
            <div class="cake-form__item">
                <input class="cake-form__item-input"type="text" name="tel" placeholder="0123456789"value="">
            </div>
        </div>
         <div class="cake-form__group">
            <div class="cake-form__heading">
                <span class="cake-form__label">ケーキ番号</span>
                <span class="cake-form__required">必須</span>
            </div>
            <div class="cake-form__item">
                <input class="cake-form__item-input"type="text" name="number" placeholder="1"value="">
            </div>
        </div>
        <div class="cake-form__button">
            <button class="cake-form__button-subnit" type=""submit>予約</button>
        </div>
    </form>
</div>
@endsection