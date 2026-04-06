<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<style>
		.category-list .product-item {
			display: flex;
		}
		.category-list .single-product {
			display: flex;
			flex-direction: column;
			height: 100%;
			width: 100%;
			border: 1px solid #f1f1f1;
			padding: 14px;
			background: #fff;
		}
		.product-thumb-wrap {
			height: 240px;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			margin-bottom: 12px;
			background: #f9f9f9;
		}
		.product-thumb-wrap img {
			max-width: 100%;
			max-height: 100%;
			width: 100%;
			height: 100%;
			object-fit: contain;
		}
		.category-list .product-details {
			display: flex;
			flex-direction: column;
			flex-grow: 1;
		}
		.category-list .product-details h6 {
			min-height: 48px;
		}
		.product-filter-panel {
			background: #fff;
			border: 1px solid #ececec;
			padding: 16px;
			margin-bottom: 24px;
		}
		.no-results-box {
			display: none;
			background: #fff8e6;
			border: 1px solid #ffe3a1;
			padding: 14px;
			margin-top: 10px;
		}
	</style>
</head>

<body id="category">

	<!-- Start Header Area -->
	@include('layouts.header')
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	@php
		$medicalCategoryLabels = [
			'diagnostics' => 'Diagnostics',
			'consumables' => 'Medical Consumables',
			'ppe' => 'PPE & Safety',
			'laboratory' => 'Laboratory Supplies',
			'surgical' => 'Surgical & Procedure',
			'patient_care' => 'Patient Care',
			'other' => 'Other Medical Items',
		];

		$categorizeProduct = function ($name) {
			$n = strtolower((string) $name);
			if (\Illuminate\Support\Str::contains($n, ['glove', 'mask', 'gown', 'ppe', 'sanitizer', 'shield'])) return 'ppe';
			if (\Illuminate\Support\Str::contains($n, ['test', 'monitor', 'bp', 'pressure', 'thermometer', 'stethoscope', 'diagnostic'])) return 'diagnostics';
			if (\Illuminate\Support\Str::contains($n, ['syringe', 'cotton', 'bandage', 'catheter', 'tube', 'dressing', 'gauze'])) return 'consumables';
			if (\Illuminate\Support\Str::contains($n, ['lab', 'reagent', 'microscope', 'centrifuge', 'pipette'])) return 'laboratory';
			if (\Illuminate\Support\Str::contains($n, ['surgical', 'forceps', 'scalpel', 'blade', 'suture', 'operation'])) return 'surgical';
			if (\Illuminate\Support\Str::contains($n, ['bed', 'wheelchair', 'crutch', 'walker', 'nebulizer', 'oxygen'])) return 'patient_care';
			return 'other';
		};

		$categoryCounts = array_fill_keys(array_keys($medicalCategoryLabels), 0);
		$stockCounts = ['in_stock' => 0, 'out_of_stock' => 0];
		$unitCounts = [];
		foreach ($products as $tmpProduct) {
			$key = $categorizeProduct($tmpProduct->name ?? '');
			$categoryCounts[$key]++;
			$stockStatus = (int) ($tmpProduct->stock ?? 0) > 0 ? 'in_stock' : 'out_of_stock';
			$stockCounts[$stockStatus]++;
			$unit = strtolower(trim((string) ($tmpProduct->unit ?? '')));
			if ($unit !== '') {
				$unitCounts[$unit] = ($unitCounts[$unit] ?? 0) + 1;
			}
		}
		ksort($unitCounts);
	@endphp
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Medical Categories</div>
					<ul class="main-categories">
						@foreach ($medicalCategoryLabels as $categoryKey => $categoryLabel)
							<li class="filter-list">
								<input class="pixel-radio js-category-filter" type="checkbox" id="category_{{ $categoryKey }}" value="{{ $categoryKey }}">
								<label for="category_{{ $categoryKey }}">{{ $categoryLabel }} <span>({{ $categoryCounts[$categoryKey] ?? 0 }})</span></label>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Availability</div>
						<form action="#">
							<ul>
								<li class="filter-list">
									<input class="pixel-radio js-availability-filter" type="checkbox" id="availability_in_stock" value="in_stock">
									<label for="availability_in_stock">In Stock <span>({{ $stockCounts['in_stock'] ?? 0 }})</span></label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio js-availability-filter" type="checkbox" id="availability_out_of_stock" value="out_of_stock">
									<label for="availability_out_of_stock">Out of Stock <span>({{ $stockCounts['out_of_stock'] ?? 0 }})</span></label>
								</li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Units</div>
						<form action="#">
							<ul>
								@if (count($unitCounts) > 0)
									@foreach ($unitCounts as $unitName => $unitCount)
										<li class="filter-list">
											<input class="pixel-radio js-unit-filter" type="checkbox" id="unit_{{ preg_replace('/[^a-z0-9_]/', '_', $unitName) }}" value="{{ $unitName }}">
											<label for="unit_{{ preg_replace('/[^a-z0-9_]/', '_', $unitName) }}">{{ strtoupper($unitName) }} <span>({{ $unitCount }})</span></label>
										</li>
									@endforeach
								@else
									<li class="filter-list"><label>No units found.</label></li>
								@endif
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center justify-content-between">
					<div>
						<strong>Products</strong>
					</div>
					<div id="visibleProductCount" class="text-muted">Showing {{ count($products) }} of {{ count($products) }}</div>
				</div>
				<!-- End Filter Bar -->

				<div class="product-filter-panel">
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-2">
							<input type="text" id="filterSearch" class="form-control" placeholder="Search by product name or description">
						</div>
						<div class="col-lg-2 col-md-3 mb-2">
							<input type="number" id="filterMinPrice" class="form-control" placeholder="Min price">
						</div>
						<div class="col-lg-2 col-md-3 mb-2">
							<input type="number" id="filterMaxPrice" class="form-control" placeholder="Max price">
						</div>
						<div class="col-lg-3 col-md-6 mb-2">
							<select id="filterSort" class="form-control">
								<option value="default">Sort: Default</option>
								<option value="price-asc">Price: Low to High</option>
								<option value="price-desc">Price: High to Low</option>
								<option value="name-asc">Name: A to Z</option>
								<option value="name-desc">Name: Z to A</option>
							</select>
						</div>
						<div class="col-lg-1 col-md-6 mb-2">
							<button id="resetFilters" type="button" class="btn btn-outline-secondary btn-block">Reset</button>
						</div>
					</div>
				</div>
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row align-items-stretch" id="productGrid">
						<!-- single product -->
						@foreach ($products as $product)
						@php
							$itemCategoryKey = $categorizeProduct($product->name ?? '');
							$itemStockStatus = (int) ($product->stock ?? 0) > 0 ? 'in_stock' : 'out_of_stock';
							$itemUnit = strtolower(trim((string) ($product->unit ?? '')));
						@endphp
						<div class="col-lg-4 col-md-6 product-item"
							data-name="{{ strtolower($product->name) }}"
							data-price="{{ (float) $product->price }}"
							data-category="{{ $itemCategoryKey }}"
							data-stockstatus="{{ $itemStockStatus }}"
							data-unit="{{ $itemUnit }}"
							data-default-order="{{ $loop->index }}">
							<div class="single-product">
								@php
									$imagePath = trim((string) ($product->image ?? ''));
									$normalized = str_replace('\\', '/', $imagePath);
									$normalized = ltrim(str_replace(['storage/app/public/', 'storage/'], '', $normalized), '/');
									$imageUrl = asset('img/defaultmedical.jpg');

									if ($imagePath !== '') {
										if (\Illuminate\Support\Str::startsWith($imagePath, ['http://', 'https://'])) {
											$imageUrl = $imagePath;
										} elseif (file_exists(storage_path('app/public/' . $normalized))) {
										$imageUrl = asset('storage/app/public/' . $normalized);
										} elseif (file_exists(public_path('storage/' . $normalized))) {
										$imageUrl = asset('storage/' . $normalized);
										} elseif (file_exists(public_path($imagePath))) {
										$imageUrl = asset($imagePath);
										}
									}
								@endphp
								<div class="product-thumb-wrap">
									<img class="img-fluid" src="{{ $imageUrl }}" alt="{{ $product->name }}" onerror="this.onerror=null;this.src='{{ asset('img/defaultmedical.jpg') }}';">
								</div>
								<div class="product-details">
									<div class="d-flex justify-content-between align-items-start mb-2">
										<small class="text-muted">{{ $medicalCategoryLabels[$itemCategoryKey] ?? ucfirst($itemCategoryKey) }}</small>
										<small class="text-muted">{{ $itemStockStatus == 'in_stock' ? 'In Stock' : 'Out of Stock' }}</small>
									</div>
									<h6>{{ $product->name }}</h6>
									@if(!empty($product->description))
										<p class="product-desc">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
									@endif
									<div class="price mb-2">
										<h6>Tzs {{ number_format($product->price, 2) }}</h6>
										<small class="text-muted">Unit: {{ strtoupper($itemUnit ?: 'pcs') }}</small>
									</div>
									<div class="prd-bottom">
										<a href="{{ route('add.to.cart', $product->id) }}" class="social-info" title="Add to bag" rel="nofollow">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="{{ route('wishlist.add', $product->id) }}" class="social-info" title="Add to wishlist" rel="nofollow">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="{{ route('compare.add', $product->id) }}" class="social-info" title="Add to compare" rel="nofollow">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="{{ route('products.show', $product->id) }}" class="social-info" title="View product details">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div id="noResultsBox" class="no-results-box">
						No products match your current filters.
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
										looking for something that can make your interior look awesome, and at the same time give you the pleasant
										warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const grid = document.getElementById('productGrid');
			if (!grid) return;

			const items = Array.from(grid.querySelectorAll('.product-item'));
			const searchInput = document.getElementById('filterSearch');
			const minPriceInput = document.getElementById('filterMinPrice');
			const maxPriceInput = document.getElementById('filterMaxPrice');
			const sortSelect = document.getElementById('filterSort');
			const countText = document.getElementById('visibleProductCount');
			const noResultsBox = document.getElementById('noResultsBox');
			const resetBtn = document.getElementById('resetFilters');
			const categoryFilters = Array.from(document.querySelectorAll('.js-category-filter'));
			const availabilityFilters = Array.from(document.querySelectorAll('.js-availability-filter'));
			const unitFilters = Array.from(document.querySelectorAll('.js-unit-filter'));
			const total = items.length;

			function sortItems() {
				const mode = sortSelect.value;
				// sort only visible items
				const visible = items.filter(function (it) { return it.style.display !== 'none'; });
				visible.sort(function (a, b) {
					const aPrice = parseFloat(a.dataset.price || '0');
					const bPrice = parseFloat(b.dataset.price || '0');
					const aName = (a.dataset.name || '').toLowerCase();
					const bName = (b.dataset.name || '').toLowerCase();
					const aDefault = parseInt(a.dataset.defaultOrder || '0', 10);
					const bDefault = parseInt(b.dataset.defaultOrder || '0', 10);

					if (mode === 'price-asc') return aPrice - bPrice;
					if (mode === 'price-desc') return bPrice - aPrice;
					if (mode === 'name-asc') return aName.localeCompare(bName);
					if (mode === 'name-desc') return bName.localeCompare(aName);
					return aDefault - bDefault;
				});

				visible.forEach(function (item) { grid.appendChild(item); });
			}

			function applyFilters() {
				const q = (searchInput.value || '').trim().toLowerCase();
				const min = minPriceInput.value === '' ? Number.NEGATIVE_INFINITY : parseFloat(minPriceInput.value);
				const max = maxPriceInput.value === '' ? Number.POSITIVE_INFINITY : parseFloat(maxPriceInput.value);
				const selectedCategories = categoryFilters.filter(function (el) { return el.checked; }).map(function (el) { return el.value; });
				const selectedAvailability = availabilityFilters.filter(function (el) { return el.checked; }).map(function (el) { return el.value; });
				const selectedUnits = unitFilters.filter(function (el) { return el.checked; }).map(function (el) { return el.value; });

				let visibleCount = 0;
				items.forEach(function (item) {
					const name = (item.dataset.name || '').toLowerCase();
					const desc = (item.dataset.description || '').toLowerCase();
					const price = parseFloat(item.dataset.price || '0');
					const category = item.dataset.category || '';
					const stockStatus = item.dataset.stockstatus || '';
					const unit = item.dataset.unit || '';
					const matchesName = q === '' || name.indexOf(q) !== -1 || desc.indexOf(q) !== -1;
					const matchesPrice = price >= min && price <= max;
					const matchesCategory = selectedCategories.length === 0 || selectedCategories.indexOf(category) !== -1;
					const matchesAvailability = selectedAvailability.length === 0 || selectedAvailability.indexOf(stockStatus) !== -1;
					const matchesUnit = selectedUnits.length === 0 || selectedUnits.indexOf(unit) !== -1;
					const show = matchesName && matchesPrice && matchesCategory && matchesAvailability && matchesUnit;

					item.style.display = show ? '' : 'none';
					if (show) visibleCount++;
				});

				sortItems();
				countText.textContent = 'Showing ' + visibleCount + ' of ' + total;
				noResultsBox.style.display = visibleCount === 0 ? 'block' : 'none';
			}

			[searchInput, minPriceInput, maxPriceInput].forEach(function (el) { el.addEventListener('input', applyFilters); });
			sortSelect.addEventListener('change', applyFilters);
			[categoryFilters, availabilityFilters, unitFilters].forEach(function (group) { group.forEach(function (el) { el.addEventListener('change', applyFilters); }); });
			resetBtn.addEventListener('click', function () {
				searchInput.value = '';
				minPriceInput.value = '';
				maxPriceInput.value = '';
				sortSelect.value = 'default';
				[categoryFilters, availabilityFilters, unitFilters].forEach(function (group) { group.forEach(function (el) { el.checked = false; }); });
				applyFilters();
			});

			applyFilters();
		});
	</script>
</body>

</html>
