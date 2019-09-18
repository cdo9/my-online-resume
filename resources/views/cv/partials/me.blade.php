<h2 class="cv__title"><i class="fad fa-fw fa-user-astronaut ok-test"></i> @lang('cv.me')</h2>
<ul class="cv__me">
    <li class="cv__me__item">
        <span class="cv__me__item__title">Christophe, {{ \Carbon\Carbon::parse('1993-10-03')->age }} ans dont {{ \Carbon\Carbon::now()->diffInYears('2008-10-03') }} ans d'expérience.</span>
    </li>
    <li class="cv__me__item">
        <span class="cv__me__item__label">Actuellement en CDI chez RemplaFrance à temps partiel & freelance à Paris.</span>
    </li>
    <li class="cv__me__item">
        <span class="cv__me__item__label">Jobs recherchés :</span>
        <span class="cv__me__item__value">{{ $seekedJobs }}</span>
    </li>
    <li class="cv__me__item">
        <span class="cv__me__item__label">Où ?</span>
        <span class="cv__me__item__value">{{ $whereSeekedJobs }}</span>
    </li>
</ul>