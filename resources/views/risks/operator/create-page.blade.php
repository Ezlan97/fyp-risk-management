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
                <hr>
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

                <br>
                <h2>Langkah Pencegahan</h2>
                <hr>
                {{-- Risk Detail --}}
                <div class="form-group">
                    <label for="inputDetail" class="sr-only">Penerangan Langkah Pencegahan</label>
                    <textarea name="mitigation" class="form-control" placeholder="Penerangan Langkah Pencegahan" required>{{ old('mitigation') }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dateline">Dateline</label>
                        <input type="date" name="dateline" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="person_in_charge" >Yang Bertanggungjawab</label>
                        <select name="person_in_charge" id="" class="form-control">
                            @foreach ($clerks as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}, {{ $c->email }}, {{ $c->phone_number }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <br>
                <h2>Penilian</h2>                
                <hr>
                <br>
                <div class="container">
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kadar kekerapan</p>
                        <p>Kekerapan berlakunya risiko ini</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="occurrence">Selalu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="occurrence">Berkemungkinan
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="occurrence">Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="occurrence">Sangat Jarang
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="occurrence">Bergantung
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Tahap kebolehurusan</p>
                        <p>Seberapa mudah untuk risiko itu ditangani</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="manageability">Sangat Mudah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="manageability">Mudah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="manageability">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="manageability">Susah
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="manageability">Sangat Susah
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Kebergantungan</p>
                        <p>Adakah ia akan mengikuti atau mencetuskan peristiwa lain</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="dependencies">Sangat Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="dependencies">Tinggi
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="dependencies">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="dependencies">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="dependencies">Tiada
                            </label>
                        </div> 
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Keselamatan Pihak Terlibat</p>
                        <p>Tahap keselamatan pihak terlibat ketika risiko berlaku</p>           
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="proximities">Sangat Merbahaya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="proximities">Berbahaya
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="proximities">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="proximities">Sedikit
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="proximities">Tiada
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <p class="font-weight-bold">Segera</p>
                        <p>Berapa cepat perlu risiko ini perlu ditangani</p>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="5" name="urgency">Segera
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4" name="urgency">Secepat Mungkin
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3" name="urgency">Sederhana
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="urgency">Bila-bila masa
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="urgency">Bila perlu
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-footer text-center">
                <button type="submit" name="action" value="save&draft" class="d-sm-inline-block btn btn-sm btn-secondary shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-archive fa-sm text-white"></i>
                    </span>
                    <span class="text">Draf</span>                                
                </button>
                <button type="submit" name="action" value="save&submit" class="d-sm-inline-block btn btn-sm btn-success shadow-sm btn-icon-split" data-toggle="tooltip" data-placement="top" title="Simpan Risiko">
                    <span class="icon text-white">
                        <i class="fas fa-paper-plane fa-sm text-white"></i>
                    </span>
                    <span class="text">Hantar</span>                                
                </button>
            </div>
        </form>
        
        
    </div>
</div>

@endsection