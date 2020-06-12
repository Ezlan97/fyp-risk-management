@extends('components.main')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    
    <!-- No of jabatan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">jabatan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departments }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-people-arrows fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- No of operator -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Operator</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $operators }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- No of Risk -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Risiko</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $risks->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<div class="row">    
    <!-- Card Body -->
    <div class="card-body">
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Carta Risiko</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Sangat Rendah</th>
                                <th>Rendah</th>
                                <th>Sedarhana</th>
                                <th>Tinggi</th>
                                <th>Sangat Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Sangat Tinggi</th>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="red"></td>
                                <td bgcolor="red"></td>
                                <td bgcolor="red"></td>
                            </tr>
                            <tr>
                                <th>Tinggi</th>
                                <td bgcolor="green"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="red"></td>
                                <td bgcolor="red"></td>
                            </tr>
                            <tr>
                                <th>Sederhana</th>
                                <td bgcolor="green"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="red"></td>
                                <td bgcolor="red"></td>
                            </tr>
                            <tr>
                                <th>Rendah</th>
                                <td bgcolor="green"></td>
                                <td bgcolor="green"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="yellow"></td>
                                <td bgcolor="red"></td>
                            </tr>
                            <tr>
                                <th>Sangat Rendah</th>
                                <td bgcolor="green"></td>
                                <td bgcolor="green"></td>
                                <td bgcolor="green"></td>
                                <td bgcolor="green"></td>
                                <td bgcolor="yellow"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection