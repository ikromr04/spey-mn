<footer class="footer">
  <div class="container footer__container">
    <nav class="footer-navigations">
      <ul class="footer-navigation">
        <li class="footer-navigation__item" data-action="show">{{ __('About us') }}</li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="{{ route('about') }}#history">{{ __('History') }}</a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="{{ route('about') }}#geography">{{ __('Geography of presence') }}</a>
        </li>
      </ul>
      <ul class="footer-navigation">
        <li class="footer-navigation__item" data-action="show">{{ __('Products') }}</li>
        @foreach ($footer->products as $category)
          <li class="footer-navigation__item">
            <a class="footer-navigation__link" data-type="footer-category" href="{{ route('products') }}?category={{ $category->id }}#products">{{ $category->title }}</a>
          </li>
        @endforeach
      </ul>
      <ul class="footer-navigation">
        <li class="footer-navigation__item" data-action="show">{{ __('Industry news') }}</li>
        @foreach ($footer->news as $category)
          <li class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('news') }}?category={{ $category->id }}#all-news">{{ $category->title }}</a>
          </li>
        @endforeach
      </ul>
    </nav>
    <div class="site-info">
      <div class="site-info__content">
        <div class="site-info__contacts">
          <h3 class="site-info__title">{{ __('Contacts') }}</h3>
          {{ __('Address') }}: <br>
          {!! $currentSite->address !!} <br> <br>
          @foreach ($currentSite->phones as $phone)
            {{ $phone->numbers }} <br>
          @endforeach
          <a href="mailto:{{ $currentSite->email }}">{{ $currentSite->email }}</a>
          <style>
            .instagram-link {
              display: flex;
              margin-top: 13px;
              width: 40px;
              height: 40px;
              border-radius: 50%;
              background-color: #0033ab;
              justify-content: center;
              align-items: center;
              padding-right: 2px;
              transition: .3s
            }

            .instagram-link:hover {
              background-color: transparent;
            }
          </style>
          <a class="instagram-link" href="https://www.instagram.com/spey.mn/" target="_blank">
            <svg id="instagram" viewBox="0 0 7 7" width="24" height="24" fill="none">
              <title>Инстаграм</title>
              <path fill="currentColor" d="M6.846 2.09a2.144 2.144 0 0 0-.138-.727 1.513 1.513 0 0 0-.864-.865A2.169 2.169 0 0 0 5.126.36 21.117 21.117 0 0 0 3.91.342c-.802 0-.905 0-1.218.018a2.169 2.169 0 0 0-.718.138 1.512 1.512 0 0 0-.864.865c-.086.23-.133.472-.137.717a21.01 21.01 0 0 0-.019 1.218c0 .801 0 .904.019 1.218.004.245.05.488.137.718a1.513 1.513 0 0 0 .865.864c.229.09.471.14.717.147.316.015.416.019 1.218.019s.904 0 1.218-.019c.245-.004.488-.05.718-.137a1.515 1.515 0 0 0 .864-.864c.086-.23.133-.473.137-.718.015-.316.019-.416.019-1.218s0-.904-.02-1.218Zm-2.94 2.724a1.517 1.517 0 1 1 0-3.035 1.517 1.517 0 0 1 0 3.035Zm1.579-2.738a.353.353 0 1 1-.001-.707.353.353 0 0 1 0 .707Z" />
            </svg>
          </a>
        </div>
        <button class="scroll-top-btn" id="top" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="20.008" height="9.782" viewBox="0 0 20.008 9.782">
            <path id="Expand_More" d="M18.286.264,10,7.617,1.724.263A1.1,1.1,0,0,0,.3.263a.829.829,0,0,0,0,1.269L9.29,9.519h0a1.1,1.1,0,0,0,1.427,0l8.995-7.987a.83.83,0,0,0,0-1.27A1.1,1.1,0,0,0,18.286.264Z" transform="translate(0)" fill="#fff" />
          </svg>
        </button>
      </div>
      <div class="site-info__copyright">© {{ date('Y') }} | Spey - {{ __('International pharmaceutical company') }}</div>
    </div>
  </div>
</footer>
