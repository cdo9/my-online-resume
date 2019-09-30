<h2 class="cv__title"><i class="fad fa-fw fa-chart-network"></i> @lang('cv.personal_projects')</h2>
<ul class="projects">
    @foreach($personalProjects as $personalProject)
        <li class="project" style="border-left-color: {{ $personalProject->color }};">
            <h3 class="project__title">{{ $personalProject->name }}</h3>
            <div class="project__time">{!! $personalProject->translated_description !!}</div>
            <div class="project__links">
                @if(!$personalProject->website_link)<a href="{{ $personalProject->website_link }}" class="button"><i class="fad fa-browser"></i> Live website</a>@endif
                @if(!$personalProject->source_link)<a href="{{ $personalProject->source_link }}" class="button"><i class="fab fa-github"></i> Source code</a>@endif
            </div>
            <!--<div class="project__description js-open-close-container">
                <div class="project__description__open-close js-open-close-button" data-open-name="@lang('cv.open_view_more')" data-close-name="@lang('cv.close_view_more')"><i class='fad fa-long-arrow-alt-right'></i> @lang('cv.open_view_more')</div>
                <div class="project__description__text js-open-close-element hide">
                    Hello u
                </div>
            </div>-->
        </li>
    @endforeach
</ul>