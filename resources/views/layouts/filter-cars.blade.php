

{{--Marques Liste--}}

@foreach ($marques as $marque)

  {{-- {{ $marque }} --}}

@endforeach




<div class="row center">

  {{ Form::open( array('method' => 'get', 'class' => 'form-red filter') ) }}

    <div class="col m2 offset-m2">

      <select name="marque">

        <option value="">

          Toutes les marques

        </option>

        {{--Displaying list of brand--}}
        @foreach ($marques as $marque)

          {{--Check if a brand is already selected--}}
          <option value="{{ $marque }}" @if( request()->get('marque') == $marque ) selected="selected" @endif>

            {{ $marque }}

          </option>

        @endforeach

      </select>

    </div>

    <div class="col m2">

      {{--Check if a minimum price is already selected--}}
      @if(request()->get('prix_min'))

        {{ Form::number('prix_min', request()->get('prix_min'), array('class' => 'test')) }}

      {{--Or input 0 as minimum price--}}
      @else

        {{ Form::number('prix_min', '0') }}

      @endif

    </div>

    <div class="col m2">

      {{--Check if a maximum price is already selected--}}
      @if(request()->get('prix_max'))

        {{ Form::number('prix_max', request()->get('prix_max')) }}

      {{--Or input 1 000 000 as maximum price--}}
      @else

        {{ Form::number('prix_max', '1000000') }}

      @endif

    </div>

    <div class="col m2 center">

      {{ Form::submit('Rechercher', array('class' => 'waves-effect waves-light btn red') ) }}

    </div>

  {{ Form::close() }}

</div>
