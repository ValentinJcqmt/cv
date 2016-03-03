@if ($breadcrumbs)
    <div class="row" style="">
        <div class="col s12">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a> <span class="blue-text text-darken-2"> > </span>
            @else
                <a href="">{{ $breadcrumb->title }}</a>
            @endif
        @endforeach
        </div>
    </div>
@endif