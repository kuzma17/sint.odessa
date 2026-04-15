@extends('layouts.container3')

@section('content')
    <h3>{{ $page->title }}</h3>

    @include('layouts.map')
    <div class="content-page">
    {!! $page->content !!}
    </div>
@endsection