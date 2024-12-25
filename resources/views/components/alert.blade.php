
{{-- Untuk Success --}}
@if ($massage = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" >
        <strong>{{ $massage}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
    </div>
@endif


{{-- Untuk Error --}}
@if ($massage = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" >
        <strong>{{ $massage}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
    </div>
@endif