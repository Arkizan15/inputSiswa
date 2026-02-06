<x-navbar></x-navbar>

<div class="min-100-vh align-items-center justify-center">
    <form  action="/siswa" class="" style="max-width: 100px, color:white">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Siswa</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kelas</label>
    <input type="text" class="form-control" name="kelas">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswa as $item ) 
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->kelas }}</td>
      <td>
        <form action="/siswa/{{ $item->id}}" method="get">
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form action="/siswa/{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>