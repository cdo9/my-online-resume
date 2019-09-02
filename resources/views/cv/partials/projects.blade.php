<h2 class="cv__title"><i class="fad fa-fw fa-tasks"></i> @lang('cv.projects')</h2>
<ul class="projects">
    @foreach($projects as $project)
        <li class="project">
            <h3 class="project__title">
                {{ $project->name }}
                <span class="project__title__plus">{{ readableStartAndEndDates($project->started_at, $project->ended_at) }}</span>
            </h3>
            <div class="project_skills">
                <ul class="skills">
                    <li class="skill-title">@lang('cv.used-skills') :</li>
                    @foreach($project->skills as $skill)
                        <li class="skill" style="border-color: {{ $skill->color }};">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="project__description">{!! $project->description !!}</div>
        </li>
    @endforeach
</ul>