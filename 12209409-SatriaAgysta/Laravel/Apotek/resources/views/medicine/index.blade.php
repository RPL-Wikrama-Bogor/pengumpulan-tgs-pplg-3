@extends('layouts.template')

@section('content')

    @if(Session::get('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
    @endif
    
    @if(Session::get('deleted'))
        <div class="alert alert-warning">{{session::get('deleted')}}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($rombels as $rombel)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$rombel['rombel']}}</td>
                <td class="flex justify-center">
                    <a href="{{route('medicine.edit', $item->id)}}" class="btn btn-primary me-3">Edit</a>
                    <form action="{{route('medicine.delete', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection