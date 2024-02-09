@extends('layouts.client')
@section('main')

    <div class="xl:px-margin px-4 py-4 flex flex-col gap-4">

        <h1 class="text-3xl xl:text-4xl xl:text-start text-center">@lang('Privacy-Title')</h1>
        <p>@lang('Privacy-Paragraph')</p>

        <h2 class="font-bold text-xl">@lang('Privacy-1.1')</h2>
        <ul class="list-disc px-5">
            <li>Luciano & Abreu, Lda</li>
            <li>NIPC: 517 934 108</li>
        </ul>

        <h2 class="font-bold text-xl">@lang('Privacy-1.2')</h2>
        <p>@lang('Privacy-1.2-Paragraph')</p>
        
        <h2 class="font-bold text-xl">@lang('Privacy-1.3')</h2>
        <h3 class="text-lg">@lang('Privacy-1.3-Subtitle')</h3>
        <ul class="list-disc px-5">
            @for ($i = 1; $i <= 7; $i++)
                <li>@lang('Privacy-1.3-Ul.Li.'.$i)</li>
            @endfor
        </ul>
        <p>@lang('Privacy-1.3-Paragraph')</p>
        

        <h2 class="font-bold text-xl">@lang('Privacy-1.4')</h2>
        <p>@lang('Privacy-1.4-Paragraph.1')</p>
        <ul class="list-disc px-5">
            @for ($i = 1; $i <= 3; $i++)
                <li>@lang('Privacy-1.4-Ul.1.Li.'.$i)</li>
            @endfor
        </ul>
        <p>@lang('Privacy-1.4-Paragraph.2')</p>
        <ul class="list-disc px-5">
            @for ($i = 1; $i <= 4; $i++)
                <li>@lang('Privacy-1.4-Ul.2.Li.'.$i)</li>
            @endfor
        </ul>

        <h2 class="font-bold text-xl">@lang('Privacy-1.5')</h2>
        <p>@lang('Privacy-1.5-Paragraph')</p>

        <h2 class="font-bold text-xl">@lang('Privacy-1.6')</h2>
        <p>@lang('Privacy-1.6-Paragraph')</p>
        <ul class="list-disc px-5">
            @for ($i = 1; $i <= 3; $i++)
                <li>@lang('Privacy-1.6-Ul.Li.'.$i)</li>
            @endfor
        </ul>

        <h2 class="font-bold text-xl">@lang('Privacy-1.7')</h2>
        <p>@lang('Privacy-1.7-Paragraph')</p>

        <h2 class="font-bold text-xl">@lang('Privacy-1.8')</h2>
        <p>@lang('Privacy-1.8-Paragraph.1')</p>
        <ul class="list-disc px-5">
            @for ($i = 1; $i <= 1; $i++)
                <li>@lang('Privacy-1.8-Ul.Li.'.$i)</li>
            @endfor
        </ul>
        <p>@lang('Privacy-1.8-Paragraph.2')</p>

    </div>

@endsection
