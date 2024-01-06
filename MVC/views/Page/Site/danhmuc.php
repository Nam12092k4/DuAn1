
<main class="wrapperMain_content" style="margin-top:80px;">	
<div class="layout-collections">
	<div class="breadcrumb-shop"><div class="container">
	<div class="breadcrumb-list  ">
		<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
			
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="/collections" target="_self" itemprop="item">
					<span itemprop="name">Danh mục</span>
				</a>
				<meta itemprop="position" content="2">
			</li>
			
			
			<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<span itemprop="item" content="https://eshop.wegocoffee.com/collections/hat-ca-phe"><strong itemprop="name">Sản phẩm</strong></span>
				<meta itemprop="position" content="3">
			</li>
			
			
			
		</ol>
	</div>
</div></div>
	<div class="wrapper-mainCollection">
		<div class="collection-listproduct" id="collection-body">
			<div class="container container-pd-parent">	
				<div class="row row-mg-parent collection-wraper">
					<div class="col-lg-3 col-md-12 col-12 collection-filter "><div class="wrapper_layered_filter">
	<div class="layered_filter_parent ">
		<div class="layered_filter_container">
			<div class="layered_filter_title">
				<p class="title_filter">
					<span class="icon-filter"><svg viewBox="0 0 20 20"><path fill="none" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M12 9v8l-4-4V9L2 3h16z"></path></svg></span>

					Bộ lọc
				</p>
				<button class="close_filter">
					<svg viewBox="0 0 19 19" role="presentation"><path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path></svg>
				</button>
			</div>
			<div class="layered_filter_group layered_filter_mobileContent" id="layered_filter_mobile">
			
                <form method="GET" action="" id="filter" >
				<div class="filter_group" aria-expanded="false">
					<div class="filter_group_block">
						<div class="filter_group-subtitle">
							<span>Danh mục</span>
						</div>
						<div class="filter_group-content filter-brand">
							<ul class="checkbox-list">
                            <?php
                        if (isset($data['showMenu'])) {
                            while ($row = mysqli_fetch_array($data['showMenu'])) {
                        ?>
                        <a href="<?= BASE_URL ?>/home/danhmuc/<?= $row['category_id'] ?>" >
                                <li>
									<label for="data-brand-p1"><?= $row['category_name'] ?></label>   
								</li>
                                   
                                </a>
                        <?php
                            }
                        }
                        ?>
								
							</ul>
						</div>
					</div>
				</div>
                </form>
				
				
                <form method="GET" action="" id="filter" >
				<div class="filter_group" aria-expanded="false">
					<div class="filter_group_block">
						<div class="filter_group-subtitle">
							<span>Thương hiệu</span>
						</div>
						<div class="filter_group-content filter-brand">
							<ul class="checkbox-list">
                            <?php
                        if (isset($data['showBrand'])) {
                            while ($row = mysqli_fetch_array($data['showBrand'])) {
                        ?>
                        <a href="<?= BASE_URL ?>/home/brand/<?= $row['brand_id'] ?>" >
                                <li>
									<label for="data-brand-p1"><?= $row['name'] ?></label>   
								</li>
                                   
                                </a>
                        <?php
                            }
                        }
                        ?>
								
							</ul>
						</div>
					</div>
				</div>
                </form>

			</div>
			
		</div>
	</div>
