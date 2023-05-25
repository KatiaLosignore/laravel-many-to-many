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
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology)
            <tr>
                <td>{{$technology->id}}</td>
                <td>{{$technology->name}}</td>
                <td>{{$technology->slug}}</td>
                <td>{{count($technology->projects)}}</td>
                <td><a class="btn btn-primary me-2" href="{{route('admin.technologies.show', $technology->slug)}}">Detail</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
