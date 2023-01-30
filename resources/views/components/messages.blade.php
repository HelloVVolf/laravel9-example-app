@if (Session::has('success'))
  <span class="bg-green-500">{{ Session::get('success') }}</span>
@endif

@if ($errors->any())
  <div class="w-fit bg-red-300">
    @foreach ($errors->all() as $item)
      <span>{{ $item }}</span>
    @endforeach
  </div>
@endif
