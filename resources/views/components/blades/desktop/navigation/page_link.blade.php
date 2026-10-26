@php
    $icon = Blade::render("<x-icons.navigation.$iconName class=\"I-LINK-icon\" style=\"transform: scale($iconScale)\" />");

    $isWriteArticle = $href === route('write_an_article');
    $isExternal = Str::startsWith($href, 'https://');
@endphp

<a
    class="L-NAVIGATION-link TYPO-D-PRESET-CORE_DEFAULT"
    @if($isWriteArticle) id="DESKTOP-NAVIGATION-PAGES_LINKS-CREATE_ARTICLE" @endif
    href="{{ $href }}"
    @if($isExternal) target="_blank" rel="noopener noreferrer" @endif
>
    {!! $icon !!}
    <span class="T-LINK-heading">{{ $heading }}</span>
</a>
