<div class="wrap-icon-section wishlist">
    <a href="{{ route('wishlist') }}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('wishlist')->count() > 0)
                <span class="index" style="display:flex; flex-direction:row-reverse; justify-content: space-between;">
                    <span>{{ Cart::instance('wishlist')->count() }}</span>
                    <span>محصول</span>
                </span>
            @endif
            <span class="title">علاقه‌مندی‌ها</span>
        </div>
    </a>
</div>
