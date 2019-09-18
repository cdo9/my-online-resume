<h2 class="cv__title"><i class="fad fa-fw fa-toolbox"></i> @lang('cv.services')</h2>
<ul class="skills">
    @foreach($services as $service)
        <li class="skill skill--main">{{ $service->translated_name }}</li>
    @endforeach
</ul>