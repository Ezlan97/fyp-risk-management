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
                        <th>Sangat Kerap</th>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal5-1-4">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 5], ['state', 'Sebelum'],['x', '>=', 1], ['x', '<=', 4]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal5-5-8">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 5], ['state', 'Sebelum'],['x', '>=', 5], ['x', '<=', 8]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal5-9-12">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 5], ['state', 'Sebelum'],['x', '>=', 9], ['x', '<=', 12]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal5-13-16">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 5], ['state', 'Sebelum'],['x', '>=', 13], ['x', '<=', 16]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal5-17-20">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 5], ['state', 'Sebelum'],['x', '>=', 17], ['x', '<=', 20]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>Kerap</th>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal4-1-4">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 4], ['state', 'Sebelum'],['x', '>=', 1], ['x', '<=', 4]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal4-5-8">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 4], ['state', 'Sebelum'],['x', '>=', 5], ['x', '<=', 8]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal4-9-12">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 4], ['state', 'Sebelum'],['x', '>=', 9], ['x', '<=', 12]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal4-13-16">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 4], ['state', 'Sebelum'],['x', '>=', 13], ['x', '<=', 16]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal4-17-20">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 4], ['state', 'Sebelum'],['x', '>=', 17], ['x', '<=', 20]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>Kadang-kadang</th>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal3-1-5">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 3], ['state', 'Sebelum'],['x', '>=', 1], ['x', '<=', 4]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal3-6-8">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 3], ['state', 'Sebelum'],['x', '>=', 5], ['x', '<=', 8]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal3-9-12">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 3], ['state', 'Sebelum'],['x', '>=', 9], ['x', '<=', 12]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal3-13-16">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 3], ['state', 'Sebelum'],['x', '>=', 13], ['x', '<=', 16]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal3-17-20">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 3], ['state', 'Sebelum'],['x', '>=', 17], ['x', '<=', 20]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>Jarang</th>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal2-1-5">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 2], ['state', 'Sebelum'],['x', '>=', 1], ['x', '<=', 4]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal2-6-8">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 2], ['state', 'Sebelum'],['x', '>=', 5], ['x', '<=', 8]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal2-9-12">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 2], ['state', 'Sebelum'],['x', '>=', 9], ['x', '<=', 12]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal2-13-16">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 2], ['state', 'Sebelum'],['x', '>=', 13], ['x', '<=', 16]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-danger">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal2-17-20">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 2], ['state', 'Sebelum'],['x', '>=', 17], ['x', '<=', 20]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>Sangat Jarang</th>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal1-1-5">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 1], ['state', 'Sebelum'],['x', '>=', 1], ['x', '<=', 4]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal1-6-8">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 1], ['state', 'Sebelum'],['x', '>=', 5], ['x', '<=', 8]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal1-9-12">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 1], ['state', 'Sebelum'],['x', '>=', 9], ['x', '<=', 12]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-success">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal1-13-16">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 1], ['state', 'Sebelum'],['x', '>=', 13], ['x', '<=', 16]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                        <td class="text-center bg-warning">
                            <button type="button" class="btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal1-17-20">
                                {{ 
                                    App\Risk::with('evaluation')->whereHas('evaluation', function($query){
                                        $query->where([['y', 1], ['state', 'Sebelum'],['x', '>=', 17], ['x', '<=', 20]]);
                                    })->count()
                                }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
