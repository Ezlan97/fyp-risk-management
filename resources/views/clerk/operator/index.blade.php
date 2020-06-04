@extends('components.main')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Urus Pembantu Tadbir</h1>
    <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split" data-toggle="modal" data-target="#createClerk"  data-toggle="tooltip" data-placement="top" title="Tambah Pembantu Tadbir">
        <span class="icon text-white">
            <i class="fas fa-users fa-sm text-white"></i>
        </span>
        <span class="text">Tambah Pembantu Tadbir</span>                                
    </button>
</div>

<div class="row row-cols-1 row-cols-md-3">
    @foreach ($clerks as $c)

    <div class="col mb-4" style="max-width: 18rem">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $c->name }}</h5>
                <hr>
                <p class="card-text">Email : {{ $c->email }}</p>
                <p class="card-text">No Telefon : {{ $c->phone_number }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Create Modal -->
<div class="modal fade" id="createClerk" tabindex="-1" role="dialog" aria-labelledby="createOperatorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createOperatorLabel">Tambah Operator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('operator.create.clerk') }}" class="form-signin" enctype="multipart/form-data">
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

                    {{-- Email --}}
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Phone Number</label>
                        <input type="string" name="phone_number" class="form-control" placeholder="No Telefon" value="{{ old('phone_number') }}" required>
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