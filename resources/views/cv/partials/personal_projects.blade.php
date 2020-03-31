<h2 class="cv__title"><i class="fad fa-fw fa-user-astronaut"></i> @lang('cv.personal_projects')</h2>
<div class="boxes boxes--2">
    @foreach($personalProjects as $personalProject)<div class="box" style="border-left-color: {{ $personalProject->color }};">
            <div class="box__header">
                <span class="box__title">{{ $personalProject->name }}</span>
                <span class="box__help">- {{ readableStartAndEndDates($personalProject->started_at, $personalProject->ended_at) }}</span>
            </div>
            <div class="box__body">
                <div class="box__description">{!! $personalProject->translated_description !!}</div>
            </div>
            <div class="box__links font-alt-style">
                @if($personalProject->website_link)<a href="{{ $personalProject->website_link }}" class="button" target="_blank"><i class="fad fa-browser"></i> Live website</a>@endif
                @if($personalProject->source_link)<a href="{{ $personalProject->source_link }}" class="button" target="_blank"><i class="fab fa-github"></i> Source code</a>@endif
            </div>
            <!--<div class="box__description js-open-close-container">
                <div class="box__description__open-close js-open-close-button" data-open-name="@lang('cv.open_view_more')" data-close-name="@lang('cv.close_view_more')"><i class='fad fa-long-arrow-alt-right'></i> @lang('cv.open_view_more')</div>
                <div class="box__description__text js-open-close-element hide">
                    Hello u
                </div>
            </div>-->
        </div>@endforeach
</div>