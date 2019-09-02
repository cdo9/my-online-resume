<h2 class="cv__title"><i class="fad fa-fw fa-tasks"></i> Projects</h2>
<ul class="projects">
    @foreach($projects as $project)
        <li class="project">
            <h3 class="project__title">{{ $project->name }}</h3>
            <div class="project_skills">
                <ul class="skills">
                    @foreach($project->skills as $skill)
                        <li class="skill" style="border-color: {{ $skill->color }};">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="project__description">{!! $project->description !!}</div>
        </li>
    @endforeach
</ul>