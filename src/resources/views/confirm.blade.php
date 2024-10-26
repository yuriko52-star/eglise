@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" >
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__content-heading">
        <h2>ご予約確認画面</h2>
    </div>
    <form action="/cakes" class="confirm-form" method="post">
        @csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-form__heading">
                    お名前
                </th>
                <td class="confirm-form__item">
                    <input type="text" name="name"value="{{ $cake['name'] }}" readonly> 
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-form__heading">
                    メールアドレス
                </th>
                <td class="confirm-form__item">
                    <input type="text" name="email"value="{{ $cake['email'] }}" readonly> 
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-form__heading">
                    電話番号
                </th>
                <td class="confirm-form__item">
                    <input type="text" name="tel"value="{{ $cake['tel'] }}" readonly> 
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-form__heading">
                    ケーキ番号
                </th>
                <td class="confirm-form__item">
                    <input type="text" name="number"value="{{ $cake['number'] }}" readonly> 
                </td>
            </tr>
        </table>
        
    </div>
    <div class="confirm-form__button">
        <button class="confirm-form__button-submit">送信</button>
    </div>
    </form>
</div>
@endsection