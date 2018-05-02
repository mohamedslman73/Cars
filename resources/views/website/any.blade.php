

{{--
 @if(session()->has('date'))
{{session()->get('date')}}

@endif

@if(session()->has('location'))
{{session()->get('location')}}
@endif

@if(session()->has('return_date'))
{{session()->get('return_date')}}
@endif
--}}
{{\Illuminate\Support\Facades\Cookie::get('return_date')}}
