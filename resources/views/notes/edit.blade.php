<x-app-layout>

<div class="card shadow border-0 col-md-6 mx-auto">
<div class="card-body p-4">

<h2 class="mb-4 fw-bold">Edit Note</h2>

<form action="/notes/{{ $note->id }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="title" class="form-control mb-3" value="{{ $note->title }}">

<textarea name="content" class="form-control mb-3" rows="5">{{ $note->content }}</textarea>

<button class="btn btn-primary w-100">
Update
</button>

</form>

</div>
</div>

</x-app-layout>
