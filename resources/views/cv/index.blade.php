@extends('layouts.main')
@section('content')
    <div class="content">
        <h1 class="title">@lang('cv.page-title')</h1>
        <div class="cv">
            <div class="cv__column">
                <div class="cv__item">
                    @include('cv.partials.me')
                </div>
                <div class="cv__item">
                    @include('cv.partials.skills')
                </div>
                <div class="cv__item">
                    @include('cv.partials.services')
                </div>
            </div><div class="cv__column">
                <div class="cv__item">
                    @include('cv.partials.projects')
                </div>
            </div>


        </div>
    </div>

@endsection