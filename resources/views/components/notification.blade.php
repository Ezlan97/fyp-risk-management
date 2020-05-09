{{-- success --}}
@if (Session::has('success'))
<div>
    <div class="session alert alert-success" role="alert" id="session">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Berjaya!</strong> {{ Session::get('success') }}
    </div>
</div>
@endif

{{-- danger --}}
@if (Session::has('danger'))
<div>
    <div class="session alert alert-danger" role="alert" id="session">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Gagal!</strong> {{ Session::get('danger') }}
    </div>
</div>
@endif

{{-- form error --}}
@if ($errors->any())
<div>
    <div class="session alert alert-danger" role="alert" id="session">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Gagal!</strong> {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>
</div>
@endif

