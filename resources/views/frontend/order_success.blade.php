@extends('frontend.new.master')

@section('content')


    <!-- Main Container  -->
		<div class="main-container container">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
                    <p>Thank you, Sir. Your order has completed successfully!</p>
                    <p>A confirmation mail has been sent.</p>
					<h2 class="title">Order Complete</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-center">Order Id</td>
									<td class="text-left">Shipping Address</td>
									<td class="text-left">Phone</td>
                                    <td class="text-right">Price</td>
                                    <td class="text-right">Delivery Charge</td>

                                    <td class="text-right">Save by Coupon</td>
                                    <td class="text-right">Total</td>
									<td class="text-right">Action</td>
								</tr>
							</thead>
							<tbody>
                                @foreach ($order as $item)
								<tr>
									<td class="text-center">
										{{ $item->id }}
									</td>
									<td class="text-left">{{ $item->address }}
									</td>
                                    <td class="text-left">{{ $item->phone }}</td>
                                    <td class="text-right">{{ number_format($item->price) }}</td>
                                    <td class="text-right">{{ number_format($item->del_charge) }}</td>

                                    <td class="text-right">{{ number_format($item->coupon_move) }}</td>
									<td class="text-right">{{ number_format($item->amount) }}</td>
									<td class="text-right">
										Processing
									</td>

							</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>


</div>
</div>
<!-- //Main Container -->




@endsection
