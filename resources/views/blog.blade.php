@extends('layouts.app')

@section('title','blog-page')

@section('content')

<section class="section blog" id="blog">
    <div class="container">

      <p class="section-subtitle">Latest News</p>

      <h2 class="h2 section-title">Checkout My Recent Blogs</h2>

      <p class="section-text">
        Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate
      </p>

      <ul class="blog-list">

        <li>
          <div class="blog-card">

            <figure class="card-banner">
              <a href="#">
                <img src="{{ asset('public/assets/images/blog-1.jpg') }}" width="1181" height="843" loading="lazy"
                  alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
              </a>
            </figure>

            <a href="#" class="card-tag">Web Development</a>

            <h3 class="card-title">
              <a href="#">Jim Morisson Says when the musics over turn off the light</a>
            </h3>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner">
              <a href="#">
                <img src="{{ asset('public/assets/images/blog-2.jpg') }}" width="1181" height="843" loading="lazy"
                  alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
              </a>
            </figure>

            <a href="#" class="card-tag">Web Development</a>

            <h3 class="card-title">
              <a href="#">Jim Morisson Says when the musics over turn off the light</a>
            </h3>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner">
              <a href="#">
                <img src="{{ asset('public/assets/images/blog-3.jpg') }}" width="1181" height="843" loading="lazy"
                  alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
              </a>
            </figure>

            <a href="#" class="card-tag">Web Development</a>

            <h3 class="card-title">
              <a href="#">Jim Morisson Says when the musics over turn off the light</a>
            </h3>

          </div>
        </li>

      </ul>

    </div>
  </section>
  @endsection