@extends('layouts.iframe')
@section('main')

    <!-- Carousel Div For Carsousel And Buttons -->
    <div class="relative z-10 w-full overflow-hidden">

        <!-- Carousel Slide -->
        <div id="carousel-slide" class="rounded grid transition-transform duration-500 h-full bg-black" style="grid-template-columns: @for($i = 1; $i <= 5; $i++) 100% @endfor">
        
            @for ($i = 1; $i <= 5; $i++)
            
                <!-- Carousel Item -->
                <div class="w-full bg-flagBlue px-32 py-4 rounded text-white">

                    <p>@lang('home-reviews-'.$i.'-paragraph')</p>

                    <p>@lang('home-reviews-'.$i.'-author')</p>

                </div>

            @endfor

        </div>
        
        <!-- Carousel Buttons -->
        <div class="absolute top-0 w-full h-full flex justify-between items-center">
        
            <!-- Previous Button -->
            <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn">
                <div class="p-4 w-16">
                    <x-font-awesome.arrow-left/>
                </div>
            </button>
            
            <!-- Next Button -->
            <button class="cursor-pointer w-32 h-full flex items-center justify-center" id="nextBtn">
                <div class="p-4 w-16">
                    <x-font-awesome.arrow-right/>
                </div>
            </button>
        
        </div>

        <!-- Carousel Indicator -->
        <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4">
        
            @for ($i = 0; $i <= 4; $i++)
                <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="review-{{$i}}-indicator"></div>
            @endfor

        </div>
        
    </div>

@endsection
