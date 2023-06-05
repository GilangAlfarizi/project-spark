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
                        {{-- Data per page: {{$vehicles->perPage()}}
                        {{$vehicles->links('pagination::bootstrap-4')}} --}}
                        <thead>
                            <tr>
                                <th>Plat Kendaraan</th>
                                <th>Jenis Kendaraan</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                            </tr>
                        </thead>
                            <?php
                                $vehicles = App\Models\Vehicle::all();
                            ?>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->plat }}</td>
                                    <td>{{ $vehicle->jenis_kendaraan }}</td>
                                    <td>{{ $vehicle->tanggal }}</td>
                                    <td>{{ $vehicle->jam_masuk }}</td>
                                    <td class="flex">
                                        <button class="btn btn-success mr-2">Edit</button>
                                        <form action="{{ route('destroy', $vehicle) }}" method="post">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                        <button class="btn btn-secondary ml-2">
                                            <img src="{{asset('img/print.png')}}" width="20" alt="print">
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>Plat Kendaraan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Tanggal</th>
                                    <th>Jam Masuk</th>
                                </tr>
                            </tfoot>
                    </table>
                    
                    {{-- <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Position</strong></td>
                                <td><strong>Office</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Start date</strong></td>
                                <td><strong>Salary</strong></td>
                            </tr>
                        </tfoot>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.master')