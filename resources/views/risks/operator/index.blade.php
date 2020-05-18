@extends('components.main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Urus Risiko</h1>
    <a href="{{ route('operator.create.page.risk') }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split"  data-toggle="tooltip" data-placement="top" title="Tambah Risiko">
        <span class="icon text-white">
            <i class="fas fa-exclamation-circle fa-sm text-white"></i>
        </span>
        <span class="text">Tambah Risiko</span>                                
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Risiko</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tajuk</th>
                        <th>Penerangan</th>
                        <th>Status</th>
                        <th>Perincian</th>
                        <th>Penilian</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($risks as $r)
                    <tr>
                        <td>{{ $r->title }}</td>
                        <td>{{ $r->description }}</td>
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
                        <td class="text-center">
                            <a href="{{ Route('operator.update.page.risk', $r->id) }}" class="btn btn-warning btn-icon-split"  data-toggle="tooltip" data-placement="top" title="Kemaskini Maklumat Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                    Kemaskini
                                </span>
                            </a>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                    <input type="radio" class="form-check-input" {{ $r->dependecies == '5' ? 'checked="true"' : '' }}>Sangat Tinggi
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependecies == '4' ? 'checked="true"' : '' }}>Tinggi
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependecies == '3' ? 'checked="true"' : '' }}>Sederhana
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependecies == '2' ? 'checked="true"' : '' }}>Sedikit
                                                </label>
                                            </div>
                                            <div class="form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" {{ $r->dependecies == '1' ? 'checked="true"' : '' }}>Tiada
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection