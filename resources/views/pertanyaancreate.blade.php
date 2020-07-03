@extends("welcome")

@section("content")

<h3>Input Pertanyaan</h3>
<form method="POST" action="/pertanyaan">
    @csrf()
    <div class="form-group">
        <label for="aJudul">Judul:</label>
        <input type="text" class="form-control" placeholder="Judul Pertanyaan" id="aJudul" name="aJudul">
    </div>
    <div class="form-group">
        <label for="aIsi">Pertanyaan:</label>
        <textarea class="form-control" placeholder="Pertanyaan Anda" id="aIsi" name="aIsi" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" title="Back to Previous" href="/pertanyaan">
        Cancel
    </a>
</form>

@endsection