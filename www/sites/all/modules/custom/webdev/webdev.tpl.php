<div id="webdev-currencies-block">
  <div class="bank-item-wrapper">

    <div class="bank-item-info">
      <div class="bank-item-info-title"><span>Bank: </span><?php print $bank_data['title'] ?></div>
      <div class="bank-item-info-current-time"><span>Current time: </span><?php print $bank_data['current_time'] ?></div>
    </div>

    <div class="currency-rates">
      <div class="currency-rate-item-head">
        <div class="currency-rate-item-name-head">Currency</div>
        <div class="currency-rate-item-ask-head">Ask</div>
        <div class="currency-rate-item-bid-head">Bid</div>
      </div>

      <div class="currency-rate-item">
        <div class="currency-rate-item-name"><?php print $currencies['usd']['currency']; ?></div>
        <div class="currency-rate-item-ask"><?php print $currencies['usd']['ask']; ?></div>
        <div class="currency-rate-item-bid"><?php print $currencies['usd']['bid']; ?></div>
      </div>

      <div class="currency-rate-item">
        <div class="currency-rate-item-name"><?php print $currencies['eur']['currency']; ?></div>
        <div class="currency-rate-item-ask"><?php print $currencies['eur']['ask']; ?></div>
        <div class="currency-rate-item-bid"><?php print $currencies['eur']['bid']; ?></div>
      </div>

      <div class="currency-rate-item">
        <div class="currency-rate-item-name"><?php print $currencies['rub']['currency']; ?></div>
        <div class="currency-rate-item-ask"><?php print $currencies['rub']['ask']; ?></div>
        <div class="currency-rate-item-bid"><?php print $currencies['rub']['bid']; ?></div>
      </div>
      
    </div>
  </div>
</div>
