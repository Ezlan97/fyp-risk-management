<!-- -------------------------------------------------------------- Modal 1 ------------------------------------------------------------- -->
<div class="modal fade" id="exampleModal5-1-4" tabindex="-1" role="dialog" aria-labelledby="exampleModal5-1-4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5-1-4Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 5 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 1 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 4))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5-5-8" tabindex="-1" role="dialog" aria-labelledby="exampleModal5-5-8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5-5-8Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 5 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 5 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 8))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5-9-12" tabindex="-1" role="dialog" aria-labelledby="exampleModal5-9-12Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5-9-12Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == "5" && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 9 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 12))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5-13-16" tabindex="-1" role="dialog" aria-labelledby="exampleModal5-13-16Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5-13-16Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 5 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 13 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 16))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5-17-20" tabindex="-1" role="dialog" aria-labelledby="exampleModal5-17-20Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5-17-20Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 5 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 17 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 20))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- --------------------------------------------------------------- Modal 2 --------------------------------------------------------- -->
<div class="modal fade" id="exampleModal4-1-4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4-1-4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4-1-4Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 4 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 1 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 4))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4-5-8" tabindex="-1" role="dialog" aria-labelledby="exampleModal4-5-8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4-5-8Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 4 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 5 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 8))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4-9-12" tabindex="-1" role="dialog" aria-labelledby="exampleModal4-9-12Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4-9-12Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 4 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 9 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 12))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4-13-16" tabindex="-1" role="dialog" aria-labelledby="exampleModal4-13-16Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4-13-16Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 4 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 13 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 16))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4-17-20" tabindex="-1" role="dialog" aria-labelledby="exampleModal4-17-20Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4-17-20Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 4 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 17 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 20))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- ------------------------------------------------------------------ Modal 3 ------------------------------------------------------- -->
<div class="modal fade" id="exampleModal3-1-5" tabindex="-1" role="dialog" aria-labelledby="exampleModal3-1-5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3-1-5Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 3 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 1 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 5))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3-6-8" tabindex="-1" role="dialog" aria-labelledby="exampleModal3-6-8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3-6-8Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 3 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 6 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 8))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3-9-12" tabindex="-1" role="dialog" aria-labelledby="exampleModal3-9-12Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3-9-12Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 3 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 9 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 12))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3-13-16" tabindex="-1" role="dialog" aria-labelledby="exampleModal3-13-16Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3-13-16Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 3 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 13 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 16))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3-17-20" tabindex="-1" role="dialog" aria-labelledby="exampleModal3-17-20Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3-17-20Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 3 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 17 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 20))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- ----------------------------------------------------------------- Modal 4 -------------------------------------------------------------------- -->
<div class="modal fade" id="exampleModal2-1-5" tabindex="-1" role="dialog" aria-labelledby="exampleModal2-1-5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2-1-5Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 2 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 1 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 5))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2-6-8" tabindex="-1" role="dialog" aria-labelledby="exampleModal2-6-8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2-6-8Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 2 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 6 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 8))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2-9-12" tabindex="-1" role="dialog" aria-labelledby="exampleModal2-9-12Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2-9-12Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 2 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 9 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 12))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2-13-16" tabindex="-1" role="dialog" aria-labelledby="exampleModal2-13-16Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2-13-16Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 2 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 13 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 16))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2-17-20" tabindex="-1" role="dialog" aria-labelledby="exampleModal2-17-20Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2-17-20Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 2 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 17 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 20))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- ------------------------------------------------------------ Modal 5 -------------------------------------------------------- -->
<div class="modal fade" id="exampleModal1-1-5" tabindex="-1" role="dialog" aria-labelledby="exampleModal1-1-5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1-1-5Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 1 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 1 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 5))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1-6-8" tabindex="-1" role="dialog" aria-labelledby="exampleModal1-6-8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1-6-8Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 1 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 6 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 8))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1-9-12" tabindex="-1" role="dialog" aria-labelledby="exampleModal1-9-12Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1-9-12Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 1 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 9 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 12))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1-13-16" tabindex="-1" role="dialog" aria-labelledby="exampleModal1-13-16Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1-13-16Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 1 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 13 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 16))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1-17-20" tabindex="-1" role="dialog" aria-labelledby="exampleModal1-17-20Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1-17-20Label">Risiko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Penerangan</th>
                                <th>Tarikh & Masa</th>
                                <th>Pencegahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                                @if ($r->evaluation->where('state', 'Sebelum')->first()->y == 1 && ($r->evaluation->where('state', 'Sebelum')->first()->x >= 17 && $r->evaluation->where('state', 'Sebelum')->first()->x <= 20))
                                    <tr>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->mitigation->first()->mitigation }}</td>
                                    </tr>
                                @endif
                            @endforeach                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>