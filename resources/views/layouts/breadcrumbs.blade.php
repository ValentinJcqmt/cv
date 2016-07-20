@if ($breadcrumbs)
    <div class="row">
        <div class="col s12">
            <div class="breadcrumb">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if (!$breadcrumb->last)
                        <a class="red-text text-lighten-2" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a> <span class="red-text text-lighten-2"> > </span>
                    @else
                        <a class="red-text text-darken-2" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
