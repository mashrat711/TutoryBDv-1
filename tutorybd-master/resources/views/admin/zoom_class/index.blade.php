@extends("admin/layouts.master")
@section('title','All Coupons')

@section('body')
<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{ __('adminstaticword.Coupon') }}</h3>
        </div>
        <div class="box-header">
          <a title="Create new Coupon" href="{{ route('coupon.create') }}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> {{ __('adminstaticword.Add') }}</a>
          <br>
        </div>

        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Room No</th>
                {{-- <th>description</th>
                <th>Campus</th>
                <th>Building</th>
                <th>Floor</th>
                <th>capacity</th> --}}
                <th>status</th>
                <th>isVirtual</th>
                <th>Edit</th>
                <th>Delete</th>
               
              </thead>

              <tbody>
                @foreach($classrooms as $key=> $cpn)
                  <tr>
{{-- 'title', 'type', 'roomNo', 'campus', 'building', 'floor', 'isVirtual', 'capacity', 'status', 'description' --}}
                    <td>{{ $cpn->id }}</td>
                    <td>{{ $cpn->code }}</td>
                    @php
                        $currency = App\Currency::first();
                    @endphp 
                    <td>@if($cpn->distype == 'fix') <i class="fa {{ $currency->icon }}"></i> @endif {{ $cpn->amount }}@if($cpn->distype == 'per')% @endif </td>
                    <td>{{ $cpn->maxusage }}</td>
                    <td>
                      <p>{{ __('adminstaticword.Linkedto') }}: <b>{{ ucfirst($cpn->link_by) }}</b></p>
                      <p>{{ __('adminstaticword.ExpiryDate') }}: <b>{{ date('d-M-Y',strtotime($cpn->expirydate)) }}</b></p>
                      <p>{{ __('adminstaticword.DiscountType') }}: <b>{{ $cpn->distype == 'per' ? "Percentage" : "Fixed Amount" }}</b></p>
                    </td>
                    <td>
                      <a title="Edit coupon" href="{{ route('coupon.edit',$cpn->id) }}" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                    <td>
                      <a title="Delete coupon" data-toggle="modal" data-target="#coupon{{ $cpn->id }}" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>





                    <div id="coupon{{ $cpn->id }}" class="delete-modal modal fade" role="dialog">
                        <div class="modal-dialog modal-sm">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <div class="delete-icon"></div>
                            </div>
                            <div class="modal-body text-center">
                              <h4 class="modal-heading">Are You Sure ?</h4>
                              <p>Do you really want to delete this Coupon ? This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer">
                                 <form method="post" action="{{route('coupon.destroy',$cpn->id)}}" class="pull-right">
                                    {{csrf_field()}}
                                    {{method_field("DELETE")}}
                                          
                                 <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-danger">Yes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>



                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
