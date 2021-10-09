<div class="category-tab">

	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			@foreach($danhmucsaches as $indexCategory => $danhmucsachs)
			<li class="{{$indexCategory == 0 ? 'active': ''}}">
				<a href="#category_tab_{{$danhmucsachs->id}}" data-toggle="tab">
					{{$danhmucsachs->DMS_Tieude}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="tab-content">
		@foreach($danhmucsaches as $indexCategoryProduct => $danhmucsachs)

		<div class="tab-pane fade {{$indexCategoryProduct == 0 ? 'active in' : ''}}active in" id="category_tab_{{$danhmucsachs->id}}">
			@foreach($danhmucsachs->products as $productItemTab)

			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{config('app.base_url') . $productItemTab->S_Anh}}" alt="" />
							<h2>{{$productItemTab->S_GiaBan}}</h2>
							<p>{{$productItemTab->S_Ten}}</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			@endforeach
		</div>

		@endforeach
	</div>
</div>