<h2 class="cv__title"><i class="fad fa-fw fa-chart-network"></i> @lang('cv.projects')</h2>
<ul class="projects">
    @foreach($projects as $project)<li class="project project--50-50" style="border-left-color: {{ $project->color }};">
            <h3 class="project__title">{{ $project->name }}</h3>
            <div class="project__sub-title">{{ $project->translated_position }} @if($project->freelance) - @lang('cv.has_freelance') @endif</div>

            <div class="project__time">{{ $project->area }} - {{ readableStartAndEndDates($project->started_at, $project->ended_at) }}</div>

            <div class="project__tags">
                <ul class="tags">
                    @foreach($project->skills as $skill)
                        <li class="tag" style="background-color: {{ $project->color_light }}; color: {{ $project->color }};">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="project__gallery">
                {{-- todo
                @foreach($project->skills as $skill)<div class="project__gallery__item">
                        <img style="border-color: {{ $project->color }};" src="#">
                    </div>@endforeach
                </div>
                --}}
            </div>
            @if($project->translated_description)
                <div class="project__description js-open-close-container">
                    <div class="project__description__open-close js-open-close-button" data-open-name="@lang('cv.open_description')" data-close-name="@lang('cv.close_description')"><i class='fad fa-long-arrow-alt-right'></i> @lang('cv.open_description')</div>
                    <div class="project__description__text js-open-close-element hide">{!! $project->translated_description !!}</div>
                </div>
            @endif
        </li>@endforeach
</ul>