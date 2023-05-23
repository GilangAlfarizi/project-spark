<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row mt-4 d-flex">
            <div class="col-md-6 col-xl-3 mb-4">
                <form action="" method="POST" >
                    @csrf
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">PLAT NOMOR</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="text" name="plat" style="border-style: initial;border-radius: 7px;background: rgb(245,238,238);height: 48px;width: 325.6px;" placeholder="Masukan Plat Nomor Kendaraan">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">Tanggal</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="date" name="tanggal" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="spadding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">Waktu</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="time" name="jam_masuk" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">jenis kendaraan</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                    <select name="jenis_kendaraan" style="width: 144.8px;height: 43.2px;background: rgb(245,238,238);border-style: initial;border-radius: 7px;">
                                        <option value="">Pilih</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Motor">Motor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 px-4 mr-3 btn btn-primary">Submit</button>
                    <button type="button" class="mt-4 px-4 btn btn-outline-danger">Keluar</button>
                </form>
            </div>
            <div class="col">
                <div class="card shadow border-start-primary py-2" style="background: #ffc941;margin-left: 431px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Terisi</span></div>
                                <div class="text-dark fw-bold h5 mb-0"><span>30</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-start-info py-2" style="background: rgb(255,201,65);margin-top: 15px;margin-left: 432px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>KAPASITAS tersedia</span></div>
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

@include('layouts.master')
