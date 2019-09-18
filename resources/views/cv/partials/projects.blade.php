<h2 class="cv__title"><i class="fad fa-fw fa-chart-network"></i> @lang('cv.projects')</h2>
<ul class="projects">
    @foreach($projects as $project)
        <li class="project" style="border-left-color: {{ $project->color }};">
            <h3 class="project__title">{{ $project->name }}</h3>
            <div class="project__position">{{ $project->position }} @if($project->freelance) - @lang('cv.has_freelance') @endif</div>

            <div class="project__time">{{ $project->area }} - {{ readableStartAndEndDates($project->started_at, $project->ended_at) }}</div>

            <div class="project_skills">
                <ul class="skills">
                    <!--<li class="skill-title">@lang('cv.used-skills') :</li>-->
                    @foreach($project->skills as $skill)
                        <li class="skill" style="background-color: {{ $project->color_light }}; color: {{ $project->color }};">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            @if($project->translated_description)
                <div class="project__description js-open-close-container">
                    <div class="project__description__open-close js-open-close-button" data-open-name="@lang('cv.open_description')" data-close-name="@lang('cv.close_description')"><i class='fad fa-long-arrow-alt-right'></i> @lang('cv.open_description')</div>
                    <div class="project__description__text js-open-close-element hide">{!! $project->translated_description !!}</div>
                </div>
            @endif
        </li>
    @endforeach
</ul>