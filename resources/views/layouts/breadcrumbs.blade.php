@if ($breadcrumbs)
    <div class="row">
        <div class="col s12">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <a class="blue-grey-text text-blue-grey" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a> <span class="blue-grey-text text-blue-grey"> > </span>
            @else
                <a href="">{{ $breadcrumb->title }}</a>
            @endif
        @endforeach
        </div>
    </div>
@endif