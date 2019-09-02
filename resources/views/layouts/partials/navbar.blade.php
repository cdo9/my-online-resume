<div class="navbar">
    <div class="navbar__item">
        <a href="#" class="navbar__item__logo">
            Cdo
        </a>
    </div>
    <div class="navbar__item">
        <div class="navbar__item__buttons">
            <a href="#" class="navbar__item__buttons__button navbar__item__buttons__button--light">
                <i class="fad fa-sun"></i>
            </a><a href="#" class="navbar__item__buttons__button navbar__item__buttons__button--colored navbar__item__buttons__button--selected">
                <i class="fad fa-palette"></i>
            </a><a href="#" class="navbar__item__buttons__button navbar__item__buttons__button--night">
                <i class="fad fa-moon"></i>
            </a>
        </div>
    </div>
    <div class="navbar__item">
        <div class="navbar__item__flags">
            <a href="{{ route('switch-locale', ['locale' => 'fr']) }}" class="navbar__item__flags__flag @if(session('locale') == "fr") navbar__item__flags__flag--selected @endif">
                <img src="{{ asset('images/flags/fr.svg') }}"/>
            </a><a href="{{ route('switch-locale', ['locale' => 'pt']) }}" class="navbar__item__flags__flag @if(session('locale') == "pt") navbar__item__flags__flag--selected @endif">
                <img src="{{ asset('images/flags/pt.svg') }}"/>
            </a><a href="{{ route('switch-locale', ['locale' => 'en']) }}" class="navbar__item__flags__flag @if(session('locale') == "en") navbar__item__flags__flag--selected @endif">
                <img src="{{ asset('images/flags/en.svg') }}"/>
            </a><!--<a href="{{ route('switch-locale', ['locale' => 'es']) }}" class="navbar__item__flags__flag @if(session('locale') == "es") navbar__item__flags__flag--selected @endif">
                <img src="{{ asset('images/flags/es.svg') }}"/>
            </a>-->
        </div>
        <!--<div class="navbar__item__title">Bonjour!</div>-->
    </div>
</div>