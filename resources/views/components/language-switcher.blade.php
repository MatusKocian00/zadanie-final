<div {{$attributes}}>
    @foreach($available_locales as $locale_name => $available_locale)
    @if($available_locale === $current_locale)
    <a class='active underline'>{{ $locale_name }}</a>
    @else
    <a href=" language/{{$available_locale }}">{{ $locale_name }}</a>
    @endif
    @endforeach
</div>