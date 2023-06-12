<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Print') }}
        </h2>
    </x-slot>
    
    <div class="container text-center mt-4">
        <h1>SPARK</h1>
        <p>Universitas Negeri Semarang</p>
        <p><strong>Tanggal: </strong>{{ $vehicle->tanggal }}</p>
        <p><strong>Waktu:</strong> {{ $vehicle->jam_masuk }}</p>
        <p><strong>Jenis Kendaraan:</strong> {{ $vehicle->jenis_kendaraan }}</p>
        <p><strong>Code:</strong> {{ $vehicle->plat }}</p>
        <p class="text-danger fw-bold">Please do not lose the slip</p>
        <p class="thanks">Have a nice day!</p>
        <button class="btn btn-success print-btn">Print Slip Parkir</button>
    </div>
</x-app-layout>