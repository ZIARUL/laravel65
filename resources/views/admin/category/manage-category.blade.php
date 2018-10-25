
@extends('admin.master')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @if($message = Session::get('message'))
                      <h1 class="page-header">{{ $message }}</h1>
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @foreach($allCategories as $allCategory)
                                    <tr class="odd gradeX">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $allCategory->id }}</td>
                                        <td>{{ $allCategory->category_name }}</td>
                                        <td class="center">{{ $allCategory->category_description }}</td>
                                        <td class="center">{{ $allCategory->publication_status == 1? 'published' : 'Unpublished' }}</td>
                                        <td class="center">
                                            @if($allCategory->publication_status ==1)
                                            <a href="{{ url('/unpublished-category/'.$allCategory->id) }}" class="btn btn-success btn-xs" title="Published Category">
                                              <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                            @else

                                            <a href="{{ url('/published-category/'.$allCategory->id) }}" class="btn btn-warning btn-xs" title="Published Category">
                                              <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>


                                            @endif


                                            <a href="{{ url('/edit-category/'.$allCategory->id) }}" class="btn btn-primary btn-xs" title="Edite Categoruy">
                                              <span class="glyphicon glyphicon-edit"></span>
                                            </a>

                                            <a href="" class="btn btn-danger btn-xs" title="Delete Categoruy">
                                              <span class="glyphicon glyphicon-remove"></span>
                                            </a>

                                        </td>
                                    </tr>
                                  @endforeach
                                  

                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

@endsection