<div {{$attributes}}>
    @foreach($available_locales as $locale_name => $available_locale)
    @if($available_locale === $current_locale)
    <div class='active hidden w:full'>{{ $locale_name }}</div>
    @else
    <div onclick="location.href='language/{{$available_locale }}';" style="cursor: pointer;" class="nonActive">{{ $locale_name }}</div>
    @endif
    @endforeach
</div>