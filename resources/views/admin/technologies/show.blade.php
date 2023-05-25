@extends('layouts.admin')


@section('content')

<h1 class="mt-3">{{$technology->name}}</h1>
<h6 class="mb-3"><small>Slug: {{$technology->slug}}</small></h6>

<h3>Type: {{$technology->project?$technology->project->title:'No matched title'}}</h3>

<div class="mb-3 mt-3">
    @foreach ($technology->projects as $tech)
        <span class="badge rounded-pill text-bg-primary">{{$tech->link_project}}</span>
    @endforeach
</div>


<a class="btn btn-primary" href="{{route('admin.technologies.index')}}">Back</a>

@endsection