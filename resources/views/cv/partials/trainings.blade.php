<h2 class="cv__title"><i class="fad fa-fw fa-user-graduate"></i> @lang('cv.trainings')</h2>
<ul class="projects">
    @foreach($trainings as $training)
        <li class="project" style="border-left-color: {{ $training->color }};">
            <h3 class="project__title">{{ $training->name }}</h3>
            <div class="project__sub-title">{{ $training->position }} @if($training->freelance) - @lang('cv.has_freelance') @endif</div>

            <div class="project__time">{{ $training->area }} - {{ readableStartAndEndDates($training->started_at, $training->ended_at) }}</div>

            @if($training->translated_description)
                <div class="project__description js-open-close-container">
                    <div class="project__description__open-close js-open-close-button" data-open-name="@lang('cv.open_description')" data-close-name="@lang('cv.close_description')"><i class='fad fa-long-arrow-alt-right'></i> @lang('cv.open_description')</div>
                    <div class="project__description__text js-open-close-element hide">{!! $training->translated_description !!}</div>
                </div>
            @endif
        </li>
    @endforeach
</ul>