@extends('app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">add new categories</h6>
                    </div>
                    <div class="card-body">
                        <form action="/categories/store" method="post">
                            @csrf
                            <div class="col-12 mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-pill">save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
