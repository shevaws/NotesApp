<x-app-layout>

<div class="card shadow border-0 col-md-6 mx-auto">
<div class="card-body p-4">

<h2 class="mb-4 fw-bold">Tambah Note</h2>

<form action="/notes" method="POST">
@csrf

<input type="text" name="title" class="form-control mb-3" placeholder="Judul">

<textarea name="content" class="form-control mb-3" rows="5" placeholder="Isi catatan"></textarea>

<button class="btn btn-success w-100">
Simpan
</button>

</form>

</div>
</div>

</x-app-layout>
