<nav data-shopping-cart-info
     style="display: none"
     class="navbar fixed-bottom navbar-dark bg-dark">

    <div id="data-shopping-cart-stub"></div>

    <div class="container">
        <div>
            <a href="{{ route('shopping-cart-page') }}"
               id="go-to-shopping-cart"
               class="btn btn-lg btn-success">
                <i class="fa fa-shopping-cart fa-lg"></i>
                @lang('messages.main-layout.partials.shopping-cart.go-to-shopping-cart')
            </a>
        </div>
        <div class="navbar-text">
            <span id="price-without-discounts" class="mr-sm-2"></span>
            <span class="mr-sm-2">
                @lang('messages.main-layout.partials.shopping-cart.info.price')
                <b class="text-info" data-shopping-cart-total-sum></b>
                <b class="text-info">
                    @lang('messages.main-layout.partials.shopping-cart.info.price-ending')
                </b>
            </span>
            <span class="mr-sm-2">
                @lang('messages.main-layout.partials.shopping-cart.info.amount')
                <b class="text-success" data-shopping-cart-total-amount></b>
                <b class="text-success">
                    @lang('messages.main-layout.partials.shopping-cart.info.amount-ending')
                </b>
            </span>
        </div>

    </div>
</nav>