</div></div>
					<div class="col-lg-9 col-md-12 col-12 collection-content">
						<div class="collection-heading">
							<div class="collection-heading__content">
								<div class="dFlex-row">
									<div class="heading-box">
                                    <?php
                if (isset($data['ListAllAdmin'])) {
                ?>
                    <h1 class="title"> Tất cả sản phẩm </h1>
                <?php
                }
                ?>
                <?php
                if (isset($_POST['search'])) {
                ?>
                    <h1 class="title"> <?= $_POST['search'] ?> </h1>
                <?php
                }
                ?>

                <?php
                if (isset($data['ListAllCt'])) {
                    $row = mysqli_fetch_assoc($data['ShowName']);
                ?>
                    <h1 class="title"><?= $row['category_name'] ?> </h1>
             
               <?php
                }
                ?>
 
										
										<div class="filter-box">
                                            							
											<span class="title-count"><b>
                                            <?php
                                            if (isset($data['showNum'])) {
                                                $item = mysqli_fetch_assoc($data['showNum']);
                                                echo $item['count(*)'];
                                            }
                                            ?>
                                            <?php
                                            if (isset($data['ListNumSearch'])) {
                                                $item = mysqli_fetch_assoc($data['ListNumSearch']);
                                                echo $item['count(*)'];
                                            }
                                            ?>
                                            </b> sản phẩm</span>
                                                                            <?php
                                            if (isset($data['ListNumSearch'])) {
                                                if ($item['count(*)'] == 0) {
                                            ?>
                                                    <div class="error-search">
                                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/a60759ad1dabe909c46a817ecbf71878.png" alt="">
                                                        <div class="title">Không tìm thấy kết quả nào</div>
                                                        <div>Hãy thử sử dụng các từ khóa chung chung hơn</div>
                                                    </div>
                                            <?php
                                                }
                                            }
            ?>
										
											
										</div>
									</div>
                                    <style>
                                        .collection-sortby-filter select{
                                            width: 500px;
                                            border: 0;
                                            font-size: 14px;
                                
                                        }
                                      
                                    </style>
									<div class="heading-sortbyfilter" style="margin-right:-330px;">
										<div class="collection-sortbyfilter-container">
											<div class="collection-sortby-filter">
												<select class="form-control col-4" id="mySelectProduct">
                                                <option>
                                                <div class="collection-sortby">
													<div class="layered_filter_title boxstyle-mb" >
														
                                                    <p class="title_filter">
															<span class="icon-filter"><i class="fa fa-sort-alpha-asc"></i></span>
															<span class="icon-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span>										
															Sắp xếp
														</p>
													</div>
												</div>
                                                
                                                </option>
                                                <option>Giá: Tăng dần</option>
                                                <option>Giá: Giảm dần</option>
                                                <option>Giảm cao dần</option>
                                                <option>Giảm thấp dần</option>
                                                <option>Dưới 1.000.000₫</option>
                                                <option>Từ 1.000.000₫ - 5.000.000₫</option>
                                                <option>Từ 5.000.000₫ - 10.000.000₫</option>
                                                <option>Từ 10.000.000₫ - 20.000.000₫</option>
                                                <option>Từ 20.000.000₫ - 30.000.000₫</option>
                                                <option>Trên 30.000.000₫</option>
                                            </select>
												
											</div>
										

										</div>
									</div>
								</div>
                                <script>
                                     $(document).ready(function () {
        $("#mySelectProduct").on("change", function () {
            var value = $(this).val();
            var order = $("#mySelectOrder").val();
            $(".product-loop").show();
        if (value == "Giá: Tăng dần") {
            $(".product-loop").sort(sortbyHighestPrice).appendTo("#locall");
        } else if (value == "Giá: Giảm dần") {
            $(".product-loop").sort(sortbyLowestPrice).appendTo("#locall");
        } else if (value == "Giảm cao dần") {
            $(".product-loop").sort(sortbyPercentGiam).appendTo("#locall");
        } else if (value == "Giảm thấp dần") {
            $(".product-loop").sort(sortbyPercentTang).appendTo("#locall");
        }else if (value == "Dưới 1.000.000₫") {
            $(".product-loop").hide().filter(sortbyBelow1000).show();
            $(".product-loop").sort(sortbyBelow1000).appendTo("#locall");
        }else if (value == "Từ 1.000.000₫ - 5.000.000₫") {
            $(".product-loop").hide().filter(sortbyBelow10005000).show();
            $(".product-loop").sort(sortbyBelow10005000).appendTo("#locall");
        }else if (value == "Từ 5.000.000₫ - 10.000.000₫") {
            $(".product-loop").hide().filter(sortbyBelow500010000).show();
            $(".product-loop").sort(sortbyBelow500010000).appendTo("#locall");
        }else if (value == "Từ 10.000.000₫ - 20.000.000₫") {
            $(".product-loop").hide().filter(sortbyBelow1000020000).show();
            $(".product-loop").sort(sortbyBelow1000020000).appendTo("#locall");
        }else if (value == "Từ 20.000.000₫ - 30.000.000₫") {
            $(".product-loop").hide().filter(sortbyBelow2000030000).show();
            $(".product-loop").sort(sortbyBelow2000030000).appendTo("#locall");
        } else if (value == "Trên 30.000.000₫") {
            $(".product-loop").hide().filter(sortbyAbove30000).show();
            $(".product-loop").sort(sortbyAbove30000).appendTo("#locall");
        }
    });

  
    // Hàm sắp xếp theo giá cao nhất
    function sortbyHighestPrice(a, b) {
        return parseFloat($(a).find(".price").text()) - parseFloat($(b).find(".price").text());
    }

    // Hàm sắp xếp theo giá thấp nhất
    function sortbyLowestPrice(a, b) {
        return parseFloat($(b).find(".price").text()) - parseFloat($(a).find(".price").text());
    }

     // Hàm sắp xếp theo giá cao nhất
     function sortbyPercentTang(a, b) {
        return parseFloat($(b).find(".percent").text()) - parseFloat($(a).find(".percent").text());
    }

    // Hàm sắp xếp theo % thấp nhất
    function sortbyPercentGiam(a, b) {
        return parseFloat($(a).find(".percent").text()) - parseFloat($(b).find(".percent").text());
    }
    
   
        function sortbyBelow1000() {
            return parseFloat($(this).find(".hidden-price").text()) < 1000000;
        }
        function sortbyBelow10005000() {
            var hiddenPrice = parseFloat($(this).find(".hidden-price").text());
            return hiddenPrice > 1000000 && hiddenPrice < 5000000;
        }
        function sortbyBelow500010000() {
            var hiddenPrice = parseFloat($(this).find(".hidden-price").text());
            return hiddenPrice > 5000000 && hiddenPrice < 10000000;
        }
        function sortbyBelow1000020000() {
            var hiddenPrice = parseFloat($(this).find(".hidden-price").text());
            return hiddenPrice > 10000000 && hiddenPrice < 20000000;
        }
        function sortbyBelow2000030000() {
            var hiddenPrice = parseFloat($(this).find(".hidden-price").text());
            return hiddenPrice > 20000000 && hiddenPrice < 30000000;
        }
        function sortbyAbove30000() {
            return parseFloat($(this).find(".hidden-price").text()) >= 30000000;
        }
});



