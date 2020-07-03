@extends("welcome")

@section("content")

<a class="btn btn-danger btn-sm" title="Back to Previous Page" href="{{route('pertanyaan')}}">
    <span class="fa fa-arrow-left"></span>
    Back
</a>
<br>
<br>
<div class="jumbotron">
    <h1>Anda yakin ingin delete data berikut?</h1>
    @foreach($pertanyaan as $p)
    <h1>{{$p->judul}}</h1>
    <small class="text-muted">(Created on: {{$p->created_at}})</small>

    <small class="text-muted">(Updated on: {{$p->updated_at}})</small>
    <ul class="list-group">
        <li class="list-group-item list-group-item-danger">{{$p->isi}}</li>
    </ul>
    <br>
    <form method="POST" action="/pertanyaan/{{$p->id}}">
        @method('DELETE')
        @csrf()
        <button class="btn btn-danger" title="Delete Data">
            Submit
        </button>
    </form>
    @endforeach
</div>


@endsection