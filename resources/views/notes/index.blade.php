<x-app-layout>

<div class="d-flex justify-content-between mb-4">
<h2 class="fw-bold">My Notes</h2>

<a href="/notes/create" class="btn btn-success">
+ Tambah Note
</a>
</div>

@if($notes->count())

<div class="row">
@foreach($notes as $note)

<div class="col-md-4 mb-4">
<div class="card shadow border-0 h-100">

<div class="card-body">

<h4 class="fw-bold text-primary">
{{ $note->title }}
</h4>

<p class="text-muted">
{{ $note->content }}
</p>

</div>

<div class="card-footer bg-white border-0 d-flex gap-2">

<a href="/notes/{{ $note->id }}/edit" class="btn btn-warning btn-sm">
Edit
</a>

<form action="/notes/{{ $note->id }}" method="POST" class="delete-form">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger btn-sm">
Hapus
</button>
</form>

</div>

</div>
</div>

@endforeach
</div>

@else

<div class="text-center mt-5">
<h3 class="text-muted">Belum ada notes 😢</h3>
<p>Yuk buat catatan pertamamu.</p>
<a href="/notes/create" class="btn btn-primary">
Tambah Sekarang
</a>
</div>

@endif

</x-app-layout>

<script>
document.querySelectorAll('.delete-form').forEach(form => {
form.addEventListener('submit', function(e){
e.preventDefault();

Swal.fire({
title:'Yakin hapus?',
text:'Data note akan hilang.',
icon:'warning',
showCancelButton:true,
confirmButtonText:'Ya, hapus'
}).then((result)=>{
if(result.isConfirmed){
form.submit();
}
})
})
});
</script>
