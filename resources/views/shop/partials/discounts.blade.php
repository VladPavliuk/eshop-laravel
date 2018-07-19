<div class="discounts-list-wrapper col-lg-2 col-md-3 col-sm-4">
    <ul class="list-group">
        <li class="list-group-item list-group-item-primary">
            <div class="discounts-list-title">Поточні знижки</div>
        </li>
        @foreach($discounts as $discount)
            <li id="discount-id-{{ $discount->id }}" class="list-group-item">
                <div class="clearfix">
                    <div class="pull-left">
                        {{ $discount->title }}
                        <i id="discount-id-icon-{{ $discount->id }}" class="invisible fa fa-check-circle fa-lg" aria-hidden="true"></i>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>