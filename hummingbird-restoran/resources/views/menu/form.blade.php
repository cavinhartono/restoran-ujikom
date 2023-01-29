@extends('layouts.dashboard')

@push('title')
{{ $title }}
@endpush

@section('content')
<x-navigation />
<div class="content">
  <header class="header">
    <h2 class="title">{{ $title }}</h2>
    <div class="nav_header">
      <img src="/assets/images/mushroom.jpeg" class="photo" onclick="document.querySelector('.popup').classList.toggle('active');" />
      <div class="popup">
        <div class="profile_info">
          <h2 class="subtitle">
            <span class="greeting">Selamat Pagi, Admin.</span> John Doe
          </h2>
        </div>
        <ul class="profile">
          <li class="list">
            <a href="/account" class="link">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                  <title>ionicons-v5-q</title>
                  <path d="M262.29,192.31a64,64,0,1,0,57.4,57.4A64.13,64.13,0,0,0,262.29,192.31ZM416.39,256a154.34,154.34,0,0,1-1.53,20.79l45.21,35.46A10.81,10.81,0,0,1,462.52,326l-42.77,74a10.81,10.81,0,0,1-13.14,4.59l-44.9-18.08a16.11,16.11,0,0,0-15.17,1.75A164.48,164.48,0,0,1,325,400.8a15.94,15.94,0,0,0-8.82,12.14l-6.73,47.89A11.08,11.08,0,0,1,298.77,470H213.23a11.11,11.11,0,0,1-10.69-8.87l-6.72-47.82a16.07,16.07,0,0,0-9-12.22,155.3,155.3,0,0,1-21.46-12.57,16,16,0,0,0-15.11-1.71l-44.89,18.07a10.81,10.81,0,0,1-13.14-4.58l-42.77-74a10.8,10.8,0,0,1,2.45-13.75l38.21-30a16.05,16.05,0,0,0,6-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16,16,0,0,0-6.07-13.94l-38.19-30A10.81,10.81,0,0,1,49.48,186l42.77-74a10.81,10.81,0,0,1,13.14-4.59l44.9,18.08a16.11,16.11,0,0,0,15.17-1.75A164.48,164.48,0,0,1,187,111.2a15.94,15.94,0,0,0,8.82-12.14l6.73-47.89A11.08,11.08,0,0,1,213.23,42h85.54a11.11,11.11,0,0,1,10.69,8.87l6.72,47.82a16.07,16.07,0,0,0,9,12.22,155.3,155.3,0,0,1,21.46,12.57,16,16,0,0,0,15.11,1.71l44.89-18.07a10.81,10.81,0,0,1,13.14,4.58l42.77,74a10.8,10.8,0,0,1-2.45,13.75l-38.21,30a16.05,16.05,0,0,0-6.05,14.08C416.17,247.67,416.39,251.83,416.39,256Z" style="
                    fill: none;
                    stroke: #000;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-width: 32px;
                  " />
                </svg>
              </span>
              <span class="subtitle">Pengaturan</span>
            </a>
          </li>
          <li class="list">
            <a href="/auth/logout" class="link">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                  <title>ionicons-v5-o</title>
                  <path d="M304,336v40a40,40,0,0,1-40,40H104a40,40,0,0,1-40-40V136a40,40,0,0,1,40-40H256c22.09,0,48,17.91,48,40v40" style="
                            fill: none;
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 32px;
                          " />
                  <polyline points="368 336 448 256 368 176" style="
                            fill: none;
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 32px;
                          " />
                  <line x1="176" y1="256" x2="432" y2="256" style="
                            fill: none;
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 32px;
                          " />
                </svg>
              </span>
              <span class="subtitle">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="form_content">
    <x-menu-form action="{{ $action }}" btn="{{ $btn }}" name='{{ $name ?? "" }}' price="{{ $price ?? '' }}" desc="{{ $desc ?? '' }}" put="{{ $put ?? '' }}" />
  </div>
</div>
@endsection