@extends('template_backend.dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Guru</h4>
        <form action="{{route('guru.store')}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
                @if (Session::has('success'))
                    <script>
                      alert('  {{ Session('success')}} ')
                    </script>
                @endif
          <div class="form-group">
            <label for="exampleInputName1">Nama Guru</label>
            <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Guru" name="nama_guru">

            @error('nama_guru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
          <label for="exampleFormControlSelect2">Jabatan Guru</label>
            <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="exampleInputName1" placeholder="Jabatan Guru" name="jabatan_guru">

            @error('nama_guru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Alamat</label>
            <textarea class="form-control @error('nama_guru') is-invalid @enderror" id="exampleTextarea1" rows="4" name="alamat"></textarea>
            @error('nama_guru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Pendidikan</label>
            <select class="form-control @error('nama_guru') is-invalid @enderror" id="exampleFormControlSelect2" name="status_pendidikan">
                  <option value="">Pilih Pendidikan :</option>
                  <option value="s1">S1</option>
                  <option value="s2">S2</option>
                  <option value="s3">S3</option>
                  <option value="smk_sma">SMK / SMA</option>

            </select>

            @error('nama_guru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

          <button type="submit" class="btn btn-gradient-success mr-2">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          <a class="btn btn-gradient-info mr-2" href="{{route('guru.index')}}">Kembali</a>

        </form>
      </div>
    </div>
  </div>
@endsection