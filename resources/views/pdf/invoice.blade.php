<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shah Ali Plaza</title>
    <style>
        body{
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 90%;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 17px;
        }
        .brand-section{
           background-color: #ffffff;
           padding: 10px 40px;
           border: 1px solid black;
           margin-top: 50px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: right;
            padding-right: 5px;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>

</head>
<body>

    <div class="container">


        <div class="body-section">
            <table>
                <tr>

                    <td>
                        <img src="{{ asset('uploads/logo/logo.png') }}" height="100" width="300">

                    </td>
                    <td>
                        <h2 class="heading">Invoice No. {{ $item->id }}</h2>
                        <p class="sub-heading">Delivery Date: {{ date("d-m-Y") }} </p>
                        <p class="sub-heading">Phone: 01611001579 </p>
                        <p class="sub-heading">Email Address: info@shahaliplaza.com.bd </p>
                        <p class="sub-heading">Address: Shah Ali Plaza, Mirpur 10, Dhaka-1216 </p>

                    </td>

                </tr>
            </table>

        </div>

        <div class="body-section">

            <table class="table-bordered">
                <tr>
                    <th>Name:</th>
                    <td>{{ $item->name }}</td>
                </tr>
                
                <tr>
                    <th>Phone Number:</th>
                    <td>{{ $item->phone }}</td>
                </tr>
                <tr>
                    <th>Delivery address:</th>
                    <td>{{ $item->address }}</td>
                </tr>
                
                 <tr>
                    <th>City address:</th>
                    <td>{{ $item->city }}</td>
                </tr>

            </table>


        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_item as $data)
                    <tr>
                        <td>
                            {{ $data->item->name }}
                            <br>
                            @if($data->color)
                                Color: {{ $data->color }}
                            @endif
                            @if($data->size)
                                Size: {{ $data->size }}
                            @endif
                        </td>
                        <td>{{ number_format($data->price) }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ number_format($data->price * $data->quantity) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> {{ number_format($item->price) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Delivery Charge</td>
                        <td>{{ number_format($item->del_charge) }}</td>
                    </tr>
                    @if($item->coupon_move > 0)
                    <tr>
                        <td colspan="3" class="text-right">Saving by Coupon</td>
                        <td>-{{ number_format($item->coupon_move) }}</td>
                    </tr>
                    @endif
                    @if($item->wallet_move > 0)
                    <tr>
                        <td colspan="3" class="text-right">Saving by Wallet</td>
                        <td>-{{ number_format($item->wallet_move) }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td>{{ number_format($item->amount) }}</td>
                    </tr>
                </tbody>
            </table>
            <br>

        </div>


    </div>



</body>
</html>
