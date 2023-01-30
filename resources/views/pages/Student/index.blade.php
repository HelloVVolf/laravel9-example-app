<x-app>
  @include('components.messages')
  <h1 class="text-xl">Student Page</h1>
  <table>
    <tr class="border">
      <th class="border px-6">ID</th>
      <th class="border px-6">Name</th>
      <th class="border px-6">Address</th>
      <th class="border px-6">Action</th>
    </tr>

    @foreach ($students as $item)
      <tr class="border">
        <td class="border">{{ $item->id }}</td>
        <td class="border">{{ $item->name }}</td>
        <td class="border">{{ $item->address }}</td>
        <td class="border p-4">
          <button class="rounded bg-blue-500 p-2 text-white">Edit</button>
          <button class="rounded bg-red-500 p-2 text-white">Delete</button>
        </td>
      </tr>
    @endforeach
  </table>
</x-app>
