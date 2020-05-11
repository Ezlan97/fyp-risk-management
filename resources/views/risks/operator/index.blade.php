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

@endsection