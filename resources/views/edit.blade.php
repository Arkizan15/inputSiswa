<x-navbar></x-navbar>

<div class="min-100-vh align-items-center justify-center">
  <form action="/siswa/{{ $siswa->id }}" method="post">
            @csrf
            @method('PUT')
         
            <input type="text" class="form-control"  name="nama" value="{{ $siswa->nama }}" aria-label="Username" aria-describedby="basic-addon1">
            <input type="text" class="form-control"  name="kelas" value="{{ $siswa->kelas }}" aria-label="Username" aria-describedby="basic-addon1">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</div>