@extends('layouts.admin')

@section('content')

<h1 class="mt-3 mb-3">List of Technologies</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Number of projects</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology)
            <tr>
                <td>{{$technology->id}}</td>
                <td>{{$technology->name}}</td>
                <td>{{$technology->slug}}</td>
                <td>{{count($technology->projects)}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
