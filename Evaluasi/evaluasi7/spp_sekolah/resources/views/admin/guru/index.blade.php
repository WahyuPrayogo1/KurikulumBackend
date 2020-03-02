@extends('template_backend.dashboard')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            @if (Session::has('success'))
            <script>
              alert('  {{ Session('success')}} ')
            </script>
        @endif

            <h2 style="text-align: center" class="card-title">Table Guru</h2>
            <a class="btn btn-primary" href="{{route('guru.create')}}">Tambah data</a>
            </p>
            <table id="table_id" class="ui celled table" class="table table-dark">
                <thead>
            <tr>
              <th> # </th>
              <th> Nama Guru </th>
              <th> Jabatan </th>
              <th> Alamat </th>
              <th> Pendidikan</th>
              <th> Action</th>
            </tr>
        </thead>
        <tbody>
            @php    $i = 1 @endphp
            @foreach ($guru as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->nama_guru}}</td>
                    <td>{{$item->jabatan_guru}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->status_pendidikan}}</td>
                    <td>
                        <form action="{{route('guru.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Yakin Data Mau DI hapus ?')" class="badge badge-gradient-danger mr-2" type="submit">Hapus</button>

                            <a class="badge badge-gradient-success mr-2" href="{{route('guru.edit',$item->id)}}">Edit</a>
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