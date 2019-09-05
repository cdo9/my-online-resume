<h2 class="cv__title"><i class="fad fa-fw fa-tasks"></i> @lang('cv.projects')</h2>
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
                        <li class="skill" style="border-color: {{ $project->color }};">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="project__description">
                {!! $project->translated_description !!}
            </div>
        </li>
    @endforeach
</ul>