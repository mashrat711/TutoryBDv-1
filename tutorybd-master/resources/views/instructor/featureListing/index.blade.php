@extends('admin/layouts.master')
@section('title', 'Featured Course - Instructor')
@section('body')

<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> Featured Course</h3>
        </div>
        <div class="box-header with-border">

          <a class="btn btn-info btn-md" href="{{route('featureListing.create')}}">
          <i class="glyphicon glyphicon-th-l">+</i> Feature Course</a>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                  <th>#</th>
                <th>Email</th>
                  <th>listing For</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
              @foreach( $tests as $test)
                <tr>
                  <td>{{$test->id}}</td>
                  <td>{{$test->email}}</td>
                  <td>{{$test->number}}{{$test->list_for}}</td>
                  <td>{{$test->amount}}</td>

                </tr>
                @endforeach

            </table>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection
