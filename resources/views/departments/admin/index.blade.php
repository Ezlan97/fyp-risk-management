@extends('components.main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Urus Jabatan</h1>
    <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split" data-toggle="modal" data-target="#createDepartment"  data-toggle="tooltip" data-placement="top" title="Tambah Operator">
        <span class="icon text-white">
            <i class="fas fa-building fa-sm text-white"></i>
        </span>
        <span class="text">Tambah Jabatan</span>                                
    </button>
</div>

<div class="card-deck">
    
    @foreach ($departments as $d)        
    <div class="card shadow mb-4" style="max-width: 18rem; min-width: 18rem;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jabatan</h6>
        </div>
        <div class="card-body text-center">
            {{ $d->name }}
        </div>
        <div class="card-footer text-center">
            <button class="d-sm-inline-block btn btn-sm btn-warning shadow-sm btn-icon-split" data-toggle="modal" data-target="#updateDepartment{{ $d->id }}"  data-toggle="tooltip" data-placement="top" title="Tambah Operator">
                <span class="icon text-white">
                    <i class="fas fa-edit fa-sm text-white"></i>
                </span>
                <span class="text">Kemaskini</span>                                
            </button>
        </div>
    </div>
    
    <!-- Update Modal -->
    <div class="modal fade" id="updateDepartment{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="updateDepartment{{ $d->id }}Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateDepartment{{ $d->id }}Label">Kemaskini Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.update.department', $d->id) }}" class="form-signin" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf     
                        
                        {{-- Name --}}
                        <div class="form-group">
                            <label for="inputName" class="sr-only">Name Jabatan</label>
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name Jabatan" value="{{ $d->name }}" required autofocus>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

<!-- Create Modal -->
<div class="modal fade" id="createDepartment" tabindex="-1" role="dialog" aria-labelledby="createDepartmentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDepartmentLabel">Tambah Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.create.department') }}" class="form-signin" enctype="multipart/form-data">
                    @csrf                    
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Name Jabatan</label>
                        <input type="text" id="inputName" name="name" class="form-control" placeholder="Name Jabatan" required autofocus>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection