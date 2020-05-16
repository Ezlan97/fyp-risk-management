@extends('components.main')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Risiko</h1>
</div>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Maklumat Risiko</h6>
        </div>
        <div class="card-body container">
            <form method="POST" action="{{ route('admin.create.operator') }}" class="form-signin" enctype="multipart/form-data">
                @csrf
                
                <br>
                <h2>Tentang</h2>
                <br>
                
                {{-- Name --}}
                <div class="form-group">
                    <label for="inputName" class="sr-only">Tajuk</label>
                    <input type="text" name="name" class="form-control" placeholder="Tajuk" value="{{ old('name') }}" required autofocus>
                </div>
                
                {{-- Risk Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Risiko</label>
                    <textarea name="description" class="form-control" placeholder="Perincian Risiko" required>{{ old('description') }}</textarea>
                </div>
                
                {{-- Couse Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Punca Risiko</label>
                    <textarea name="description" class="form-control" placeholder="Perincian Punca Risiko" required>{{ old('cause_description') }}</textarea>
                </div>
                
                {{-- Effect Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Kesan Risiko</label>
                    <textarea name="description" class="form-control" placeholder="Perincian Kesan Risiko" required>{{ old('effect_description') }}</textarea>
                </div>
                
                <div class="form-group">
                    <label>Fail Berkaitan</label>
                    <input type="file" class="form-control" name="evidence" placeholder="Fail yang berkenaan" value="{{ old('evidence') }}" required>
                    <p class="text-muted">Jika fail melebihi satu sila zip kepada satu fail</p>
                </div>
                <br>
                <h2>Penilian</h2>
                <br>
                <div class="container">
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kadar kekerapan</p>
                        <p>Kekerapan berlakunya risiko ini</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Selalu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Berkemungkinan
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sangat Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Bergantung
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Tahap kebolehurusan</p>
                        <p>Seberapa mudah untuk risiko itu ditangani</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sangat Mudah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Mudah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Susah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sangat Susah
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kebergantungan</p>
                        <p>Adakah ia akan mengikuti atau mencetuskan peristiwa lain</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sangat Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Tiada
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Keselamatan Pekerja</p>
                        <p>Tahap keselamatan pekerja ketika risiko berlaku</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sangat Merbahaya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Berbahaya
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Tiada
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Segera</p>
                        <p>Berapa cepat perlu risiko ini perlu ditangani</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Segera
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Secepat Mungkin
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Bila-bila masa
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Bila perlu
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-footer text-center">
                <a href="" class="d-sm-inline-block btn btn-sm btn-secondary shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-plus fa-sm text-white"></i>
                    </span>
                    <span class="text">Draf</span>                                
                </a>
                <a href="" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-plus fa-sm text-white"></i>
                    </span>
                    <span class="text">Hantar</span>                                
                </a>
            </div>
        </form>
        
        
    </div>
</div>

@endsection