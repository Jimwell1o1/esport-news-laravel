@guest
                  @if (Route::has('login'))
                  <li><a class="btn btn-primary sign-up-btn" href="{{ route('login') }}">{{ __('Log in') }}</a></li>
                  @endif

                  @if (Route::has('register'))
                  <li><a class="btn btn-primary sign-up-btn" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                  @endif
              @else

                  <li class="dropdown"><a href="{{ url('contact') }}"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="#">My Profile</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form></li>
                    </ul>
                  </li>
                </ul>
              @endguest
    