<h2 class="cv__title"><i class="fad fa-fw fa-user-astronaut"></i> @lang('cv.me')</h2>
<ul class="cv__me">
    <li class="cv__me__item">Christophe, {{ \Carbon\Carbon::parse('1993-10-03')->age }} ans dont {{ \Carbon\Carbon::now()->diffInYears('2008-10-03') }} ans d'expérience.</li>
    <li class="cv__me__item">Jobs recherchés : @foreach($seekedJobs as $seekedJob) {{ $seekedJob->translated_name }}@if(!$loop->last), @else.@endif @endforeach</li>
    <li class="cv__me__item">Où ? Genève, Paris, Lisbonne ou en télétravail.</li>
</ul>