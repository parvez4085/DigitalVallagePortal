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
            <h6 class="m-0 font-weight-bold text-primary">Testimonials List
                <a href="#" class="float-right btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#addProjectModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Add Testimonial</span>
                </a>
            </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Profile</th>
                            <th>Message</th>
                            <th>Update Status</th>
                            <th>Upload Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sr=1;
                        @endphp
                        @foreach($testi as $tdata)
                        <tr>
                            <th>{{$sr}}</th>
                            <td>{{$tdata->name}}</td>
                            <td>
                                <img src="{{asset('testimonial/'.$tdata->profile)}}" height="80" width="100" />
                            </td>

                            <td>{{$tdata->message}}</td>
                            <td>
                                <span style="font-weight: 600;color:#f35b04">{{$tdata->status}}<span>
                                <a href="{{url('admin/status/'.$tdata->id,'Approve')}}" class="btn btn-sm btn-success">Aprove</a>
                                <a href="{{url('admin/status/'.$tdata->id,'Reject')}}" class="btn btn-sm btn-danger mt-2">Reject</a>
                                <a href="{{url('admin/status/'.$tdata->id,'Pending')}}" class="btn btn-sm btn-warning mt-2">Pending</a>
                            </td>
                            <td>{{$tdata->created_at}}</td>
                            <td>
                                <a href="{{url('admin/'.$tdata->id)}}" class="btn btn-success btn-circle mt-4">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{url('admin/'.$tdata->id)}}" class="btn btn-danger btn-circle mt-4">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @php
                        $sr++;
                        @endphp
                        @endforeach
                    <tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Start Add Testimonial Model -->
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
                                    <h1 class="h4 text-gray-900 mb-4">Add Testimonial
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h1>

                                </div>
                                <form action="{{url('admin/addtestimonial')}}" method="post" class="user" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control form-control">
                                            @if($errors->has('name'))
                                            <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('name')}}</span>
                                            @endif<br>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Upload Profile</label>
                                            <input type="file" name="file" class="form-control form-control">
                                            @if($errors->has('file'))
                                            <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('file')}}</span>
                                            @endif<br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control form-control-user" placeholder="Message"></textarea>
                                        @if($errors->has('message'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('message')}}</span>
                                        @endif<br>
                                    </div>
                                    <input type="submit" value="Add Testimonial" class="btn btn-primary btn-user btn-block">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Testinial Modal -->
</div>
    @endsection