@extends('template.master')

@section('title')
    Project 3
@endsection


@section('content')
  <h2>Compiled Contract</h2>

<div class = 'contract'>
  <h3>Article I: Purpose</h3>


  The purpose is between <u><?=$buyerName ?></u>, (hereinafter 'Buyer'), and <u><?=$sellerName ?></u> (hereinafter 'Seller').
  <h3>Article II: Transaction</h3>
  The Seller shall provide offers <u><?=$gs?></u> to the Buyer. The <u><?=$gs?></u> being offered is <u><?=$gsName?></u>. In exchange, the Buyer shall provide $<u><?=$price?></u> to the Seller.</p>

    <?=$articleIII?>
    <?=$nonRefundable?>
    <?=$arbitration?>
    <?=$textArea?>

</div>

<div>
  <a href="/"><button>Click Here To Draft Another Contract</button></a>
</div>

@endsection
