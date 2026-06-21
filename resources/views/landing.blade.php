@extends('main')

@section('content')

@include('partials.nav')

<main id="top">

    @include('partials.hero')
    @include('partials.showreel') {{-- B --}}
    @include('partials.empresas') {{-- router: parent showcase / sub services --}}
    @include('partials.beforeafter') {{-- C --}}
    @include('partials.tours') {{-- C --}}
    @include('partials.gallery') {{-- B --}}
    @include('partials.disciplines') {{-- B --}}
    @include('partials.stats') {{-- A --}}
    @include('partials.casestudy') {{-- A --}}
    @include('partials.process') {{-- A/C --}}
    @include('partials.packages') {{-- A/B/C --}}
    @include('partials.equipment') {{-- any --}}
    @include('partials.nosotros')
    @include('partials.testimonials') {{-- any --}}
    @include('partials.faq') {{-- any --}}
    @include('partials.logos') {{-- A --}}
    @include('partials.cta')
    @include('partials.contact')
    @include('partials.whatsapp') {{-- any (floating) --}}
</main>

@include('partials.footer')

@endsection