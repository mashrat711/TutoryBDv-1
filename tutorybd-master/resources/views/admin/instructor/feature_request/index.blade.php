@extends('admin/layouts.master')
@section('title', 'Instructor Request - Admin')
@section('body')

<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Listing Request</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              
              <thead>
                <br>
                <br>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>listing For</th>
                  <th>Amount</th>
                  <th>{{ __('adminstaticword.Status') }}</th>
                  <th>{{ __('adminstaticword.View') }}</th>
                  <th>{{ __('adminstaticword.Delete') }}</th>
                </tr>
              </thead>
              <tbody>
              @foreach( $tests as $test)
                <tr>
                  @if($test->status == 'pending')
                  	<td>{{$test->id}}</td>
                  <td>{{$test->email}}</td>
                    <td>{{$test->list_for}}</td>
                    <td>{{$test->amount}}</td>

                    <td>
                      @if($test->status==1)
                        {{ __('adminstaticword.Approved') }}
                      @else
                        {{ __('adminstaticword.Pending') }}
                      @endif
                    </td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('listingRequested.edit',$test->id)}}">{{ __('adminstaticword.View') }}</a></td>

                    <td><form  method="post" action="{{url('listingRequested/'.$test->id)}}
                          "data-parsley-validate class="form-horizontal form-label-left">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                           <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button>
                        </form>
                    </td>
                  @endif

                  @endforeach
               
                </tr>
              </tfoot>
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