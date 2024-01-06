

<main class="wrapperMain_content" style="margin-top:80px;">	
        
         <div class="layout-productDetail layout-pageProduct" style="margin:0px auto;">
  <?php
    $row = mysqli_fetch_assoc($data['showProductItem']);
    ?>
    <div class="breadcrumb-shop"><div class="container">
    
  
   <div class="breadcrumb-shop"><div class="container">
    <div class="breadcrumb-list  ">
      <ol class="breadcrumb breadcrumb-arrows"  >
        <li itemprop="itemListElement">
          <a href="/" target="_self" ><span itemprop="name">Trang chủ</span></a>
          <meta itemprop="position" content="1">		
        </li>
        
        
        
        <li itemprop="itemListElement" >
          <a href="">
            <span itemprop="name">Chi tiết sản phẩm</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        
        <li class="active">
          <span >
            <strong itemprop="name"><a href=""><?= $row['product_name'] ?></a></strong>
          </span>
          <meta itemprop="position" content="3">
        </li>
        
      </ol>
    </div>
  </div></div>
  </div></div>
    <section class="productDetail-information productDetail_style__03">
    
    <div class="container container-pd0">
        <div class="productDetail--main">
        <div class="productDetail--gallery">
            <div class="stickyProduct-gallery">
              <div class="product-container-gallery">
                <div class="wrapbox-gallery">
                          <a class="product-gallery__item" >	
                            <img src="<?= BASE_URL ?>/<?= $row['thumbnail'] ?>" alt="" style="width:100%;">
                          </a>					
                      <div class="product-percent"><span class="pro-sale">- <?= $row['price_sale'] ?> %<br> OFF </span></div>
            
                </div>
              </div>
              <div class="wrapbox-detail">
                <div class="product-toshare">
                  <span>Chia sẻ: </span>
                  <a href="//www.facebook.com/sharer/sharer.php?u=<?= BASE_URL ?>/home/product/<?= $row['product_id'] ?>" target="_blank" class="share-facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="https://m.me/108520260558644" target="_blank" rel="noreferrer" aria-label="messenger" class="share-messenger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28">
                      <g fill="none" fill-rule="evenodd">
                        <g>
                          <g>
                            <g>
                              <g>
                                <g>
                                  <g transform="translate(-293.000000, -708.000000) translate(180.000000, 144.000000) translate(16.000000, 16.000000) translate(0.000000, 548.000000) translate(61.000000, 0.000000) translate(36.000000, 0.000000)">
                                    <circle cx="14" cy="14" r="14" fill="#0084FF"></circle>
                                    <path fill="#FFF" d="M14.848 15.928l-1.771-1.9-3.457 1.9 3.802-4.061 1.815 1.9 3.414-1.9-3.803 4.061zM14.157 7.2c-3.842 0-6.957 2.902-6.957 6.481 0 2.04 1.012 3.86 2.593 5.048V21.2l2.368-1.308c.632.176 1.302.271 1.996.271 3.842 0 6.957-2.902 6.957-6.482S17.999 7.2 14.157 7.2z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </a>
                  <a href="" >
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="" class="share-pinterest">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                  <a class="share-link" onclick="HRT.Product.copyLinkProduct()">
                    <i class="fa fa-link" aria-hidden="true"></i>
                    <span class="ico-tooltip d-none">Đã sao chép</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="productDetailjs productDetail--content" id="detail-product">
            <div class="wrapbox-detail">
            <form action="<?= BASE_URL ?>/Home/AddToCart" method="POST">
              <div class="product-heading">
                <h1><?= $row['product_name'] ?></h1>
                
                <span class="pro-soldold">Tình trạng:
                  
                  <strong>Còn hàng</strong>
                  
                </span>
                <?php
                    $brand = mysqli_fetch_assoc($data['showBrandId'])
                ?>
                <span class="pro-vendor">Thương hiệu: <strong><a title="Show vendor" href="">
                <?=$brand['name']?>
              </a></strong></span>
             
              </div>
              <div class="product-price" id="price-preview">
                <span class="pro-title" style="font-size:15px;">
                <?php
            while ($item = mysqli_fetch_array(($data['showPrice']))) {
            ?>
             <p class="new-price price-bg <?= $item['size'] ?>" hidden name="<?= $item['price'] ?>" style="font-size: 3rem;"><?= number_format($item['price'], 0, ",", ",") ?> VNĐ</p>
            <?php
            }
            ?>
                           Giá: </span>
                <span class="pro-price" id="priceSize" name="<?= $row['size'] ?>"><?= number_format($row['price'], 0, ',', '.') ?> VNĐ</span>
                </div>                                                         
                  <div class="product-price" id="price-preview"><span class="pro-title" style="font-size:15px;">
                Kích thước: </span><span>  <div class="purchase-info">
            <span class="giapos"></span>
            <?php
            while ($size = mysqli_fetch_array(($data['showSizeOption']))) {
            ?>
            <input class="sizes" hidden checked name="size" type="radio" value="<?= $size['size'] ?>" id="<?= $size['size'] ?>">
            <label for="<?= $size['size'] ?>"><?= $size['size'] ?></label>
            <?php
            }
            ?>
            
          </div></span>
                </div>	
              <div class="product-actions">
                <div class="select-actions d-none d-lg-block clearfix">
                  <div class="quantity-area">
                    <div class="quantity-title">Số lượng:</div>
                    <button type="button" class="qty-btn">
                    <span id="minus">
            <svg focusable="false" class="icon icon--minus " viewBox="0 0 10 2" role="presentation">
                        <path d="M10 0v2H0V0z"></path>
                      </svg>
            </span>
                    </button>
                    <input type="number" name="num" min="1" value="1" id="input" class="quantity-input">
              <button type="button" class="qty-btn">
                    <span id="plus">
            <svg focusable="false" class="icon icon--plus " viewBox="0 0 10 10" role="presentation">
                        <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                      </svg>
          </span>
                    </button>
                    <div class="purchase-info">
           
            
          </div>
          <input type="number" hidden name="id" value="<?= $row['product_id'] ?>">
          <input type="text" hidden id="pricePost" name="" value="<?= $row['price'] ?>">
          <input type="text" hidden id="pricePost2" name="price" value="<?= $row['price'] ?>">
          <input type="text" hidden name="thumbnail" value="<?= $row['thumbnail'] ?>">
          <input type="text" hidden name="name" value="<?= $row['product_name'] ?>">
  
        
                  </div>
                  <div class="addcart-area">						
                    <button type="submit" name="addToCart" id="btn1" class="button dark btn-buynow btnred addtocart-modal"><span>Thêm vào giỏ</span></button>
                  </div>	
                </div>
              </div>
  
              <div class="product-deliverly mb-0" style="padding:50px 0px">	
                <div class="deliverly-inner">
                  <div class="row m-0 infoList-deliverly">
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_1_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_1_ico.png?v=328" alt="Cam kết 100% chính hãng">
                      </span>
                      Cam kết 100% chính hãng
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_2_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_2_ico.png?v=328" alt="Miễn phí giao hàng">
                      </span>
                      Miễn phí giao hàng
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_3_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_3_ico.png?v=328" alt="Hỗ trợ 24/7">
                      </span>
                      Hỗ trợ 24/7
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_4_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_4_ico.png?v=328" alt="Hoàn tiền 100% nếu hàng giả">
                      </span>
                      Hoàn tiền 100% nếu hàng giả
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_5_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_5_ico.png?v=328" alt="Mở hộp kiểm tra nhận hàng">
                      </span>
                      Mở hộp kiểm tra nhận hàng
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 deliverly-item">
                      <span>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_6_ico.png?v=328" src="//theme.hstatic.net/200000565469/1000915384/14/product_deliverly_6_ico.png?v=328" alt="Đổi trả trong 7 ngày">
                      </span>
                      Đổi trả trong 7 ngày
                    </div>	
                  </div>
                </div>
              </div>
  </form>
            </div>		
            <div class="productDetail--navs mg-top">
              <div class="nav tab-title" id="nav-tab" role="tablist">
                <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-desc" role="tab">Mô tả sản phẩm</a>
              </div>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel">
                  <div class="product-description">							
                    <div class="description-content expandable-toggle opened">
  
                      <p><?= $row['description'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-comment" role="tabpanel">
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>
  
    </div>
    <script>
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

$("input[type=radio]").change(function () {
    var selectedSize = $(this).attr("value");
    var sizeValue = parseFloat($(`p.${selectedSize}`).attr("name"));

    if (!isNaN(sizeValue) && sizeValue > 0) {
        var formattedSizeValue = formatNumber(sizeValue);
        $("#priceSize").html(formattedSizeValue + " VNĐ");
        $("#pricePost").val(formattedSizeValue + " VNĐ");
        $("#pricePost2").val(sizeValue);
    }
});

</script>
    <style>
      .container-question{
        width:45%;
        background-color:white;
        padding:20px;
        line-height: 40px;;
      }
      .container-question li{
       border-bottom: 1px solid #e2e3e5;
       position: relative;
      }
      .container-question button{
        border: 0;
        border-radius: 50%;
        background-color: #e2e3e5;
        width: 20px;
        height:20px;
        align-items: center;
        position: absolute;
        top:10px;
        right:1px;
      }
      body{
        background-color: #f5f5f5;
      }

      .container-coment-thongso{
        width:70%;
        margin:20px auto;
        display:flex;
      }
      .con-coment{
      width:50%;
      margin:0px auto;
      }
      .con-coment form{
        width:90%;
        border-radius:7px;
        background-color:white;
        margin:0px auto;
        padding:30px;
      }
      .con-coment textarea{
        border:0px;
        padding:10px;
        width:100%;
        background-color:#f5f5f5;
      }
   
      .purchase-info input:checked + label {
    font-weight: 600;
    padding: 5px 8px;
    background: none;
    border-radius: 5px;
    border: 2px solid red;
    color: black;
}
.purchase-info {
 margin-left: -7px;
}
.purchase-info label {
  border: 1px solid grey;
  border-radius: 4px;
  padding: 3px 8px;
  min-width:50px;
  margin-right: 10px;
  font-size: 15px;
  color: grey;
}
.purchase-info .size {
  width: 37px;
  height: 20px;
  background: transparent;
  border-radius: 5px;
  font-weight: 500;
  cursor: pointer;
  margin-right: 10px;
}
.pop-acount li{
padding:7px 0px;
border-bottom: 1px solid #f5f5f5;
}
.pop-acount li:hover{
background-color:  #f5f5f5;
}
      </style>
   <div class="container-coment-thongso" >
    <div class="container-question">
      <ul>
        <li><h3><span>Một số câu hỏi thường gặp</span></h3></li>
        <li>Mua sản phẩm tại OlaStore có được đổi trả không?<button></button> </li>
        <li>Có trả góp không?<button></button></li>
        <li>Mua Laptop tại OlaStore được bảo hành như thế nào?<button></button></li>
      </ul>
    </div>
    <div class="con-coment">
          <h3>Bình luận</h3>
          <div id="loadComment">
            <!-- NÔI DUNG BÌNH LUẬN Ở ĐÂY -->
          </div>
          <form action="" method="post" id="formComment" >
            <textarea cols="131" name="content"  placeholder="Viết bình luận..."></textarea>
            <input type="text" hidden name="product_id" value="<?= $row['product_id'] ?>"> <br>
            <?php
            if (isset($_SESSION['userlogin'])) {
            ?>
              <input type="text" hidden name="user_id" value="<?= $_SESSION['userlogin'][3] ?>"> <br>
            <?php
            }
            ?>
            <button type="submitComment" style="padding:3px 5px;border:0px;background-color:#0b9bd2;color:white;border-radius:5px;">ĐĂNG</button>
          </form>
        </div>
       
        </div>
  <div class="layout-productDetail layout-pageProduct">
    <section class="productDetail-related">
    <div class="container container-pd0">
      <div class="productRelated-title">
        <h2>Sản phẩm liên quan</h2>
      </div>
      <div class="productRelated-content">
        <div class="listProduct-related listProduct-row owlCarousel-dfex owl-carousel owlCarousel-style owl-loaded owl-drag" id="owlProduct-related">
        
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1733px; padding-left: 20px; padding-right: 20px;">
        <?php
                 while ($item = mysqli_fetch_array(($data['ProductRelated']))) {
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
          <a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" class="icon-quickview" ><i class="fa fa-eye" aria-hidden="true"></i></a>
        </div>
        <a class="proloop-link quickview-product" ></a>
      </div>
      <div class="proloop-detail">
        <p class="proloop--vendor"><a >Apple</a></p>
        <h3><a href="<?= BASE_URL ?>/home/product/<?= $item['product_id'] ?>" ><?= $item['product_name'] ?></a></h3>
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
  
  </div></div>
  <?php
                      }
                  
                  ?>
  </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
      </div>			
      
    </div>	
  </section>
  </div>
      </main>
<style>
  #content-error {
    font-size: 1.6rem;
  }
</style>
