@extends('template.master')

@section('title')
    Project 3
@endsection


@section('content')


@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div>
  <form method='get' action='/result' id='form1'>
    <h2>Parties' Information</h2>
     Seller's Name: <input type='text' name="sellerName" value="Seller Name">
     <br>
     Buyer's Name: <input type='text' name="buyerName" value="Buyer Name">
     <br>
</div>
<div>
  <h2>Goods/Services Rendered</h2>
   Is this a good or service?<br>
   <input type='radio' name="gs" value="Good" checked>Good    <input type='radio' name="gs" value="Service">Service<br>
   Name of the Good/Service: <input type='text' name="gsName" value="Potato"><br>
   Final mutually agreed price: $ <input type='text' name="price" value="100"><br>
</div>
<div>
  <h2>Other Provisions</h2>
   <input type='checkbox' name="nonRefundable" value="checked">Refundable<br>
   <input type='checkbox' name="arbitration" value="checked">Arbitration<br>
   Other Provisions<br>
   <textarea rows="6" cols="40" name="textArea" form="form1"></textarea>
</div>
<div>
 <input type="submit" value="Compile Contract">
</div>
@endsection
