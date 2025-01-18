@extends('layouts.app')
@section('title','portfolio-page')

@section('content')


<section class="section portfolio" id="portfolio">
    <div class="container">

      <p class="section-subtitle">Portfolio</p>

      <h2 class="h2 section-title">My Amazing Works</h2>

      <p class="section-text">
        Welcome to my blog space! Here, I share my passion for coding, my latest projects, and helpful guides on web development. Stay tuned for regular updates and fresh ideas!      </p>

      <ul class="portfolio-list">
        @if ($allPortfolio->isNotEmpty())
        @foreach ($allPortfolio as $showportfolio)
        <li>
          <a href="{{ $showportfolio->project_url }}" class="portfolio-card" style="background-image: url('{{ asset($showportfolio->image_path) }}')">
            <div class="card-content">

              <p class="card-subtitle">{{ $showportfolio->subtitle }}</p>

              <h3 class="h3 card-title">{{ $showportfolio->title }}</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>
        @endforeach
        @else
        <li>
          <a href="#" class="portfolio-card" style="background-image: url('{{ asset('assets/images/portfolio-2.jpg') }}')">
            <div class="card-content">

              <p class="card-subtitle">Vimeo</p>

              <h3 class="h3 card-title">Web Application for Desiverse</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>
        @endif

{{-- 

        <li>
          <a href="#" class="portfolio-card" style="background-image: url('{{ asset('assets/images/portfolio-2.jpg') }}')">
            <div class="card-content">

              <p class="card-subtitle">Vimeo</p>

              <h3 class="h3 card-title">Web Application for Desiverse</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>

        <li>
          <a href="#" class="portfolio-card" style="background-image: url('{{ asset('public/assets/images/portfolio-3.jpg') }}')">
            <div class="card-content">

              <p class="card-subtitle">Soundcloud</p>

              <h3 class="h3 card-title">Web Application for Desiverse</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>

        <li>
          <a href="#" class="portfolio-card" style="background-image: url('{{ asset('public/assets/images/portfolio-4.jpg') }}')">
            <div class="card-content">

              <p class="card-subtitle">Details</p>

              <h3 class="h3 card-title">Web Application for Desiverse</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li> --}}

      </ul>

    </div>
  </section>
  @endsection