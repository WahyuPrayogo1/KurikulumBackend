@extends('template_backend.dashboard')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            @if (Session::has('success'))
                    <script>
                        alert(' {{Session('success')}}')
                    </script>
            @endif
            <h2 style="text-align: center" class="card-title">Table Kelas</h2>
            <a class="btn btn-primary" href="{{route('kelas.create')}}">Tambah data</a>
            </p>
            <table class="ui celled table" class="table table-dark">
                <thead>
            <tr style="text-align: center">
              <th> # </th>
              <th> Nama Jurusan </th>
              <th> Kelas </th>
              <th> Wali Kelas </th>
              <th> Action</th>
            </tr>
        </thead>
        <tbody>
            @php    $i = 1 @endphp
            @foreach ($kelas as $item)
                <tr style="text-align: center">
                    <td>{{$i}}</td>
                    <td>{{$item->Jurusan['nama_jurusan']}}</td>
                    <td>{{$item->nama_kelas}}</td>
                    <td>{{$item->Guru['nama_guru']}}</td>
                    <td>
                        <form action="{{route('kelas.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Yakin Data Mau di Hapus')" class="badge badge-gradient-danger mr-2" type="submit">Hapus</button>

                            <a class="badge badge-gradient-success mr-2" href="{{route('kelas.edit',$item->id)}}">Edit</a>
                        </form>
                    </td>
                </tr>
                @php $i++ @endphp
            @endforeach
        </tbody>
        </table>
    </div>
</div>
  </div>
@endsection