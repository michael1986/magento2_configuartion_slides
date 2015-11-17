<div class="pull-left col-1-2">
    <div class="small-gap">
        <label><strong>UAH:</strong> <input type="number" data-ng-model="amount" /></label>
    </div>
</div>
<div class="pull-left col-1-2">
    <div class="small-gap">
        <div class="pull-left col-1-3"><strong>USD:</strong> {{ converted.USD | number:2 }}</div>
        <div class="pull-left col-1-3"><strong>EUR:</strong> {{ converted.EUR | number:2 }}</div>
        <div class="pull-left col-1-3"><strong>GBP:</strong> {{ converted.GBP | number:2 }}</div>
    </div>
</div>