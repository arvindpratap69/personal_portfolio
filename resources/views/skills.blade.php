
@extends('layouts.app')

@section('title','Skills-page')

@section('content')

<section class="section skills" id="skills">
    <div class="container">

      <p class="section-subtitle">My Skills</p>

      <h2 class="h2 section-title">I Develop Skills Regularly</h2>

      <p class="section-text">
        Consistently enhancing my skills to deliver better performance and innovative solutions
            </p>

      <ul class="skills-list">

        @if ($skills)
        @foreach ($skills as $skill)
        <li class="skills-item">
          <div class="wrapper" style="width: 95%">
            <h3 class=" skills-title">{{ $skill->skill_name }}</h3>

            <data class="skills-data" value="{{ $skill->proficiency }}">{{ $skill->proficiency }}%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: {{ $skill->proficiency}}%"></div>
          </div>
        </li>
        @endforeach
        @else
        <li class="skills-item">
          <div class="wrapper" style="width: 75%">
            <h3 class="skills-title">React</h3>

            <data class="skills-data" value="75">75%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 75%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 90%">
            <h3 class="skills-title">MongoDB</h3>

            <data class="skills-data" value="90">90%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 90%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 70%">
            <h3 class="skills-title">Python</h3>

            <data class="skills-data" value="70">70%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 70%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 80%">
            <h3 class="skills-title">PHP</h3>

            <data class="skills-data" value="80">80%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 80%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 75%">
            <h3 class="skills-title">JavaScript</h3>

            <data class="skills-data" value="75">75%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 75%"></div>
          </div>
        </li>
        @endif

      </ul>

    </div>
  </section>
  @endsection