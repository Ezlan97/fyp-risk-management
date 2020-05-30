@extends('components.email.main')
@section('title')
{{ $details['title'] }}
@endsection
@section('details')

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $details['risiko'] }} </h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $details['penerangan'] }}</h6>
            <p class="card-text">Komen : {{ $details['comment'] }}</p>
            <div class="card-footer text-muted">
                Dari : {{ $details['oleh'] }}
            </div>
        </div>
    </div>
    {{-- {{ $details['body'] }} 
    <br> 
    <br> 
    {{ $details['risiko'] }} 
    <br>
    {{ $details['penerangan'] }}
    <br>
    {{ $details['comment'] }}
    <br>
    {{ $details['oleh'] }} --}}
@endsection