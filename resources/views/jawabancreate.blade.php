@extends("welcome")

@section("content")

<h3>Input Jawaban</h3>
<form method="POST" action="/jawaban/{{$id}}">
    @csrf()
    <div class="form-group">
        <label for="aIsi">Jawaban:</label>
        <input type="hidden" id="aIdPertanyaan" name="aIdPertanyaan" value="{{$id}}" readonly>
        <textarea class="form-control" placeholder="Jawaban Anda" id="aIsi" name="aIsi" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" title="Back to Previous" href="/pertanyaan">
        Cancel
    </a>
</form>

@endsection