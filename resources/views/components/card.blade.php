{{-- @props(['heading', 'footer']) --}}
{{-- <div class="my-2 flex flex-col bg-green-500"> --}}
<div>
  {{ $component = 'Hello' }}
  <div {{ $name->attributes->class([]) }}>{{ $name }}</div>
  {{-- <div>{{ $component }}</div> --}}
  <div>{{ $slot }}</div>
</div>
