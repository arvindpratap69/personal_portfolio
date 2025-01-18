@extends('layouts.app')

@section('title','contact-page')

@section('content')

<section class="section contact" id="contact">
    <div class="container">

      <div class="contact-card">

        <p class="card-subtitle">Don't be shy</p>

        <h2 class="h2 section-title">Drop Me a Line</h2>

        <div class="wrapper">

          <form action="{{ route('contact.store') }}" method="post" class="contact-form">
            @csrf

            <input type="text" name="name" placeholder="Name"  class="contact-input @error('name')is-invalid @enderror">
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>
             @enderror

            <input type="email" name="email" placeholder="Email"  class="contact-input @error('email')is-invalid @enderror">
            @error('email')
            <p class="invalid-feedback">{{ $message }}</p>
             @enderror

            <textarea name="message" placeholder="Message"  class="contact-input @error('message')is-invalid @enderror"></textarea>
            @error('message')
            <p class="invalid-feedback">{{ $message }}</p>
             @enderror

            <button type="submit" class="btn-submit">Submit Message</button>

          </form>

          <ul class="contact-list">

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="location"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Address</h3>

                <address class="contact-item-link">
                 570, Awas Vikas Colony , Fatehpur(UP)
                </address>
              </div>

            </li>

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="mail"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Email</h3>

                <a href="mailto:hello@ethan.com" class="contact-item-link">arvindthakur6902@gmail.com</a>
              </div>

            </li>

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="call"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Phone</h3>

                <a href="tel:+1234567890" class="contact-item-link">+91 7275058538</a>
              </div>

            </li>

          </ul>

        </div>

      </div>

    </div>
  </section>

@endsection