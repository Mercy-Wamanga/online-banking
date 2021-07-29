@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('layouts.sidebar-admin')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body">


                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection