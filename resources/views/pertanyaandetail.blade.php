@extends("welcome")

@section("content")

<a class="btn btn-danger btn-sm" title="Back to Previous Page" href="{{route('pertanyaan')}}">
    <span class="fa fa-arrow-left"></span>
    Back
</a>
<br>
<br>
@foreach($pertanyaan as $p)
<h1>{{$p->judul}}</h1>
<small class="text-muted">(Created on: {{$p->created_at}})</small>

<small class="text-muted">(Updated on: {{$p->updated_at}})</small>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger">{{$p->isi}}</li>
</ul>
@endforeach
<br>

<ul class="list-group">
    @foreach($jawaban as $j)
    <li class="list-group-item list-group-item-success">{{$j->isi}}</li>
    @endforeach
</ul>

@endsection