{{--
  Template Name: Madre Front Template
  Template Post Type: page, pages
--}}


@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="uk-container">
    @if(!empty($intro_area))
    <section uk-grid class="uk-grid madre-section madre-intro">
      <div class="madre-introhead uk-width-3-4">
        @if(!empty($intro_area->title))
          <h2>{{ $intro_area->title }}</h2>
        @endif
        @if(!empty($intro_area->subtitle))
          <h3>{{ $intro_area->subtitle }}</h3>
        @endif
      </div>

      @if(!empty( $intro_area->text ))
        <div class="uk-width-4-5">{!! $intro_area->text !!}</div>
      @endif
    </section>
    @endif
    @if(!empty($reservations_area))
    <section uk-grid class="uk-grid madre-section madre-reserv">
      <div class="uk-width-1-2">
      @if(!empty($reservations_area->title))
        <h2 >{{ $reservations_area->title }}</h2>
      @endif
      @if(!empty($reservations_area->subtitle))
        <h3>{{ $reservations_area->subtitle }}</h3>
      @endif
      @if(!empty( $reservations_area->text ))
        <p>{!! $reservations_area->text !!}</p>
      @endif
      </div>
      <div class="uk-width-1-2">
      <script data-resmio-button="madre-2"> (function(d, s) { var js, rjs = d.getElementsByTagName(s)[0]; js = d.createElement(s); js.src = "//static.resmio.com/static/en/button.js"; js.async = true; rjs.parentNode.insertBefore(js, rjs); }(document, "script") ); </script>
      </div>
    </section>
    @endif
    @if(!empty($contact_area))
    <section uk-grid class="uk-grid madre-section madre-contact">
      <div class="uk-width-1-2">
        @if(!empty( $contact_area->text ))
          {!!  $contact_area->text !!}
        @endif
      </div>
      @if(!empty($menu_area))
      <div class="uk-width-1-2 madre-menu">
        @if(!empty($menu_area->title))
          <h2>{{ $menu_area->title }}</h2>
        @endif
        @if(!empty($menu_area->subtitle))
          <h3>{{ $menu_area->subtitle }}</h3>
        @endif
        @if(!empty( $menu_area->text ))
          <p class="uk-width-1-2">{!!  $menu_area->text !!}</p>
        @endif
        @if(!empty( $menu_area->file ))
          <a href="{{ $menu_area->file->url }}" class="madre-menu-link">Download</a>
        @endif  
        </div>
      @endif
    </section>
    @endif

    @if(!empty($footer))
    <section uk-grid class="madre-section madre-footer">
      <ul>
        <li>@Madre Berlin</li>
        <li>Datenschutz</li>
        <li>Impressum/ Imprint</li>
      </ul>
       
    </section>
    @endif

    
    </div>
  @endwhile
@endsection
