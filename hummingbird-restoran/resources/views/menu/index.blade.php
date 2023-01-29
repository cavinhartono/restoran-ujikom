@extends('layouts.dashboard')

@push('title')
Special Menu
@endpush

@section('content')
<x-navigation />
<div class="content">
  <header class="header">
    <h2 class="title"> Menu</h2>
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
  <div class="special_menu">
    <div class="menus">
      <table class="table">
        <div class="search">
          <div class="add">
            <a href="/menu/create" class="btn primary">Tambah</a>
          </div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <title>ionicons-v5-f</title>
              <path d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z" />
            </svg>
          </div>
          <input type="text" placeholder="Search name" />
        </div>
        <thead>
          <tr>
            <th style="text-align: start">#</th>
            <th style="text-align: start">Image</th>
            <th style="text-align: start">Price</th>
            <th style="text-align: start">Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td>
              <img src="" class="photo">
            </td>
            <td></td>
            <td>Nasi Goreng</td>
            <td style="text-align: center">
              {{---<a href="/dashboard/{{ $user->id }}" class="link">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                  <title>ionicons-v5-e</title>
                  <polyline points="196 220 260 220 260 392" style="
                                    fill: none;
                                    stroke: #000;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 40px;
                                  " />
                  <line x1="187" y1="396" x2="325" y2="396" style="
                                    fill: none;
                                    stroke: #000;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                    stroke-width: 40px;
                                  " />
                  <path d="M256,160a32,32,0,1,1,32-32A32,32,0,0,1,256,160Z" />
                </svg>
              </span>
              </a>---}}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection