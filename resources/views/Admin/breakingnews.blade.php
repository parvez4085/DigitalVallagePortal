@extends('Admin.admin-master')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Breaking News List
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
            <h6 class="m-0 font-weight-bold text-primary">Breaking News
                <a href="#" class="float-right btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#addProjectModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Add News</span>
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
                            <th>News</th>
                            <th>Added Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sr=1;
                        @endphp
                        @foreach($bnews as $news)
                        <tr>
                            <th>{{$sr}}</th>
                            <td>{{$news->title}}</td>
                            <td>{{$news->news}}</td>
                            <td>{{$news->created_at}}</td>
                            <td>
                                <a href="{{url('/admin/#')}}" class="btn btn-success btn-circle ">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{url('/admin/#')}}" class="btn btn-danger btn-circle">
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
                                    <h1 class="h4 text-gray-900 mb-4">Add Breaking News
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h1>

                                </div>
                                <form action="{{url('admin/addbreakingnews')}}" method="post" class="user" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="title" placeholder="News Title" class="form-control form-control-user">
                                        @if($errors->has('title'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('title')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="news" class="form-control form-control-user" placeholder="Breaking News"></textarea>
                                        @if($errors->has('news'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('news')}}</span>
                                        @endif<br>
                                    </div>
                                    <input type="submit" value="Add News" class="btn btn-primary btn-user btn-block">
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