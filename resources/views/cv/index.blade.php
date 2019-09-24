@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="cv">
            <div class="cv__row">
                <div class="cv__item cv__item--with-bg">
                    @include('cv.partials.me')
                </div>
                <div class="cv__column cv__column--main">
                    <div class="cv__item cv__item--with-bg">
                        @include('cv.partials.skills')
                    </div>
                    <div class="cv__item cv__item--with-bg">
                        @include('cv.partials.projects')
                    </div>
                </div><div class="cv__column cv__column--secondary">
                    <div class="cv__item">
                        @include('cv.partials.services')
                    </div>
                    <div class="cv__item">
                        @include('cv.partials.trainings')
                    </div>
                    <div class="cv__item">
                        @include('cv.partials.interests')
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection