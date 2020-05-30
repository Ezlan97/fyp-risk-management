@extends('components.main')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Urus Risiko</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Status : {{ $status }}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tajuk</th>
                        <th>Penerangan</th>
                        <th>Tarikh & Masa</th>
                        <th></th>
                        <th>Status</th>
                        <th>Perincian</th>
                        <th>Penilian</th>
                        <th>Komen</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($risks as $r)
                    <tr>
                        <td>{{ $r->title }}</td>
                        <td>{{ $r->description }}</td>
                        <td>{{ $r->created_at }}</td>
                        <td>
                            <a class="btn btn-success btn-icon-split" href="{{ route('admin.download.evidence.risk', $r->id) }}" data-toggle="tooltip" data-placement="top" title="Muat Turun Fail Berkaitan Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-download"></i>
                                </span>
                            </a>
                        </td>
                        <td>
                            @if ($r->status == 'Draf')
                            <h5><span class="badge badge-secondary">{{ $r->status }}</span></h5>
                            @elseif($r->status == 'Menunggu Kelulusan')
                            <h5><span class="badge badge-warning">{{ $r->status }}</span></h5>
                            @endif
                        </td>
                        <td class="text-center">
                            <button class="d-sm-inline-block btn btn-primary btn-icon-split shadow-sm" data-toggle="modal" data-target="#perincianRisiko{{ $r->id }}"  data-toggle="tooltip" data-placement="top" title="Perincian Berkenaan Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-eye"></i>
                                    Lihat
                                </span>
                            </button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#penilianRisiko{{ $r->id }}"  data-toggle="tooltip" data-placement="top" title="Penilian Risiko Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-eye"></i>
                                    Lihat
                                </span>
                            </button>
                        </td>
                        {{-- <td class="text-center">
                            <a href="{{ Route('operator.update.page.risk', $r->id) }}" class="btn btn-warning btn-icon-split"  data-toggle="tooltip" data-placement="top" title="Kemaskini Maklumat Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                    Kemaskini
                                </span>
                            </a>
                        </td> --}}
                        <td class="text-center">
                            <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#komenRisiko{{ $r->id }}"  data-toggle="tooltip" data-placement="top" title="Komen risiko dan ubah status risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-eye"></i>
                                    Lihat
                                </span>
                            </button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#urusRisiko{{ $r->id }}"  data-toggle="tooltip" data-placement="top" title="Komen risiko dan ubah status risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                    Urus
                                </span>
                            </button>
                        </td>
                    </tr>
                    
                    {{-- perincian risiko --}}
                    <div class="modal fade" id="perincianRisiko{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="perincianRisiko{{ $r->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="perincianRisiko{{ $r->id }}Label">Perincian Risiko</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">                                    
                                    {{-- Couse Detail --}}
                                    <div class="form-group">
                                        <label for="inputDetail" class="">Perincian Punca Risiko</label>
                                        <textarea name="cause_description" class="form-control" disabled>{{ $r->cause_description }}</textarea>
                                    </div>
                                    
                                    {{-- Effect Detail --}}
                                    <div class="form-group">
                                        <label for="inputDetail" class="">Perincian Kesan Risiko</label>
                                        <textarea name="effect_description" class="form-control" disabled>{{ $r->effect_description }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- penilian risiko --}}
                    <div class="modal fade" id="penilianRisiko{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="penilianRisiko{{ $r->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="penilianRisiko{{ $r->id }}Label">Penilian Risiko</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="form-group text-center">
                                            <p class="font-weight-bold">Kadar kekerapan</p>
                                            <p>Kekerapan berlakunya risiko ini</p>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->occurrence == '5' ? 'checked="true"' : '' }}>Selalu
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->occurrence == '4' ? 'checked="true"' : '' }}>Berkemungkinan
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->occurrence == '3' ? 'checked="true"' : '' }}>Jarang
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->occurrence == '2' ? 'checked="true"' : '' }}>Sangat Jarang
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->occurrence == '1' ? 'checked="true"' : '' }}>Bergantung
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group text-center">
                                            <p class="font-weight-bold">Tahap kebolehurusan</p>
                                            <p>Seberapa mudah untuk risiko itu ditangani</p>           
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->manageability == '5' ? 'checked="true"' : '' }}>Sangat Mudah
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->manageability == '4' ? 'checked="true"' : '' }}>Mudah
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->manageability == '3' ? 'checked="true"' : '' }}>Sederhana
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->manageability == '2' ? 'checked="true"' : '' }}>Susah
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->manageability == '1' ? 'checked="true"' : '' }}>Sangat Susah
                                                </label>
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="form-group text-center">
                                            <p class="font-weight-bold">Kebergantungan</p>
                                            <p>Adakah ia akan mengikuti atau mencetuskan peristiwa lain</p>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependencies == '5' ? 'checked="true"' : '' }}>Sangat Tinggi
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependencies == '4' ? 'checked="true"' : '' }}>Tinggi
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependencies == '3' ? 'checked="true"' : '' }}>Sederhana
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependencies == '2' ? 'checked="true"' : '' }}>Sedikit
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependencies == '1' ? 'checked="true"' : '' }}>Tiada
                                                </label>
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="form-group text-center">
                                            <p class="font-weight-bold">Keselamatan Pekerja</p>
                                            <p>Tahap keselamatan pekerja ketika risiko berlaku</p>           
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->proximities == '5' ? 'checked="true"' : '' }}>Sangat Merbahaya
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->proximities == '4' ? 'checked="true"' : '' }}>Berbahaya
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->proximities == '3' ? 'checked="true"' : '' }}>Sederhana
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->proximities == '2' ? 'checked="true"' : '' }}>Sedikit
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->proximities == '1' ? 'checked="true"' : '' }}>Tiada
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group text-center">
                                            <p class="font-weight-bold">Segera</p>
                                            <p>Berapa cepat perlu risiko ini perlu ditangani</p>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->urgency == '5' ? 'checked="true"' : '' }}>Segera
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->urgency == '4' ? 'checked="true"' : '' }}>Secepat Mungkin
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->urgency == '3' ? 'checked="true"' : '' }}>Sederhana
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->urgency == '2' ? 'checked="true"' : '' }}>Bila-bila masa
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->urgency == '1' ? 'checked="true"' : '' }}>Bila perlu
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Urus Risiko -->
                    <div class="modal fade" id="urusRisiko{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="urusRisiko{{ $r->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="urusRisiko{{ $r->id }}Label">Urus Risiko</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.update.risk', $r->id) }}" class="form-signin" enctype="multipart/form-data">
                                        @csrf
                                        {{-- Comment --}}
                                        <div class="form-group">
                                            <label for="inputDetail" class="">Komen Kepada Operator</label>
                                            <textarea name="comment" class="form-control"></textarea>
                                        </div>
                                        
                                        {{-- Risk Status --}}
                                        <div class="form-group">
                                            <select id="inputStatus" class="form-control" name="status" required>                                          
                                                <option {{ old('state') == 'Menunggu Kelulusan' ? 'selected' : '' }} value="Menunggu Kelulusan">Menunggu Kelulusan</option>
                                                <option {{ old('state') == 'Lulus & Sedang Di Urus' ? 'selected' : '' }} value="Lulus & Sedang Di Urus">Lulus & Sedang Di Urus</option>
                                                <option {{ old('state') == 'Selesai' ? 'selected' : '' }} value="Selesai">Selesai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan & Hantar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    {{-- komen risiko --}}
                    <div class="modal fade" id="komenRisiko{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="komenRisiko{{ $r->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="komenRisiko{{ $r->id }}Label">Komen Risiko</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">                   
                                    @foreach ($r->comment as $c)
                                    @if ($c->user_id == Auth::user()->id)
                                    <div class="card border-success float-right mb-2" style="width: 18rem;">
                                        <div class="card-body text-success">
                                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                            <hr>
                                            <p class="card-text">{{ $c->comment }}</p>
                                            <hr>
                                            <p class="text-muted">{{ $c->created_at }}</p>
                                        </div>
                                    </div>
                                    @else
                                    <div class="card border-primary float-left mb-2" style="width: 18rem;">
                                        <div class="card-body text-primary">
                                            <h5 class="card-title">Admin</h5>
                                            <hr>
                                            <p class="card-text">{{ $c->comment }}</p>
                                            <hr>
                                            <p class="text-muted">{{ $c->created_at }}</p>
                                        </div>
                                    </div>                                
                                    @endif
                                    @endforeach
                                </div>
                                <form method="POST" action="{{ route('admin.comment.risk', $r->id) }}" class="form-signin" enctype="multipart/form-data">
                                    @csrf
                                    <textarea class="form-control" name="comment" id="" cols="20" rows="3" placeholder="Balas komen operator.."></textarea>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Hantar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </tbody>
            </table>
            <p class="text-right">Total : {{ $risks->count() }}</p>
        </div>
    </div>
</div>

@endsection