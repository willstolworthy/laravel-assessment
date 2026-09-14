@props(['label', 'title', 'subtitle'])

<section class="content">
    <div class="content__header">
        <div>
            <div class="page__label">{{ $label }}</div>
            <h1 class="page__title">{{ $title }}</h1>
            <p class="page__subtitle">{{ $subtitle }}</p>
        </div>
        @isset($actions)
            <div class="content_actions">
                {{ $actions }}
            </div>
        @endisset
    </div>

    {{ $slot }}
</section>