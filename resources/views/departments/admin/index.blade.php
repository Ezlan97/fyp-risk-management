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
                <form method="POST" action="{{ route('admin.create.deparment') }}" class="form-signin" enctype="multipart/form-data">
                    @csrf                    
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Name</label>
                        <input type="text" id="inputName" name="name" class="form-control" placeholder="Name Penuh" required autofocus>
                    </div>
                    
                    {{-- Email --}}
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    
                    {{-- Phone Number --}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone_number" placeholder="No Telefon" pattern="^(01)[0-46-9]*-[0-9]{7,8}$" required>
                        <p class="text-muted">Contoh : 012-34567890</p>
                    </div>
                    
                    {{-- ic --}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="ic" placeholder="No IC" pattern="(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})" required>
                        <p class="text-muted">Contoh : 901234-04-5678</p>
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