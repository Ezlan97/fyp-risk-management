@extends('components.main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Urus Operator</h1>
    <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split" data-toggle="modal" data-target="#createOperator"  data-toggle="tooltip" data-placement="top" title="Tambah Operator">
        <span class="icon text-white">
            <i class="fas fa-users fa-sm text-white"></i>
        </span>
        <span class="text">Tambah Operator</span>                                
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Maklumat Operator</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($operators as $o)
                    <tr>
                        <td>{{ $o->name }}</td>
                        <td>{{ $o->email }}</td>
                        <td>{{ $o->department->name }}</td>
                        <td>
                            <h5><span class="badge badge-{{ $o->status == 'Aktif' ? 'success' : 'danger' }}">{{ $o->status }}</span></h5>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#edit{{ $o->id }}"  data-toggle="tooltip" data-placement="top" title="Kemaskini Maklumat Operator">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                </span>
                            </button>
                        </td>
                    </tr>                    
                    
                    <!-- update Modal -->
                    <div class="modal fade" id="edit{{ $o->id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $o->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit{{ $o->id }}Label">Kemaskini Maklumat Operator</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.update.operator', $o->id) }}" class="form-signin" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        
                                        {{-- Name --}}
                                        <div class="form-group">
                                            <label for="inputName" class="sr-only">Name</label>
                                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name Penuh" value="{{  $o->name }}" required autofocus>
                                        </div>
                                        
                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label for="inputName" class="sr-only">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $o->email }}" required>
                                        </div>
                                        
                                        {{-- Department --}}
                                        <div class="form-group">
                                            <select class="form-control" name="department_id" required>
                                                @foreach ($departments as $d)
                                                <option {{ old('department_id') == $d->id ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        {{-- Status --}}
                                        <div class="form-group">
                                            <label for="status">Status operator</label>
                                            <select class="form-control" id="status" name="status">                                                
                                                <option value="Aktif" {{ $o->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="Tidak Aktif" {{ $o->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                            </select>
                                        </div>   
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning">kemaskini</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createOperator" tabindex="-1" role="dialog" aria-labelledby="createOperatorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createOperatorLabel">Tambah Operator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.create.operator') }}" class="form-signin" enctype="multipart/form-data">
                    @csrf                    
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Name Operator</label>
                        <input type="text" name="name" class="form-control" placeholder="Name Operator" value="{{ old('name') }}" required autofocus>
                    </div>
                    
                    {{-- Email --}}
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                    
                    {{-- Department --}}
                    <div class="form-group">
                        <select class="form-control" name="department_id" required>
                            <option selected>Jabatan</option>
                            @foreach ($departments as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endforeach
                        </select>
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