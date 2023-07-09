@extends('app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">add new categories</h6>
                    </div>
                    <div class="card-body">
                        <form action="/products/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">description</label>
                                <input type="text" name="description" id="description" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="category" class="form-label">category</label>
                                {{-- <input type="text" name="category" id="category" class="form-control"> --}}
                                <select name="category" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="price" class="form-label">price</label>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="image" class="form-label">foto</label>
                                <input type="file" name="image" id="image" class="form-control">
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
