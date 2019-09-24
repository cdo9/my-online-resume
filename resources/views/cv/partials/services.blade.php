<h2 class="cv__title"><i class="fad fa-fw fa-toolbox"></i> @lang('cv.services')</h2>
<ul class="tags">
    @foreach($services as $service)
        <li class="tag tag--main">{{ $service->translated_name }}</li>
    @endforeach
</ul>