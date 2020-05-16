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
            <form method="POST" action="{{ route('operator.create.risk') }}" class="form-signin" enctype="multipart/form-data">
                @csrf
                
                <br>
                <h2>Tentang</h2>
                <br>
                
                {{-- Name --}}
                <div class="form-group">
                    <label for="inputName" class="sr-only">Tajuk</label>
                    <input type="text" name="title" class="form-control" placeholder="Tajuk" value="{{ old('title') }}" required autofocus>
                </div>
                
                {{-- Risk Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Risiko</label>
                    <textarea name="description" class="form-control" placeholder="Perincian Risiko" required>{{ old('description') }}</textarea>
                </div>
                
                {{-- Couse Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Punca Risiko</label>
                    <textarea name="cause_description" class="form-control" placeholder="Perincian Punca Risiko">{{ old('cause_description') }}</textarea>
                </div>
                
                {{-- Effect Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Kesan Risiko</label>
                    <textarea name="effect_description" class="form-control" placeholder="Perincian Kesan Risiko">{{ old('effect_description') }}</textarea>
                </div>
                
                <div class="form-group">
                    <label>Fail Berkaitan</label>
                    <input type="file" class="form-control" name="file" placeholder="Fail yang berkenaan" value="{{ old('file') }}">
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
                                <input type="radio" class="form-check-input" value="5" name="occurance_rate">Selalu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="occurance_rate">Berkemungkinan
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="occurance_rate">Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="occurance_rate">Sangat Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="occurance_rate">Bergantung
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Tahap kebolehurusan</p>
                        <p>Seberapa mudah untuk risiko itu ditangani</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="manageability_rate">Sangat Mudah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="manageability_rate">Mudah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="manageability_rate">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="manageability_rate">Susah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="manageability_rate">Sangat Susah
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kebergantungan</p>
                        <p>Adakah ia akan mengikuti atau mencetuskan peristiwa lain</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="dependecies_rate">Sangat Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="dependecies_rate">Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="dependecies_rate">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="dependecies_rate">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="dependecies_rate">Tiada
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Keselamatan Pekerja</p>
                        <p>Tahap keselamatan pekerja ketika risiko berlaku</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="proximities_rate">Sangat Merbahaya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="proximities_rate">Berbahaya
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="proximities_rate">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="proximities_rate">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="proximities_rate">Tiada
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Segera</p>
                        <p>Berapa cepat perlu risiko ini perlu ditangani</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="urgency_rate">Segera
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="urgency_rate">Secepat Mungkin
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="urgency_rate">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="urgency_rate">Bila-bila masa
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="urgency_rate">Bila perlu
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-footer text-center">
                <button type="submit" name="action" value="draft" class="d-sm-inline-block btn btn-sm btn-secondary shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-plus fa-sm text-white"></i>
                    </span>
                    <span class="text">Draf</span>                                
                </button>
                <button type="submit" name="action" value="save" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-plus fa-sm text-white"></i>
                    </span>
                    <span class="text">Hantar</span>                                
                </button>
            </div>
        </form>
        
        
    </div>
</div>

@endsection