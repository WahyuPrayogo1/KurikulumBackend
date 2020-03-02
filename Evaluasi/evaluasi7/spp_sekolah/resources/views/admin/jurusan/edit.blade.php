@extends('template_backend.dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Jurusan</h4>
        <form action="{{route('jurusan.update',$jurusan->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                @if (Session::has('success'))
                    <script>
                      alert('  {{ Session('success')}} ')
                    </script>
                @endif
          <div class="form-group">
            <label for="exampleInputName1">Nama Jurusan</label>
          <input type="text" class="form-control" id="exampleInputName1" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4" name="deskripsi">{{$jurusan->deskripsi}}</textarea>
          </div>


          <button type="submit" class="btn btn-gradient-success mr-2">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          <a class="btn btn-gradient-info mr-2" href="{{route('jurusan.index')}}">Kembali</a>

        </form>
      </div>
    </div>
  </div>
@endsection