<h2 class="cv__title"><i class="fad fa-fw fa-tools"></i> @lang('cv.skills')</h2>
<ul class="tags tags--flex">
    @foreach($skills as $skill)
        <li class="tag tag--main" style="background-color: {{ $skill->color_light }}; color: {{ $skill->color }};">{{ $skill->name }}</li>
        @if($skill->childs)
            @foreach($skill->childs as $skill_child)
                <li class="tag tag--child" style="background-color: {{ $skill->color_light }}; color: {{ $skill->color }};">{{ $skill_child->name }}</li>
            @endforeach
        @endif
    @endforeach
</ul>