@extends('admin/layouts.master')
@section('title', 'Add Feature Course - Admin')
@section('body')


<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-xs-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> test</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <form id="demo-form2" method="post" action="{{route('featureListing.store')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
              {{ csrf_field() }}
                      
           
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <label for="exampleInputTit1e">{{ __('adminstaticword.User') }}</label>
                    <select name="user_id" class="form-control js-example-basic-single">
                      <option value="{{Auth::id()}}">{{Auth::user()->fname}}</option>
                    </select>
                  </div>
                    <div class="col-md-12">
                      <strong>Email Id</strong>
                      <input type="email" name="email" class="form-control" value="{{Auth::User()->email}}" placeholder="Enter Email id" required>
                    </div>
                  <div class="col-md-12">
                    <div class="col-md-8">
                    <h3>Listing For:</h3>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="list_for" id="exampleRadios1" value="day" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Day
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="list_for" id="exampleRadios2" value="week">
                    <label class="form-check-label" for="exampleRadios2">
                      Week
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="list_for" id="exampleRadios3" value="month" >
                    <label class="form-check-label" for="exampleRadios3">
                      Month
                    </label>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputTit1e">Number
                    <input type="number" name="number" class="form-control"></label>
                    <label for="exampleInputTit1e">Amount
                      <input type="number" name="amount" class="form-control"></label>
                    </div>
                    </div>

              <br>

              @php
                  $currency = App\Currency::first();
              //dd($currency);
              @endphp
<div class="col-md-12" style="color: red">
             <p> Amount to be paid to featured listing in day:10Tk</p>
  <p> Amount to be paid to featured listing in week:7Tk</p>
  <p> Amount to be paid to featured listing in day:5Tk</p></div>

              
      
              <div class="box-footer">
                <button type="submit" value="" class="btn btn-md col-md-4 btn-primary">Pay to feature List</button>
              </div>
</div></div>
            </form>
          </div>
        </div>
        <!-- /.box -->
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>

@endsection


