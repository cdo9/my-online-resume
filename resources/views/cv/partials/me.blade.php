<ul class="cv__me">
    <div class="cv__me__memoji">
        <img src="{{ asset('images/memoji.gif') }}"/>
    </div><div class="cv__me__text">
            <div class="cv__me__text__item">
                <h2 class="cv__title">Christophe, {{ \Carbon\Carbon::parse('1993-10-03')->age }} ans dont {{ \Carbon\Carbon::now()->diffInYears('2008-10-03') }} ans d'expérience.</h2>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__title">Actuellement en CDI chez RemplaFrance à temps partiel & freelance à Paris.</span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">Jobs recherchés :</span>
                <span class="cv__me__text__item__value">{{ $seekedJobs }}</span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">Où ?</span>
                <span class="cv__me__text__item__value">{!! $whereSeekedJobs !!}</span>
            </div>
            <div class="cv__me__text__item">
                <span class="cv__me__text__item__label">Contact : </span>
                <span class="cv__me__text__item__value">contact@cdo9.com</span>

            </div>
        </div><div class="cv__me__settings">
        @include('cv.partials.settings')
    </div>
</ul>