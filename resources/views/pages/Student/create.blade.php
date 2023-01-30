<x-app>
  @include('components.messages')
  <form action="/student/store" method="POST" class="mt-4">
    @csrf
    <input class="border" type="text" name="name" placeholder="Name" value="{{ Session::get('name') }}">
    <input class="border" type="text" name="address" placeholder="Adress" value="{{ Session::get('address') }}">
    <input class="border" type="textarea" name="description" placeholder="Desc"
      value="{{ Session::get('description') }}">
    <input class="border" type="submit" value="submit">
  </form>
</x-app>
