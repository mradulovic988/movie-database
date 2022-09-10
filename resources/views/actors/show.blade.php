@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="https://image.tmdb.org/t/p/w470_and_h470_face//xNGDL5Wya6sjiAH6Fk417c2geAs.jpg" alt="parasite"
                class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Will Smith</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>

                    <span class="ml-1">Stuff</span>
                    <span class="mx-2">|</span>
                    <span>More stuff</span>
                    <span class="mx-2">|</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quae doloremque culpa, corrupti,
                    eius facere ea rem ducimus iusto quo neque id obcaecati! Quam blanditiis illo doloribus. Fugit, nostrum
                    tenetur?
                </p>
            </div>
        </div>
    </div><!-- end credits info -->
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
        </div>
    </div>
@endsection
