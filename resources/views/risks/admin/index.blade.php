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
                        <th></th>
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
                        <td class="text-center">
                            <a href="{{ Route('operator.update.page.risk', $r->id) }}" class="btn btn-warning btn-icon-split"  data-toggle="tooltip" data-placement="top" title="Kemaskini Maklumat Risiko">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                    Kemaskini
                                </span>
                            </a>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <p class="text-right">Total : {{ $risks->count() }}</p>
        </div>
    </div>
</div>

@endsection