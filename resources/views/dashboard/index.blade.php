@extends('layout.app')
@section('Dashboard')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3 class="text-primary fw-bold text-center">Welcome To Our</h3>
                <div class="app-brand demo d-flex justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" width="300" height="300">
                        <!-- Mesin Cuci -->
                        <!-- Body -->
                        <rect x="50" y="50" width="200" height="230" rx="20" fill="#FFFFFF" stroke="black" stroke-width="8" />
                        <rect x="50" y="80" width="200" height="7" fill="black" />
                        <!-- Door -->
                        <circle cx="150" cy="170" r="70" fill="#87CEEB" stroke="#4A90E2" stroke-width="8" />
                        <circle cx="150" cy="170" r="50" fill="#FFFFFF" />


                        <!-- Buttons -->
                        <circle cx="80" cy="68" r="10" fill="#FFFFFF" stroke="black" stroke-width="2" />
                        <circle cx="110" cy="68" r="10" fill="#FFFFFF" stroke="black" stroke-width="2" />
                        <rect x="140" y="50" width="7" height="30" fill="black" />
                        <rect x="163" y="57" width="70" height="20" rx="13" ry="13" fill="#FFFFFF" stroke="black" stroke-width="2" />


                        <!-- Waves (inside door) -->
                        <path d="M115 150c0 15 20 15 20 0s20-15 20 0" fill="none" stroke="#4A90E2" stroke-width="5" />
                        <path d="M115 170c0 10 20 10 20 0s20-10 20 0" fill="none" stroke="#4A90E2" stroke-width="5" />

                        <!-- Towel -->
                        <rect x="200" y="239" width="90" height="25" rx="9" ry="9" fill="#FFFFFF" stroke="#4A90E2" stroke-width="3" />
                        <rect x="200" y="265" width="90" height="25" rx="9" ry="9" fill="#FFFFFF" stroke="#4A90E2" stroke-width="3" />

                        <!-- Decorative base -->

                      </svg>

                        <!-- Background Gradient Circle -->
                        <defs>
                          <radialGradient id="bg-gradient" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                            <stop offset="0%" stop-color="#87CEEB" />
                            <stop offset="100%" stop-color="black" />
                          </radialGradient>
                        </defs>
                        <circle cx="150" cy="150" r="140" fill="url(#bg-gradient)" stroke="#FFFFFF" stroke-width="5" />

                        <!-- Washer Machine -->
                        <g>
                          <!-- Outer Washer -->
                          <circle cx="150" cy="150" r="90" fill="#FFFFFF" stroke="black" stroke-width="10" />
                          <!-- Inner Circle -->
                          <circle cx="150" cy="150" r="60" fill="black" />
                          <!-- Waves -->
                          <path d="M110 150c0 20 40 20 40 0s40-20 40 0" fill="none" stroke="#FFFFFF" stroke-width="5" />
                        </g>

                        <!-- Bubbles -->
                        <g>
                          <circle cx="100" cy="80" r="15" fill="#FFFFFF" stroke="black" stroke-width="2" />
                          <circle cx="190" cy="60" r="10" fill="#FFFFFF" stroke="black" stroke-width="2" />
                          <circle cx="80" cy="180" r="12" fill="#FFFFFF" stroke="black" stroke-width="2" />
                          <circle cx="220" cy="190" r="8" fill="#FFFFFF" stroke="black" stroke-width="2" />
                        </g>

                      </svg>

                </div>
                <h5 class="app-brand-text demo menu-text fw-bolder ms-2 text-center text-primary" style="text-transform: none">Laundry App !</h5>
            </div>
        </div>
    </div>
@endsection
