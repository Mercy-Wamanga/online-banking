@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
             @include('layouts.sidebar-user')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body">
                    <div class="jumbotron bg-white">
                        <div class="row w-100 mb-4">
                            
                            <div class="col-md-4">
                                <div class="card border-secondary mx-sm-1 p-3 mb-4 text-center">

                                    <div class="card border-secondary shadow text-secondary p-3 my-card"><span
                                            class=" fa fa-user-circle-o" aria-hidden="true"></span></div>
                                    <div class="text-secondary text-center mt-3">
                                        <h4>Receipts</h4>
                                    </div>
                                    <div class="text-secondary text-center mt-2">
                                        <h1>15</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card border-secondary mx-sm-1 p-3 mb-4 text-center">
                                    <div class="card border-secondary shadow text-secondary p-3 my-card"><span
                                            class="fa fa-credit-card" aria-hidden="true"></span></div>
                                    <div class="text-secondary text-center mt-3">
                                        <h4>Transactions</h4>
                                    </div>
                                    <div class="text-secondary text-center mt-2">
                                        <h1>80</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card border-secondary mx-sm-1 p-3 mb-4 text-center">
                                    <div class="card border-secondary shadow text-secondary p-3 my-card"><span
                                            class="fa fa-inbox" aria-hidden="true"></span></div>
                                    <div class="text-secondary text-center mt-3">
                                        <h4>profile</h4>
                                    </div>
                                    <div class="text-secondary text-center mt-2">
                                        <h1>346</h1>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
