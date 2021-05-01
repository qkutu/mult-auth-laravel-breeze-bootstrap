@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'alert alert-danger alert-dismissible fade show']) }} role="alert">
    <h4 class="alert-heading">
         {{ __('Whoops! Something went wrong.') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </h4>
    @foreach ($errors->all() as $error)
        <hr>
  <p class="mb-0">{{$error}}</p>
    @endforeach
</div>
@endif
