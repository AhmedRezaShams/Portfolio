@extends('welcome')
@section('content')
<!-- header starts -->
@if (Route::has('logout'))
          <a href="{{ route('logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
        @endif
@include('partials.header')
<!-- header end -->
<main class='main'>
<!-- home starts -->
@include('partials.home')
<!-- home end -->
<!-- about starts -->
@include('partials.about')
<!-- about end -->
<!-- about starts -->
@include('partials.resume')
<!-- about end -->
<!-- portfolio starts -->
@include('partials.portfolio')
<!-- portfolio end -->
<!-- service starts  -->
@include('partials.service')
<!-- service end -->
<!-- contact start -->
@include('partials.contacts')
<!-- contact end -->
</main>

@include('partials.footer')
@endsection
