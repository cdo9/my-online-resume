@extends('layouts.main')
@section('content')
    <div class="content">
        <h1 class="title"><i class="fad fa-user-astronaut"></i> Curriculum vitae</h1>
        <div class="cv">
            <h2 class="cv__title">Skills</h2>
            <ul class="skills">
                @foreach($skills as $skill)
                    <li class="skill skill--main" style="border-color: {{ $skill->color }};">{{ $skill->name }}</li>
                    @if($skill->childs)
                        @foreach($skill->childs as $skill_child)
                            <li class="skill skill--child" style="border-color: {{ $skill->color }};">{{ $skill_child->name }}</li>
                        @endforeach
                    @endif
                @endforeach
            </ul>
            <h2 class="cv__title">Projects</h2>
            <ul class="projects">
                @foreach($projects as $project)
                    <li class="project">
                        <h3 class="project__title">{{ $project->name }}</h3>
                        <div class="project__description">{!! $project->description !!}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection