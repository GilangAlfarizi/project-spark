<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kendaraan') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div id="wrapper">
            <div class="card shadow card-body mt-4">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    
                    <table class="table text-center" border="1px">
                        <thead>
                            <tr>
                                <th>License Plate</th>
                                <th>Vehicle Type</th>
                                <th>Date</th>
                                <th>Entry</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->plat }}</td>
                                    <td>{{ $vehicle->jenis_kendaraan }}</td>
                                    <td>{{ $vehicle->tanggal }}</td>
                                    <td>{{ $vehicle->jam_masuk }}</td>
                                    <td class="d-flex justify-content-center">
                                        <form action="{{route('edit', $vehicle)}}" method="get">
                                            @csrf
                                            <button class="btn btn-success mr-2">Edit</button>
                                        </form>
                                        <form action="{{ route('destroy', $vehicle) }}" method="post">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                        <form action="{{ route('print', $vehicle) }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-secondary ml-2">
                                            <img src="{{asset('img/print.png')}}" width="20" alt="print">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>License Plate</th>
                                    <th>Vehicle Type</th>
                                    <th>Date</th>
                                    <th>Entry</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                    </table>
                    <p>Data per page: {{$vehicles->perPage()}}</p>
                    {{$vehicles->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.master')