@extends('Admin.admin-master')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Village Employment Servent(ग्राम रोजगार सेवक)
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
            <h6 class="m-0 font-weight-bold text-primary">Village Employment Servent(ग्राम रोजगार सेवक)
                <a href="#" class="float-right btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#addProjectModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Add VES</span>
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
                            <th>Profile Image</th>
                            <th>Mobile No</th>
                            <th>Duration(कार्यकाल)</th>
                            <th>Office Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sr=1;
                        @endphp
                        @foreach($vesdata as $ves)
                        <tr>
                            <th>{{$sr}}</th>
                            <td>{{$ves->name}}</td>
                            <td>
                                <img src="{{asset('officers/'.$ves->image)}}" height="110" width="110" />
                            </td>
                            <td>{{$ves->mobile}}</td>
                            <td>({{$ves->joindate}})-({{$ves->enddate}})</td>
                            <td>{{$ves->office_address}}</td>
                            <td>
                                <a href="{{url('admin/'.$ves->id)}}" class="btn btn-success btn-circle mt-4">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{url('admin/'.$ves->id)}}" class="btn btn-danger btn-circle mt-4">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
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
</div>
<!-- Start Add Silder Model -->
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
                                <h1 class="h4 text-gray-900 mb-4">Add VES(ग्राम रोजगार सेवक)
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h1>

                            </div>
                            <form action="{{url('admin/addves')}}" method="post" class="user" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>अधिकारी का नाम</label>
                                        <input type="text" name="name" class="form-control form-control-user" placeholder="English/हिन्दी">
                                        @if($errors->has('name'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('name')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>मोबाइल नंबर</label>
                                        <input type="text" name="mobile" class="form-control form-control-user" placeholder="">
                                        @if($errors->has('mobile'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('mobile')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>कार्यकाल Join Date</label>
                                        <input type="date" name="joindate" class="form-control form-control-user" placeholder="English/हिन्दी">
                                        @if($errors->has('joindate'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('joindate')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>कार्यकाल End Date</label>
                                        <div class="custom-control custom-checkbox small ml-2" style="display: inline;position: absolute">
                                            <input type="checkbox" name="present" value="Present" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Present</label>
                                        </div>
                                        <input type="date" name="enddate" id="enddate" class="form-control form-control-user">
                                        @if($errors->has('enddate'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('enddate')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>अपलोड प्रोफ़ाइल Image</label>
                                        <input type="file" name="file" class="form-control form-control">
                                        @if($errors->has('file'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('file')}}</span>
                                        @endif<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Office Address</label>
                                    <textarea name="address" class="form-control form-control-user" placeholder="English/हिन्दी"></textarea>
                                    @if($errors->has('address'))
                                    <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('address')}}</span>
                                    @endif<br>
                                </div>
                                <input type="submit" value="Add VES" class="btn btn-primary btn-user btn-block">
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