@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('content')
<div class="item">
    <div class="item-image">
        @if(count($item_detail) === 0)
        <p>商品はありません</p>
        @else
            <a>{{$item_detail}}</a>
        @endif
    </div>
</div>
@endsection