@extends('admin.layouts.master')
@section('title', 'View Instructor - Admin')
@section('body')
 
<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-md-12">
    	<div class="box box-primary">
           	<div class="box-header with-border">
          	<h3 class="box-title">{{ __('adminstaticword.ListingRequest') }}</h3>
       		</div>
          	<div class="panel-body">

          		<div class="view-list">
                    <div class="detail">
                    	<ul>

                    		<li>{{ __('adminstaticword.Email') }}: {{ $show->email }}</li>
                    		<li>Listing For: {{ $show->list_for }}</li>
                    		<li>Number: {{ $show->number }}</li>
                    		<li>Amount: {{ $show->amount }}</li>

                    	</ul>
                    </div>
          		</div>
	              

	            <form action="{{route('listingRequested.update',$show->id)}}" method="POST" enctype="multipart/form-data">
	                {{ csrf_field() }}
	                {{ method_field('PUT') }}

	                <input type="hidden" value="{{ $show->user_id }}" name="user_id" class="form-control">

                  <input type="hidden" value="{{ $show->email }}" name="email" class="form-control">
                  <input type="hidden" value="{{ $show->list_for }}" name="list_for" class="form-control">
					<input type="hidden" value="{{ $show->amount }}" name="amount" class="form-control">

	              	<div class="row">
	                  <div class="col-md-6">
	                    
	                    <label for="exampleInputTit1e">{{ __('adminstaticword.Status') }}:</label>
	                    <br>
	                    <li class="tg-list-item">
	                    <input class="tgl tgl-skewed" id="cb333" type="checkbox" {{ $show->status==1 ? 'checked' : '' }}>
	                    <label class="tgl-btn" data-tg-off="Pending" data-tg-on="Approved" for="cb333"></label>
	                    </li>
	                    <input type="hidden" name="status" value="{{ $show->status }}" id="c33">
		              </div>
	                  
	              	</div>
	              	<br>
	              	<button value="" type="submit"  class="btn btn-lg col-md-4 btn-primary">Save</button>

	          	</form>
          	</div>
      	</div>
  	</div>
  </div>
</section>
@endsection
