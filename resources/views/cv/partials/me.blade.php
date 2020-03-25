<ul class="cv__me">
    <div class="cv__me__memoji">
        <img src="{{ asset('images/memoji.gif') }}"/>
    </div><div class="cv__me__text">
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__title">
                    {{ __('cv.me_title', [
                    'name' => 'Breno',
                    'years' => \Carbon\Carbon::parse('1993-10-03')->age,
                    'yearsOfExperience' =>  \Carbon\Carbon::now()->diffInYears('2008-10-03'),
                    ]) }}
                </span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__subtitle">{{ __('cv.me_subtitle') }}</span>
            </div>
            <br/>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">{{ __('cv.me_seeked-jobs') }}</span>
                <span class="cv__me__text__item__value">{{ $seekedJobs }}</span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">{{ __('cv.me_where-seeked-jobs') }}</span>
                <span class="cv__me__text__item__value">{!! $whereSeekedJobs !!}</span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">{{ __('cv.me_contact') }}</span>
                <span class="cv__me__text__item__value">{!! fRobot('contact@cdo9.space') !!}</span>

            </div>
        </div><div class="cv__me__settings">
        @include('cv.partials.settings')
    </div>
</ul>
