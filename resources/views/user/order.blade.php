@extends('user.master')

@section('side_content')




    <!-- Main Container  -->
		<div class="main-container bg-light col-md-9">

			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-12 p-3">
					<h3 class="title">Your Order</h3>
					
					
			
		
		
		<div style="overflow-x:auto;">
		@foreach ($order as $item)	
		<table style="width:100%; margin-bottom: 15px">
              
              <tr>
                <th>Order Id</th>
                <th>Time</th>
                <th>Order Item</th>
                <th>Price</th>
                <th>Delivery Charge</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->time }}</td>
                <td>
                    @php $data = App\Models\Orderitem::where('order_id','=',$item->id)->select('item_id')->get(); @endphp
                    
                    @foreach($data as $data)
                        <a href="{{ url('product/'.$data->item->slug) }}">
                            <img src="{{ asset('uploads/item/'.$data->item->photo) }}" height="80px" width="80px">
                        </a>
                        
                    @endforeach
                </td>
                <td>{{ number_format($item->price) }} BDT</td>
                <td>{{ number_format($item->del_charge) }} BDT</td>
                <td><b>{{ number_format($item->amount) }} BDT</b></td>
                <td>
                    @if($item->action == "New")
                        Processing
                    @else
                        {{ $item->action }}
                    @endif
                </td>
              </tr>
              
        </table>

        @endforeach
        </div>
        
        <div style="float: right; margin-top: 5px">{{ $order->links() }}</div>
		
	</div>


</div>
</div>
<!-- //Main Container -->

</div>


@endsection
