
<div class="container-dealhot"> 
    <div id="title-dealhot">
        <div><img src="http://localhost/OlaStore/MVC/public/images/icon_dealhot.png"></div>
        <div>Sản Phẩm Khuyến Mãi </div>
    </div>
    <div id="deal-hot">
    </div>
    <div id="con-dealhot">
    <div class="featured-product__content w-100">
                <div class="list-product row sm-gutter grid-5">
                     <?php
                    while ($row = mysqli_fetch_array($data['showSale'])) {
                    ?>
                       <div class="card-product">
                            <a href="<?= BASE_URL ?>/home/product/<?= $row['product_id'] ?>" class="">
                              
                                    <?php
                                    if ($row['price_sale'] > 0) {
                                    ?>
                                        <div class="tag-dis"> - <?= $row['price_sale'] ?>%</div>
                                    <?php
                                    }
                                    ?>
                                
                                <div class="product-img">
                                    <img src="<?= BASE_URL ?>/<?= $row['thumbnail'] ?>" alt="">
                                </div>
                                    <div class="title-product"><?= $row['product_name'] ?></div>
                                   
                                   <div class="info-price">
                                       <?php
                                       if ($row['price_sale'] > 0) {
                                           $price = $row['price']; // 22
                                           $sale = $row['price_sale']; // 50
                                           $price_sale = ($sale / 100) * $price;
                                           $priceTop = $price - $price_sale;
                                       ?>
                                            <div class="price-product"><?= number_format($priceTop, 0, ",", ".") ?> ₫</div>
                                           <div class="sale-price-product"><del><?= number_format($row['price'], 0, ",", ".") ?> ₫</del></div>
                                       <?php
                                       } else {
                                       ?>
                                           <div class="price-product"><?= number_format($row['price'], 0, ",", ".") ?> ₫</div>
                                       <?php
                                       }
                                       ?>
                                   </div>
                                   
                            </a>
                            <div class="btn-cart-product-card" >
                                       <div>THÊM VÀO GIỎ </div>
                                       <div class="icon-cart-add"><svg width="20px" height="20px" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<g transform="translate(0 512) scale(.1 -.1)">
													<path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z"></path>
													<path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z"></path>
												</g>
											</svg></div>
                                   </div>
                        </div>
        <?php
                    }
                    ?>
                    <div> 
                    <div> 
    </div>
    </div>
</div>
    </div>
 </div>
 </div>
   

 <section class="productDetail-related" style="margin-bottom:10vh;">
	<div class="container container-pd0">
		<div class="productRelated-title">
			<h2>Sản phẩm nổi bật</h2>
		</div>
		<div class="productRelated-content">
			<div class="listProduct-related listProduct-row owlCarousel-dfex owl-carousel owlCarousel-style owl-loaded owl-drag" id="owlProduct-related">
			
			<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1733px; padding-left: 20px; padding-right: 20px;">
      <?php
               while ($item = mysqli_fetch_array(($data['showProduct']))) {
                ?>
	
      <div class="owl-item active" style="width: 211.6px;"><div class="product-loop" data-id="1091394119">
	<div class="product-inner">
        
		<div class="proloop-image">
    <?php
         if ($item['price_sale'] > 0) {
        ?>
			<div class="pro-sale"><span>- <?= $item['price_sale'] ?>%</span></div>		
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
				<a class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
			</div>
			<a  href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="proloop-link quickview-product" ></a>
		</div>
		<div class="proloop-detail">
			
			<h3><a  href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
			<p class="proloop--price on-sale">
      <?php
      if ($item['price_sale'] > 0) {
      $price = $item['price']; // 22
      $sale = $item['price_sale']; // 50
      $price_sale = ($sale / 100) * $price;
      $priceTop = $price - $price_sale;
      ?>
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
						<button type="submit" name="addToCart"  class="btn-proloop-cart add-to-cart  btn-addcart-view " >
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
					
				</div>
			</div>	
		</div>
	</div>

</div></div>
<?php
                    }
                
                ?>
</div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
		</div>			
		
	</div>	
</section>
<section class="productDetail-related" style="margin-bottom:10vh;">
	<div class="container container-pd0">
		<div class="productRelated-title">
			<h2>Sản phẩm bán chạy</h2>
		</div>
		<div class="productRelated-content">
			<div class="listProduct-related listProduct-row owlCarousel-dfex owl-carousel owlCarousel-style owl-loaded owl-drag" id="owlProduct-related">
			
			<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1733px; padding-left: 20px; padding-right: 20px;">
      <?php
               while ($item = mysqli_fetch_array(($data['showProductSelling']))) {
                ?>
	
      <div class="owl-item active" style="width: 211.6px;"><div class="product-loop" data-id="1091394119">
	<div class="product-inner">
        
		<div class="proloop-image">
    <?php
         if ($item['price_sale'] > 0) {
        ?>
			<div class="pro-sale"><span>- <?= $item['price_sale'] ?>%</span></div>		
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
				<a class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
			</div>
			<a  href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="proloop-link quickview-product" ></a>
		</div>
		<div class="proloop-detail">
			
			<h3><a  href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
			<p class="proloop--price on-sale">
      <?php
      if ($item['price_sale'] > 0) {
      $price = $item['price']; // 22
      $sale = $item['price_sale']; // 50
      $price_sale = ($sale / 100) * $price;
      $priceTop = $price - $price_sale;
      ?>
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
						<button type="submit" name="addToCart"  class="btn-proloop-cart add-to-cart  btn-addcart-view " >
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
					
				</div>
			</div>	
		</div>
	</div>

</div></div>
<?php
                    }
                
                ?>
</div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
		</div>			
		
	</div>	
</section>
<!-- SCRIPT PRODUCT -->
<script src="//theme.hstatic.net/200000565469/1000915384/14/jquery.fancybox.min.js?v=328" type="text/javascript"></script>

<script src="//theme.hstatic.net/200000565469/1000915384/14/slick.min.js?v=328" type="text/javascript"></script>
<!-- SCRIPT THEME -->
<script src="//theme.hstatic.net/200000565469/1000915384/14/scripts.js?v=328" defer=""></script>
<script>
var formatMoney = '{{amount}}₫';
var template = "product";
var priceMin ='';

var locationHeader = false;

/* Fix app buyXgetY */
var cartItem = {
		"1091315605": 1,		"1105703151": 1};

var promotionApp = false,
		promotionApp_name = '';

var productReviewsApp = false;
var productReviewsProloop = false;

/* product set item */
var prodItem_desk = 5,
		prodItem_mobile = 2;
prodItem_desk = 6

prodItem_mobile = 2

</script>
<script>
	var currentId = 1041840085;
</script>

      