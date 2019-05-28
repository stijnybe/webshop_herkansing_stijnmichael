
<div class="functionbar">
    <div class="shoppingcart">
        <a href="/shoppingcart">
            <i class="fa fa-shopping-cart"> {{Session::has('cart') ? Session::get('cart')->totalQuantity : '' }}</i>
        </a>
    </div>
    <div class="breadcrumbs">
        @isset($breadcrumbs)
        {!! $breadcrumbs->render() !!}
        @endisset
    </div>
    <div class="search-container">
        <form method="POST" action="/search" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" placeholder="Search.." name="search">
            </div>
            <button type="submit" class="fa fa-search">Search</button>
        </form>
    </div>
</div>
