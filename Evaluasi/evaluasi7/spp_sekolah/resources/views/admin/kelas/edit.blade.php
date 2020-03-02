@extends('template_backend.dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Kelas</h4>
        <form action="{{route('kelas.update',$kelas->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Nama Jurusan</label>
            <select class="form-control @error('jurusan_id') is-invalid @enderror" id="exampleFormControlSelect2" name="jurusan_id">
              <option value="">Pilih Jurusan :</option>
            @foreach ($jurusan as $item)
                <option value="{{$item->id}}"

                    @if ($kelas->jurusan_id == $item->id)
                        selected
                    @endif

                    >{{$item->nama_jurusan}}</option>
            @endforeach


        </select>

            @error('nama_jurusan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Nama kelas</label>
          <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="exampleInputName1" name="nama_kelas" value="{{$kelas->nama_kelas}}">

            @error('nama_kelas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Wali Kelas</label>
            <select class="form-control @error('wali_kelas_id') is-invalid @enderror" id="exampleFormControlSelect2" name="wali_kelas_id">
                  <option value="">Pilih Wali Kelas :</option>
                @foreach ($guru as $item)
                    <option value="{{$item->id}}"
                        @if ($kelas->wali_kelas_id == $item->id)
                            selected
                        @endif

                        >{{$item->nama_guru}}</option>
                @endforeach


            </select>

            @error('nama_guru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

          <button type="submit" class="btn btn-gradient-success mr-2">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          <a class="btn btn-gradient-info mr-2" href="{{route('kelas.index')}}">Kembali</a>

        </form>
      </div>
    </div>
  </div>
@endsection