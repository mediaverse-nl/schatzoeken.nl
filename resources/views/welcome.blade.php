@extends('layouts.site')

@section('meta_title', $page->title)
@section('meta_description', $page->meta_description)

@section('content')

    <!-- Header -->
    @include('components.page-banner')

    <section id="projects" class="projects-section bg-light">
        <div class="container">

            asdads

        </div>
    </section>
@stop

@push('css')
    <style>
        .img-fluid{
            object-fit: cover !important;
            height: 340px;
            width: 100%;
            object-position: 50% 50%;
        }
    </style>
@endpush

