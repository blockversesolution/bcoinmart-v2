@extends('frontend.layouts.app')
@section('content')

    <main class="main-area">
        <!-- Hero Start-->
        @include('frontend.includes.home.hero')
        <!-- Hero End -->

        <!-- Tranding Token Start -->
        @include('frontend.includes.home.tranding_token')
        <!-- Tranding Token End -->
        <!-- shape start  -->
        @include('frontend.includes.home.shape_section')
        <!-- shape End  -->
        <!-- Connected Start -->
        @include('frontend.includes.home.connected_section')
        <!-- Connected End -->
        <!-- Start Process Start -->
        @include('frontend.includes.home.start_process_section')
        <!-- Start Process  End -->
        <!--    Embark Section start -->
        @include('frontend.includes.embark_section')
        <!--     Embark Section End -->
        <!-- FAQ Section Start -->
        @include('frontend.includes.home.faq')

        @include('frontend.includes.company_slider')
    </main>

@endsection
