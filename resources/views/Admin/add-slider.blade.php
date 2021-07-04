@extends('Admin.admin-master')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Silder image
    @if(Session::has('succMsg'))
    <div class="alert alert-success ml-4" style="font-size: 15px;"> {{session('succMsg')}} </div>
    @endif
    @if(Session::has('errMsg'))
    <div class="alert alert-danger ml-4" style="font-size: 15px;"> {{session('errMsg')}} </div>
    @endif

</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Silder List
                <a href="#" class="float-right btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#addProjectModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Add Slider</span>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Sr No.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Update Image</th>
                            <th>Update Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $sr=1;
                        @endphp
                        @foreach($simage as $slider)
                        <tr class="text-center">
                            <td>{{$sr}}</td>
                            <td>{{$slider->title}}</td>
                            <td>
                                <img src="{{asset('slider/'.$slider->slider_image)}}" height="120" width="250" />
                            </td>
                            <td>
                                <a href="{{url('admin/delslider/'.$slider->id)}}" class="btn btn-danger btn-circle mt-4">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td>{{$slider->updated_at->format('d/m/y')}}</td>
                        </tr>
                        @php
                        $sr++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-0">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add Slider
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h1>

                                </div>
                                <form action="{{url('admin/newslider')}}" method="post" class="user" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="title"  class="form-control form-control-user" placeholder="Slider title">
                                            @if($errors->has('title'))
                                            <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('title')}}</span>
                                            @endif<br>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <label>Upload Image<span style="font-size: 13px;">(resolution 1680 x 900 px,Only jpg)</span></label>
                                            <input type="file" name="slider" class="form-control form-control">
                                            @if($errors->has('slider'))
                                            <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('slider')}}</span>
                                            @endif<br>
                                        </div>
                                    </div>
                                    <input type="submit" value="Add Silder" class="btn btn-primary btn-user btn-block">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Testinial Modal -->
    @endsection