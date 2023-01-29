@extends('layouts.dashboard')

@push('title')
Dashboard
@endpush

@section('content')
<x-navigation />
<section class="content">
  <header class="header">
    <h2 class="title">Dashboard</h2>
    <div class="nav_header">
      @can('laporan')
      <div class="filter">
        <button class="btn transparant">Month to date</button>
        <button class="btn transparant">Year to date</button>
        <button class="btn secondary">
          Export
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <title>ionicons-v5-b</title>
              <path d="M98,190.06,237.78,353.18a24,24,0,0,0,36.44,0L414,190.06c13.34-15.57,2.28-39.62-18.22-39.62H116.18C95.68,150.44,84.62,174.49,98,190.06Z" />
            </svg>
          </span>
        </button>
      </div>
      @endcan
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
  @can('laporan')
  <div class="report">
    <ul class="card">
      <li class="list">
        <!-- <div class="overview">
                <div class="content_header">
                  <h2 class="title">Sales Overview</h2>
                  <menu class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                  </menu>
                </div>
                <ul class="value">
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                </ul>
              </div>
              <div class="overview">
                <div class="content_header">
                  <h2 class="title">Purchase Overview</h2>
                  <menu class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                  </menu>
                </div>
                <ul class="value">
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                  <li class="list">
                    <span class="icon"></span>
                    <span class="subtitle">
                      <span class="subtitle">Total Sales</span>
                      <span class="value"> 786 </span>
                    </span>
                  </li>
                </ul>
              </div> -->
        <div class="card_content">
          <div class="logo">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                <title>ionicons-v5-c</title>
                <polyline points="352 144 464 144 464 256" style="
                          fill: none;
                          stroke: #000;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-width: 32px;
                        " />
                <path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160" style="
                          fill: none;
                          stroke: #000;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-width: 32px;
                        " />
              </svg>
            </span>
            <span class="subtitle">Revenue</span>
          </div>
          <span class="value"> IDR. 3.000.000 <b>+24%</b> </span>
        </div>
      </li>
      <li class="list">
        <div class="card_content">
          <div class="logo">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                <title>ionicons-v5-j</title>
                <path d="M336,256c-20.56,0-40.44-9.18-56-25.84-15.13-16.25-24.37-37.92-26-61-1.74-24.62,5.77-47.26,21.14-63.76S312,80,336,80c23.83,0,45.38,9.06,60.7,25.52,15.47,16.62,23,39.22,21.26,63.63h0c-1.67,23.11-10.9,44.77-26,61C376.44,246.82,356.57,256,336,256Zm66-88h0Z" />
                <path d="M467.83,432H204.18a27.71,27.71,0,0,1-22-10.67,30.22,30.22,0,0,1-5.26-25.79c8.42-33.81,29.28-61.85,60.32-81.08C264.79,297.4,299.86,288,336,288c36.85,0,71,9,98.71,26.05,31.11,19.13,52,47.33,60.38,81.55a30.27,30.27,0,0,1-5.32,25.78A27.68,27.68,0,0,1,467.83,432Z" />
                <path d="M147,260c-35.19,0-66.13-32.72-69-72.93C76.58,166.47,83,147.42,96,133.45,108.86,119.62,127,112,147,112s38,7.66,50.93,21.57c13.1,14.08,19.5,33.09,18,53.52C213.06,227.29,182.13,260,147,260Z" />
                <path d="M212.66,291.45c-17.59-8.6-40.42-12.9-65.65-12.9-29.46,0-58.07,7.68-80.57,21.62C40.93,316,23.77,339.05,16.84,366.88a27.39,27.39,0,0,0,4.79,23.36A25.32,25.32,0,0,0,41.72,400h111a8,8,0,0,0,7.87-6.57c.11-.63.25-1.26.41-1.88,8.48-34.06,28.35-62.84,57.71-83.82a8,8,0,0,0-.63-13.39C216.51,293.42,214.71,292.45,212.66,291.45Z" />
              </svg>
            </span>
            <span class="subtitle">Guests</span>
          </div>
          <span class="value"> 18 <b>Today</b> </span>
        </div>
      </li>
      <li class="list">
        <div class="card_content">
          <div class="logo">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                <title>ionicons-v5-c</title>
                <path d="M256,48C141.13,48,48,141.13,48,256s93.13,208,208,208,208-93.13,208-208S370.87,48,256,48Zm96,240H256a16,16,0,0,1-16-16V128a16,16,0,0,1,32,0V256h80a16,16,0,0,1,0,32Z" />
              </svg>
            </span>
            <span class="subtitle">Waiting Time</span>
          </div>
          <span class="value"> 21 min <b>-8%</b> </span>
        </div>
      </li>
      <li class="list">
        <div class="card_content">
          <div class="logo">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                <title>ionicons-v5-j</title>
                <path d="M332.64,64.58C313.18,43.57,286,32,256,32c-30.16,0-57.43,11.5-76.8,32.38-19.58,21.11-29.12,49.8-26.88,80.78C156.76,206.28,203.27,256,256,256s99.16-49.71,103.67-110.82C361.94,114.48,352.34,85.85,332.64,64.58Z" />
                <path d="M432,480H80A31,31,0,0,1,55.8,468.87c-6.5-7.77-9.12-18.38-7.18-29.11C57.06,392.94,83.4,353.61,124.8,326c36.78-24.51,83.37-38,131.2-38s94.42,13.5,131.2,38c41.4,27.6,67.74,66.93,76.18,113.75,1.94,10.73-.68,21.34-7.18,29.11A31,31,0,0,1,432,480Z" />
              </svg>
            </span>
            <span class="subtitle">Orders</span>
          </div>
          <span class="value"> 25 <b>+12%</b> </span>
        </div>
      </li>
    </ul>
    <div class="log">
      <h2 class="subtitle">Activities Log</h2>
      <table class="table">
        <div class="search">
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
            <th style="text-align: start">No</th>
            <th style="text-align: start">Roles</th>
            <th style="text-align: start">Name</th>
            <th style="text-align: start"></th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td style="text-transform: capitalize;">
              @forelse($user->roles as $role)
              {{ $role->name }}
              @empty
              Underfined
              @endforelse
            </td>
            <td>{{ $user->name }}</td>
            <td>
              @if(Cache::has('user-isOnline' . $user->id))
              <span class="subtitle success">
                Online
              </span>
              @endif
            </td>
            <td style="text-align: center">
              <a href="/dashboard/{{ $user->id }}" class="link">
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
              </a>
            </td>
          </tr>
          @empty
          <tr>
            <td>Everybody is offline...</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  @endcan
</section>
@endsection