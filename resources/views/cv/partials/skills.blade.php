<h2 class="cv__title"><i class="fad fa-fw fa-toolbox"></i> @lang('cv.skills')</h2>
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