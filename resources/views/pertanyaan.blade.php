@extends("welcome")

@section("content")

<a class="btn btn-primary btn-sm" title="Input Pertanyaan" href="/pertanyaan/create">
    <span class="fa fa-plus"></span>
    New
</a>
<br>
<br>
<h3>List Pertanyaan</h3>
<table class="table table-hover table-striped table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Judul</th>
            <th>Pertanyaan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $p)
        <tr>
            <td>{{$p->judul}}</td>
            <td>{{$p->isi}}</td>
            <td>
                <a class="btn btn-primary btn-sm" title="List Jawaban" href="/jawaban/{{$p->id}}">
                    <span class="fa fa-eye"></span>
                    <!-- Jawaban -->
                </a>
                <a class="btn btn-success btn-sm" title="Input Jawaban Baru" href="/jawaban/create/{{$p->id}}">
                    <span class="fa fa-plus"></span>
                    <!-- Jawaban -->
                </a>
                <a class="btn btn-info btn-sm" title="Detail Pertanyaan" href="/pertanyaan/{{$p->id}}">
                    <span class="fa fa-eye"></span>
                    <!-- Pertanyaan -->
                </a>
                <a class="btn btn-warning btn-sm" title="Edit Pertanyaan" href="/pertanyaan/{{$p->id}}/edit">
                    <span class="fa fa-edit"></span>
                    <!-- Edit -->
                </a>
                <a class="btn btn-danger btn-sm" title="Edit Pertanyaan" href="/pertanyaan/{{$p->id}}/delete">
                    <span class="fa fa-trash"></span>
                    <!-- Delete -->
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection