<h2 class="cv__title"><i class="fad fa-fw fa-grin-hearts"></i> @lang('cv.interests')</h2>
<ul class="skills">
        @foreach($interests as $interest)
                <li class="skill skill--main" style="border-color: {{ $interest->color }};">
                        <i class="{{ $interest->icon }}"></i>
                        {{ $interest->translated_name }}
                </li>
        @endforeach
</ul>