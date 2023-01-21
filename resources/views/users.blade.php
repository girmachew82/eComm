@extends('app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="edit_user/{{ $user->id }}" target="_blank" rel="noopener noreferrer">{{ $user->id }}Edit|</a>{{ $user->id }}Delete</td>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{ $users->links() }}
@endsection
