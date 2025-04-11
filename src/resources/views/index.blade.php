@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('content')
<div class="item">
    <div class="item-image">
        <!-- <div class="register-form__heading">
        </div> -->
        @if(count($images) === 0)
        <p>画像はありません</p>
        @else
            @foreach ($images as $image) 
                <div width="150">
                    <img src="{{ asset("storage/".$image->file_name) }}" width="150" height="150" alt=""  onclick="window.location.href='/item/1'">
                    <!-- <img src="{{ asset("storage/".$image->file_name) }}" width="150" height="150" alt=""> -->
                    <div class="item" width="150">{{ $image->name }}</div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection