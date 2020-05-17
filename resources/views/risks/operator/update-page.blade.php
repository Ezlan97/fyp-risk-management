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
                    <input type="text" name="title" class="form-control" placeholder="Tajuk" value="{{ $risk->title }}" required autofocus>
                </div>
                
                {{-- Risk Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Risiko</label>
                    <textarea name="description" class="form-control" placeholder="Perincian Risiko" required>{{ $risk->description }}</textarea>
                </div>
                
                {{-- Couse Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Punca Risiko</label>
                    <textarea name="cause_description" class="form-control" placeholder="Perincian Punca Risiko">{{ $risk->cause_description }}</textarea>
                </div>
                
                {{-- Effect Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Perincian Kesan Risiko</label>
                    <textarea name="effect_description" class="form-control" placeholder="Perincian Kesan Risiko">{{ $risk->effect_description }}</textarea>
                </div>
                
                <div class="form-group">
                    <label>Fail Berkaitan</label>
                    <input type="file" class="form-control" name="file" placeholder="Fail yang berkenaan" value="{{ $risk->file }}">
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
                                <input type="radio" class="form-check-input" {{ $risk->occurance == '5' ? 'checked' : '' }} value="5" name="occurance">Selalu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->occurance == '5' ? 'checked' : '' }} value="4" name="occurance">Berkemungkinan
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->occurance == '5' ? 'checked' : '' }} value="3" name="occurance">Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->occurance == '5' ? 'checked' : '' }} value="2" name="occurance">Sangat Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->occurance == '5' ? 'checked' : '' }} value="1" name="occurance">Bergantung
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Tahap kebolehurusan</p>
                        <p>Seberapa mudah untuk risiko itu ditangani</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->manageability == '5' ? 'checked' : '' }} value="5" name="manageability">Sangat Mudah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->manageability == '5' ? 'checked' : '' }} value="4" name="manageability">Mudah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->manageability == '5' ? 'checked' : '' }} value="3" name="manageability">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->manageability == '5' ? 'checked' : '' }} value="2" name="manageability">Susah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->manageability == '5' ? 'checked' : '' }} value="1" name="manageability">Sangat Susah
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kebergantungan</p>
                        <p>Adakah ia akan mengikuti atau mencetuskan peristiwa lain</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->dependecies == '5' ? 'checked' : '' }} value="5" name="dependecies">Sangat Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->dependecies == '5' ? 'checked' : '' }} value="4" name="dependecies">Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->dependecies == '5' ? 'checked' : '' }} value="3" name="dependecies">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->dependecies == '5' ? 'checked' : '' }} value="2" name="dependecies">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->dependecies == '5' ? 'checked' : '' }} value="1" name="dependecies">Tiada
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Keselamatan Pekerja</p>
                        <p>Tahap keselamatan pekerja ketika risiko berlaku</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->proximities == '5' ? 'checked' : '' }} value="5" name="proximities">Sangat Merbahaya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->proximities == '5' ? 'checked' : '' }} value="4" name="proximities">Berbahaya
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->proximities == '5' ? 'checked' : '' }} value="3" name="proximities">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->proximities == '5' ? 'checked' : '' }} value="2" name="proximities">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->proximities == '5' ? 'checked' : '' }} value="1" name="proximities">Tiada
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Segera</p>
                        <p>Berapa cepat perlu risiko ini perlu ditangani</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->urgency == '5' ? 'checked' : '' }} value="5" name="urgency">Segera
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->urgency == '5' ? 'checked' : '' }} value="4" name="urgency">Secepat Mungkin
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->urgency == '5' ? 'checked' : '' }} value="3" name="urgency">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->urgency == '5' ? 'checked' : '' }} value="2" name="urgency">Bila-bila masa
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" {{ $risk->urgency == '5' ? 'checked' : '' }} value="1" name="urgency">Bila perlu
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