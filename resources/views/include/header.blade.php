
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="{{asset('images/hero-bg.jpg')}}" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom" >
        <div class="container-fluid" >
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                {{__("message.guarder")}}
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent" >
              <ul class="navbar-nav  {{LaravelLocalization::getCurrentLocale()}}">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('Guarder.index')}}">{{__("message.home")}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('Guarder.about')}}"> {{__("message.about")}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('Guarder.service')}}"> {{__("message.service")}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('Guarder.guards')}}"> {{__("message.guards")}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('Guarder.contact')}}"> {{__("message.contact_us")}}</a>
                </li>
               
              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__("message.langauge")}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{ LaravelLocalization::getLocalizedURL('en') }}">{{__("message.english")}}</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item"  href="{{ LaravelLocalization::getLocalizedURL('ar') }}">{{__("message.arabic")}}</a>

                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

