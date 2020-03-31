<h2 class="cv__title"><i class="fad fa-fw fa-chart-network"></i> @lang('cv.projects')</h2>
<div class="boxes boxes--2">
    @foreach($projects as $project)<div class="box" style="border-left-color: {{ $project->color }};">
            <div class="box__header">
                <span class="box__title">{{ $project->name }}</span>
                <div class="box__subtitle">{{ $project->translated_position }} {{-- @if($project->freelance) - @lang('cv.has_freelance') @endif --}}</div>
                <div class="box__help">
                    <i class="fad fa-map-marker-alt"></i> {{ $project->area }}
                    <span class="italic">- {{ readableStartAndEndDates($project->started_at, $project->ended_at) }}</span>
                </div>
            </div>
            <div class="box__body">
                <div class="box__tags">
                    <ul class="tags">
                        @foreach($project->skills as $skill)
                            <li class="tag" style="background-color: {{ $project->color_light }}; color: {{ $project->color }};">{{ $skill->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if($project->translated_description)
                <div class="box__more js-open-close-container">
                    <div class="box__more__open-close js-open-close-button font-alt-style" data-open-name="@lang('cv.open_view_more')" data-close-name="@lang('cv.close_view_more')"><i class='far fa-long-arrow-alt-right'></i> @lang('cv.open_view_more')</div>
                    <div class="box__more__content js-open-close-element hide">
                        <div class="box__gallery">
                            @foreach($project->skills()->limit(3)->get() as $skill)<div class="box__gallery__item">
                                <img style="border-color: {{ $project->color }};" src="#">
                            </div>@endforeach
                        </div>
                        <div class="box__description">
                            {!! $project->translated_description !!}
                        </div>
                    </div>
                </div>
            @endif
        </div>@endforeach
</div>