@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset ('css/cake.index.css') }}" >
@endsection

@section('content')
    <div class="cake-list__content">
        <div class="cake-ist__heading">
            <h2>クリスマスケーキ予約リスト一覧</h2>
        </div>
        <div class="cake-list__table">
            <table class="cake-list__table-inner">
                <tr class="cake-list__table-row">
                 <th class="cake-list__table-header">お名前</th>
                 <th class="cake-list__table-header">メールアドレス</th>
                 <th class="cake-list__table-header">電話番号</th>
                 <th class="cake-list__table-header">ケーキ番号</th>
                </tr>
                @foreach($cakes as $cake)
                <tr class="cake-list__table-row">
                    <td class="cake-list__table-item">
                        <input type="text" name="name" value="{{ $cake['name'] }}"readonly>
                    <td class="cake-list__table-item">
                        <input type="email" name="email" value="{{ $cake['email'] }}"readonly>
                    </td>
                    <td class="cake-list__table-item">
                        <input type="tel" name="tel" value="{{ $cake['tel'] }}"readonly>
                    </td>
                    <td class="cake-list__table-item">
                        <input type="number" name="number" value="{{ $cake['number'] }}"readonly>
                    </td>
                    
                    
                </tr>
                @endforeach
            </table>
        </div>
        <div class="pagination">
            {{ $cakes->links() }}
            </div>
    </div>
   
@endsection