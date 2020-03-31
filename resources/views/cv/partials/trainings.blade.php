<h2 class="cv__title"><i class="fad fa-fw fa-user-graduate"></i> @lang('cv.trainings')</h2>
<ul class="boxes">
    @foreach($trainings as $training)
        <li class="box" style="border-left-color: {{ $training->color }};">
            <div class="box__header">
                <h3 class="box__title">{{ $training->name }}</h3>
                <div class="box__subtitle">{{ $training->position }} @if($training->freelance) - @lang('cv.has_freelance') @endif</div>
                <div class="box__help">
                    <i class="fad fa-map-marker-alt"></i> {{ $training->area }}
                    <span class="italic">- {{ readableStartAndEndDates($training->started_at, $training->ended_at) }}</span>
                </div>
            </div>
            @if($training->translated_description)
                <div class="box__more js-open-close-container">
                    <div class="box__more__open-close js-open-close-button font-alt-style" data-open-name="@lang('cv.open_view_more')" data-close-name="@lang('cv.close_view_more')"><i class='far fa-long-arrow-alt-right'></i> @lang('cv.open_view_more')</div>
                    <div class="box__more__content js-open-close-element hide">
                        <div class="box__description">
                            {!! $training->translated_description !!}
                        </div>
                    </div>
                </div>
            @endif
        </li>
    @endforeach
</ul>