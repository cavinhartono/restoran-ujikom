<div>
  <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
  <nav class="navigation">
    <div class="logo">
      <a href="#" class="link">
        <img src="{{ asset('assets/images/logo.png') }}" class="photo" />
      </a>
      <menu class="menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
          <title>ionicons-v5-j</title>
          <line x1="88" y1="152" x2="424" y2="152" style="
                  fill: none;
                  stroke: #000;
                  stroke-linecap: round;
                  stroke-miterlimit: 10;
                  stroke-width: 48px;
                " />
          <line x1="88" y1="256" x2="424" y2="256" style="
                  fill: none;
                  stroke: #000;
                  stroke-linecap: round;
                  stroke-miterlimit: 10;
                  stroke-width: 48px;
                " />
          <line x1="88" y1="360" x2="424" y2="360" style="
                  fill: none;
                  stroke: #000;
                  stroke-linecap: round;
                  stroke-miterlimit: 10;
                  stroke-width: 48px;
                " />
        </svg>
      </menu>
    </div>
    <ul class="item">
      <li class="list">
        <a href="/dashboard" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <path d="M32,32V464a16,16,0,0,0,16,16H480" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <rect x="96" y="224" width="80" height="192" rx="20" ry="20" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <rect x="240" y="176" width="80" height="240" rx="20" ry="20" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <rect x="383.64" y="112" width="80" height="304" rx="20" ry="20" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
            </svg>
          </span>
          <span class="subtitle">Dashboard</span>
        </a>
      </li>
      @can('menu')
      <li class="list">
        <a href="/menu" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <title>ionicons-v5-l</title>
              <path d="M322,416c0,35.35-20.65,64-56,64H134c-35.35,0-56-28.65-56-64" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <path d="M336,336c17.67,0,32,17.91,32,40h0c0,22.09-14.33,40-32,40H64c-17.67,0-32-17.91-32-40h0c0-22.09,14.33-40,32-40" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <path d="M344,336H179.31a8,8,0,0,0-5.65,2.34l-26.83,26.83a4,4,0,0,1-5.66,0l-26.83-26.83a8,8,0,0,0-5.65-2.34H56a24,24,0,0,1-24-24h0a24,24,0,0,1,24-24H344a24,24,0,0,1,24,24h0A24,24,0,0,1,344,336Z" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <path d="M64,276v-.22c0-55,45-83.78,100-83.78h72c55,0,100,29,100,84v-.22" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <line x1="241" y1="112" x2="248.44" y2="175.97" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <path d="M256,480H395.31a32,32,0,0,0,31.91-29.61L463,112" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
              <polyline points="368 112 384 48 431 32" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="224" y1="112" x2="480" y2="112" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                      stroke-width: 32px;
                    " />
            </svg>
          </span>
          <span class="subtitle">Menu</span>
        </a>
      </li>
      @endcan
      @can('transaksi')
      <li class="list">
        <a href="/transaction" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <title>ionicons-v5-l</title>
              <rect x="32" y="80" width="448" height="256" rx="16" ry="16" transform="translate(512 416) rotate(180)" style="
                      fill: none;
                      stroke: #000;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="64" y1="384" x2="448" y2="384" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="96" y1="432" x2="416" y2="432" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <circle cx="256" cy="208" r="80" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M480,160a80,80,0,0,1-80-80" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M32,160a80,80,0,0,0,80-80" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M480,256a80,80,0,0,0-80,80" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M32,256a80,80,0,0,1,80,80" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
            </svg>
          </span>
          <span class="subtitle">Transaksi</span>
        </a>
      </li>
      @endcan
      <li class="list">
        <a href="/activities" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
              <title>ionicons-v5-n</title>
              <path d="M368,415.86V72a24.07,24.07,0,0,0-24-24H72A24.07,24.07,0,0,0,48,72V424a40.12,40.12,0,0,0,40,40H416" style="
                      fill: none;
                      stroke: #000;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M416,464h0a48,48,0,0,1-48-48V128h72a24,24,0,0,1,24,24V416A48,48,0,0,1,416,464Z" style="
                      fill: none;
                      stroke: #000;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="240" y1="128" x2="304" y2="128" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="240" y1="192" x2="304" y2="192" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="112" y1="256" x2="304" y2="256" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="112" y1="320" x2="304" y2="320" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <line x1="112" y1="384" x2="304" y2="384" style="
                      fill: none;
                      stroke: #000;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 32px;
                    " />
              <path d="M176,208H112a16,16,0,0,1-16-16V128a16,16,0,0,1,16-16h64a16,16,0,0,1,16,16v64A16,16,0,0,1,176,208Z" />
            </svg>
          </span>
          <span class="subtitle">Aktivitas</span>
        </a>
      </li>
    </ul>
  </nav>
</div>