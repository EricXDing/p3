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
  The Seller shall provide offers <u><?=$gs?></u> to the Buyer. In exchange, the Buyer shall provide $<u><?=$price?></u> to the Seller.</p>
  The <u><?=$gs?></u> being offered is <u><?=$gsName?></u>.
  <h3>Article III: </h3>



    <?php

    $otherProvisions = array(
        "1" => "The <u><?=$gs?></u> is sold as is; no refund is avaliable<br>",
        '2' => 'In case of conflicts, the Buyer and the Seller agrees to bind themselves the decision of an arbitrator.<br>',
        '3' => 'The Buyer and the Seller also agree to the following: <u><?=$textArea?></u>.<br>'
    );

    foreach($otherProvisions as $x => $x_value) {
        echo $x_value;
        echo "<br>";
    }
    ?>
</div>

<div>
  <a href="/"><button>Click Here To Draft Another Contract</button></a>
</div>

@endsection
