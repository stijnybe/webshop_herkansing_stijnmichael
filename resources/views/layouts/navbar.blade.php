<div class="menu">

    <a href="/about">About Webshop du Superfancy</a>

    @isset($baseCategories)

    @isset($baseSubcategories)

    <br />
      @foreach($baseCategories as $baseCategory)
        &nbsp;<a href="/products/categories/{{ $baseCategory->category }}">
            <h4> {{ $baseCategory->category }}</h4></a>
          @foreach($baseSubcategories as $baseSubcategory)
              @if($baseSubcategory->category == $baseCategory->category)
                  <h5>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/products/categories/{{ $baseCategory->category }}/{{ $baseSubcategory->subcategory }}"> {{ $baseSubcategory->subcategory }}</a></h5>
              @endif
          @endforeach
      @endforeach
    @endisset
    @endisset
</div>
