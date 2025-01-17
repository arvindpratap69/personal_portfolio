@extends('layouts.app')

@section('title','Home-page')
@section('content')



<main>
    <article>

      <!-- 
        - #HERO
      -->

      @if($latestHome)
      <section class="hero" id="home">
        <div class="container">

          <div class="hero-banner">

            <img src="{{ asset($latestHome->image) }}" width="800" height="864" loading="lazy" alt="Ethan's Photo"
              class="img-cover">

            <div class="elem elem-1">
              <p class="elem-title">{{ $latestHome->experince }}</p>

              <p class="elem-text">of Success</p>
            </div>

            <div class="elem elem-2">
              <p class="elem-title">{{ $latestHome->count_projects }}+</p>

              <p class="elem-text">Projects Completed</p>
            </div>

            <div class="elem elem-3">
              <ion-icon name="trophy"></ion-icon>
            </div>

            {{-- <img src="{{ asset('assets/images/rotate-img.png') }}" width="169" height="172" alt="I'm developer from New York"
              class="rotate-img"> --}}

          </div>

          <div class="hero-content">

            <h2 class="hero-title">
              <span>Hello I'm</span>
              <strong>{{ $latestHome->name }}</strong> {{ $latestHome->role }}
            </h2>

            <p class="hero-text">
              {{ $latestHome->description }}
            </p>

            <div class="btn-group">
              <a href="#contact" class="btn btn-primary blue">Get a Quote</a>

              <a href="#about" class="btn">About Me</a>
            </div>

          </div>

        </div>
      </section>
      @else
      <section class="hero" id="home">
        <div class="container">
          <div class="hero-banner">
            <img src="{{ asset('default-image.jpg') }}" width="800" height="864" loading="lazy" alt="Default Hero Image" class="img-cover">
            <div class="elem elem-1">
              <p class="elem-title">5+</p>
              <p class="elem-text">Years of Success</p>
            </div>
            <div class="elem elem-2">
              <p class="elem-title">10+</p>
              <p class="elem-text">Projects Completed</p>
            </div>
            <div class="elem elem-3">
              <ion-icon name="trophy"></ion-icon>
            </div>
          </div>
    
          <div class="hero-content">
            <h2 class="hero-title">
              <span>Hello I'm</span>
              <strong>John Doe</strong> Web Developer
            </h2>
    
            <p class="hero-text">
              Passionate about building user-centric websites and web applications.
            </p>
    
            <div class="btn-group">
              <a href="#contact" class="btn btn-primary blue">Get a Quote</a>
              <a href="#about" class="btn">About Me</a>
            </div>
          </div>
        </div>
      </section>
@endif    





      <!-- 
        - #ABOUT
      -->






      <!-- 
        - #PORTFOLIO
      -->

   





      <!-- 
        - #SKILLS
      -->






      <!-- 
        - #CONTACT
      -->

    





      <!-- 
        - #BLOG
      -->

    

    </article>
  </main>

  @endsection