</script>
								<div class="collection-filter-tags">
									<div class="layered_filter_tags">
										<div class="filter_tags"></div>
										<div class="filter_tags"></div>
										
										<div class="filter_tags">			
											Nhà cung cấp: <b></b>		
											<span class="filter_tags_remove">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
													<path fill="#333" d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z"></path>
												</svg>
											</span>
										</div>
										
											
										<div class="filter_tags">Lọc giá: <b></b>
											<span class="filter_tags_remove">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
													<path fill="#333" d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z"></path>
												</svg>
											</span>
										</div>
											
											
											
										<div class="filter_tags filter_tags_remove_all"><span>Xóa hết </span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="wraplist-collection">
							<div class="row listProduct-row listProduct-filter"  id="locall">			
                   
                    <?php
                    if (isset($data['ListAllAdmin'])) {
                        while ($item = mysqli_fetch_array($data['ListAllAdmin'])) {
                    ?>
                    <div class="col-lg-2 col-md-6 col-6 product-loop" >
                    <div class="product-inner">
                   
                        <div class="proloop-image">
                        <?php
                            if ($item['price_sale'] > 0) {
                            ?>
                             
                            <div class="pro-sale"><span >- <?= $item['price_sale'] ?>%</span></div>		
                            <?php
                            }
                            ?>
                           
                            <div class="product--image">		
                            <div class="lazy-img first-image">
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>		
                            </div>					
                            <div class="lazy-img second-image hovered-img d-none d-lg-block">	
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>
                            </div>
                            
                            </div>
                            <div class="quickview-product">
                            <a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a class="proloop-link quickview-product" ></a>
                        </div>
                        <div class="proloop-detail">
                        
                            
                            <h3><a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
                            <p class="proloop--price on-sale">
                            <?php
                            if ($item['price_sale'] > 0) {
                            $price = $item['price']; // 22
                            $sale = $item['price_sale']; // 50
                            $price_sale = ($sale / 100) * $price;
                            $priceTop = $price - $price_sale;
                            ?>
                             <div class="percent" hidden><?= $item['price_sale'] ?></div>
                             <div class="hidden-price" hidden><?= $priceTop ?></div>
                             <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>

<span class="price-del"><div class="info-sale-price"><?= number_format($item['price'], 0, ",", ".") ?> ₫</div> </span>

      <?php

        } else {
           ?>
           <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>
                                <?php
                                                        }
                                                        ?>
                            </p>
                    
                            <div class="proloop-actions" >
                            <div class="proloop-actions__inner">
                                <div class="actions-primary">
                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1091394119')">
                                    <span class="btnadd">  Thêm vào giỏ </span>
                                    <span class="btnico" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </button>
                    
                                </div>
                                <div class="actions-boxqty d-flex">
                                <div class="actions-wrapqty d-flex">
                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect></svg>
                                    </button>
                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect></svg>	
                                    </button>
                                </div>
                                <div class="actions-icon">
                                    <span class="btnico" onclick="HRT.All.addCartProdItem('1091394119')" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>	
                        </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    if (isset($data['ListAllCt'])) {
                        while ($item = mysqli_fetch_array($data['ListAllCt'])) {
                    ?>
                    <div class="col-lg-2 col-md-6 col-6 product-loop" >
                    <div class="product-inner">
                   
                        <div class="proloop-image">
                        <?php
                            if ($item['price_sale'] > 0) {
                            ?>
                             
                            <div class="pro-sale"><span >- <?= $item['price_sale'] ?>%</span></div>		
                            <?php
                            }
                            ?>
                           
                            <div class="product--image">		
                            <div class="lazy-img first-image">
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>		
                            </div>					
                            <div class="lazy-img second-image hovered-img d-none d-lg-block">	
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>
                            </div>
                            
                            </div>
                            <div class="quickview-product">
                            <a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a class="proloop-link quickview-product" ></a>
                        </div>
                        <div class="proloop-detail">
                        
                            
                            <h3><a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
                            <p class="proloop--price on-sale">
                            <?php
                            if ($item['price_sale'] > 0) {
                            $price = $item['price']; // 22
                            $sale = $item['price_sale']; // 50
                            $price_sale = ($sale / 100) * $price;
                            $priceTop = $price - $price_sale;
                            ?>
                             <div class="percent" hidden><?= $item['price_sale'] ?></div>
                             <div class="hidden-price" hidden><?= $priceTop ?></div>
                             <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>

<span class="price-del"><div class="info-sale-price"><?= number_format($item['price'], 0, ",", ".") ?> ₫</div> </span>

      <?php

        } else {
           ?>
           <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>
                                <?php
                                                        }
                                                        ?>
                            </p>
                    
                            <div class="proloop-actions" >
                            <div class="proloop-actions__inner">
                                <div class="actions-primary">
                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1091394119')">
                                    <span class="btnadd">  Thêm vào giỏ </span>
                                    <span class="btnico" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </button>
                    
                                </div>
                                <div class="actions-boxqty d-flex">
                                <div class="actions-wrapqty d-flex">
                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect></svg>
                                    </button>
                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect></svg>	
                                    </button>
                                </div>
                                <div class="actions-icon">
                                    <span class="btnico" onclick="HRT.All.addCartProdItem('1091394119')" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>	
                        </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    if (isset($data['ListSearch'])) {
                        while ($item = mysqli_fetch_array($data['ListSearch'])) {
                    ?>
                  <div class="col-lg-2 col-md-6 col-6 product-loop" >
                    <div class="product-inner">
                   
                        <div class="proloop-image">
                        <?php
                            if ($item['price_sale'] > 0) {
                            ?>
                             
                            <div class="pro-sale"><span >- <?= $item['price_sale'] ?>%</span></div>		
                            <?php
                            }
                            ?>
                           
                            <div class="product--image">		
                            <div class="lazy-img first-image">
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>		
                            </div>					
                            <div class="lazy-img second-image hovered-img d-none d-lg-block">	
                                <picture>
                                <img src="<?= BASE_URL ?>/<?= $item['thumbnail'] ?>" alt="">
                                </picture>
                            </div>
                            
                            </div>
                            <div class="quickview-product">
                            <a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a class="proloop-link quickview-product" ></a>
                        </div>
                        <div class="proloop-detail">
                        
                            
                            <h3><a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
                            <p class="proloop--price on-sale">
                            <?php
                            if ($item['price_sale'] > 0) {
                            $price = $item['price']; // 22
                            $sale = $item['price_sale']; // 50
                            $price_sale = ($sale / 100) * $price;
                            $priceTop = $price - $price_sale;
                            ?>
                             <div class="percent" hidden><?= $item['price_sale'] ?></div>
                             <div class="hidden-price" hidden><?= $priceTop ?></div>
                             <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>

<span class="price-del"><div class="info-sale-price"><?= number_format($item['price'], 0, ",", ".") ?> ₫</div> </span>

      <?php

        } else {
           ?>
           <span class="price"><?= number_format($priceTop, 0, ",", ".") ?> ₫</span>
                                <?php
                                                        }
                                                        ?>
                            </p>
                    
                            <div class="proloop-actions" >
                            <div class="proloop-actions__inner">
                                <div class="actions-primary">
                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1091394119')">
                                    <span class="btnadd">  Thêm vào giỏ </span>
                                    <span class="btnico" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </button>
                    
                                </div>
                                <div class="actions-boxqty d-flex">
                                <div class="actions-wrapqty d-flex">
                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect></svg>
                                    </button>
                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1091394119')">
                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect></svg>	
                                    </button>
                                </div>
                                <div class="actions-icon">
                                    <span class="btnico" onclick="HRT.All.addCartProdItem('1091394119')" title="Thêm vào giỏ">
                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 512) scale(.1 -.1)">
                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>	
                        </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
		
												
							</div>
								
							<div class="collection-loadmore text-center">

							</div>
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="text" class="d-none" id="coll-handle" value="(collectionid:product=1003264652)">
	</div>
</div>


		</main>














		