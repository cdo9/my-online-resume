@extends('layouts.main')
@section('content')
    <div class="content">
        <h1 class="title">@lang('cv.page-title')</h1>
        <div class="cv">
            {{-- @include('cv.partials.me') --}}
            @include('cv.partials.skills')
            @include('cv.partials.projects')
        </div>
    </div>

@endsection