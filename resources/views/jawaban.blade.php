@extends("welcome")

@section("content")

<a class="btn btn-danger btn-sm" title="Back to Previous Page" href="{{route('pertanyaan')}}">
    <span class="fa fa-arrow-left"></span>
    Back
</a>
<br>
<br>
<table class="table table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Jawaban</th>
            <th>Tgl Submit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jawaban as $j)
        <tr>
            <td>{{$j->isi}}</td>
            <td>{{$j->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection