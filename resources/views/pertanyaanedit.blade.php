@extends("welcome")

@section("content")

<h3>Edit Pertanyaan</h3>

@foreach($pertanyaan as $p)
<form method="POST" action="/pertanyaan/{{$p->id}}">
    @method('PUT')
    @csrf()
    <div class="form-group">
        <label for="aJudul">Judul:</label>
        <input type="text" class="form-control" placeholder="Judul Pertanyaan" id="aJudul" name="aJudul" value="{{$p->judul}}">
    </div>
    <div class="form-group">
        <label for="aIsi">Pertanyaan:</label>
        <textarea class="form-control" placeholder="Pertanyaan Anda" id="aIsi" name="aIsi" rows="4">{{$p->isi}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" title="Back to Previous" href="/pertanyaan">
        Cancel
    </a>
</form>
@endforeach

@endsection