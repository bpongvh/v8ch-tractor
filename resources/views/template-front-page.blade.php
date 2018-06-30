{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app-blank-canvas')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection
