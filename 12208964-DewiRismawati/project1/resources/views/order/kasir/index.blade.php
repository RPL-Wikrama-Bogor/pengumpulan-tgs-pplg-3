@extends('layouts.template')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <form action="{{ route('kasir.order.index') }}" method="get" class="row w-100 ml-2">
                <div class="col-6">
                    <input type="date" name="filter" id="filter" class="form-control">
                </div><br>
                <div class="col-4 d-inline">
                    <button class="btn btn-info" id="cari_data">Cari Data</button>
                    <button class="btn btn-secondary" id="clear_data">Clear</button>
                </div>
            </form>
        </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
    </div>
    <br>

    <table class="table  table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Total Bayar</th>
                <th>Kasir</th>
                <th>Tanggal Beli</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name_customer }}</td>
                <td>
                    @foreach ($item->medicines as $medicine)
                    <ol>
                        <li>
                            {{ $medicine['name_medicine'] }} ({{ number_format($medicine
                            ['price'],0,',','.') }}) : Rp. {{ number_format ($medicine
                            ['sub_price'],0,',','.') }} <small>qty {{ $medicine['qty'] }}</small>
                        </li>
                    </ol>
                    @endforeach
                </td>
                <td>{{ number_format($item->total_price,0,',','.') }}</td>
                <td>
                    {{ $item->user->name }}
                </td>
                <td>               
                        {{-- {{ date('j F Y', strtotime($item->created_at)) }}  --}}
                        @php \Carbon\Carbon::setlocale('id_ID') @endphp    
                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}  
                        {{-- <br> 
                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumas()  }}      
                        <br>
                        {{ \Carbon\Carbon::parse($item->created_at)->locale('id_ID')->translatedFormat('d F Y')  }}     --}}
                </td>
                <td>
                    <a href="" class="btn btn-secondary">Download Struk</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        @if ($orders->count())
        {{ $orders->links() }}
        @endif
    </div>
</div>
@endsection