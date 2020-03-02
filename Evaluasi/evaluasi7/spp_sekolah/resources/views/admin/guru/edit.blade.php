@extends('template_backend.dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Guru</h4>
        <form action="{{route('guru.update',$guru->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                @if (Session::has('success'))
                    <script>
                      alert('  {{ Session('success')}} ')
                    </script>
                @endif
          <div class="form-group">
            <label for="exampleInputName1">Nama Guru</label>
          <input type="text" class="form-control" id="exampleInputName1" name="nama_guru" value="{{$guru->nama_guru}}">
          </div>
          <div class="form-group">
          <label for="exampleFormControlSelect2">Jabatan Guru</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Jabatan Guru" name="jabatan_guru" value="{{$guru->jabatan_guru}}">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Alamat</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4" name="alamat">{{$guru->alamat}}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Pendidikan</label>
            <select class="form-control" id="exampleFormControlSelect2" name="status_pendidikan">
              <option value=" ">Pilih Pendidikan :</option>
              <option @if($guru->status_pendidikan == 'smk_sma' ) {{'selected'}} @endif value="smk_sma">SMK / SMA</option>
              <option @if($guru->status_pendidikan == 's1' ) {{'selected'}} @endif value="s1">S1</option>
              <option @if($guru->status_pendidikan == 's2' ) {{'selected'}} @endif value="s2">S2</option>
              <option @if($guru->status_pendidikan == 's3' ) {{'selected'}} @endif value="s3">S3</option>
            </select>
            </div>

          <button type="submit" class="btn btn-gradient-success mr-2">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          <a class="btn btn-gradient-info mr-2" href="{{route('guru.index')}}">Kembali</a>

        </form>
      </div>
    </div>
  </div>
@endsection