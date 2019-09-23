<ul class="cv__me">
    <div class="cv__me__memoji">
        <img src="{{ asset('images/memoji.gif') }}"/>
    </div><div class="cv__me__text">
        <ul class="cv__me__list">
            <li class="cv__me__list__item">
                <h2 class="cv__title">Christophe, {{ \Carbon\Carbon::parse('1993-10-03')->age }} ans dont {{ \Carbon\Carbon::now()->diffInYears('2008-10-03') }} ans d'expérience.</h2>
            </li>
            <li class="cv__me__list__item">
                <span class="cv__me__list__item__title">Actuellement en CDI chez RemplaFrance à temps partiel & freelance à Paris.</span>
            </li>
            <li class="cv__me__list__item">
                <span class="cv__me__list__item__label">Jobs recherchés :</span>
                <span class="cv__me__list__item__value">{{ $seekedJobs }}</span>
            </li>
            <li class="cv__me__list__item">
                <span class="cv__me__list__item__label">Où ?</span>
                <span class="cv__me__list__item__value">{!! $whereSeekedJobs !!}</span>
            </li>
            <li class="cv__me__list__item">
                <span class="cv__me__list__item__label">Contact : </span>
                <span class="cv__me__list__item__value">contact@cdo9.com</span>

            </li
        </ul>
    </div>

</ul>