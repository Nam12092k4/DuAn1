<main class="container" style="margin:80px auto;">
<div class="breadcrumb-shop"><div class="container">
    <div class="breadcrumb-list  ">
      <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
          <meta itemprop="position" content="1">		
        </li>
        
        
        
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="https://eshop.wegocoffee.com/collections/cong-cu-pha-che-thu-cong" target="_self" itemprop="item">
            <span itemprop="name">Lịch sử đơn hàng </span>
          </a>
          <meta itemprop="position" content="2">    
        </li>
        
        
      </ol>
    </div>
  </div></div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;1,200&display=swap'); 
section.product-carts {
  width: 100%;
  margin: 1rem auto;
  padding-bottom: 10rem;
  background-color: white;
  padding:10px 30px;
  /* box-shadow: var(--shadow-primary); */
  border-radius: 4px;
}

section.product-carts .cart-list {
  margin: 1rem 0;
}
section.product-carts .cart-list .table-cart {
  width: 100%;
  padding: 0 1rem;
}
section.product-carts .cart-list .table-cart thead tr.title-table th {
  font-size: 17px;
  padding: 1rem 0;
  border-bottom: 1px solid #c8c8c8;
  font-family: 'Mulish', sans-serif;
}
section.product-carts .cart-list .table-cart tbody {
  line-height: 2;
  margin-top: 1rem;
}
section.product-carts .cart-list .table-cart tr {
  text-align: left;
  
}
section.product-carts .cart-list .table-cart tbody tr td.img-name {
  display: flex;
}
section.product-carts .cart-list .table-cart tbody tr td.img-name img {
  width: 70px;
  height: auto;
  border-radius: 4px;
}
section.product-carts .cart-list .table-cart tbody tr td.img-name a {
  text-decoration: none;
  color: #282828;
  font-weight: 500;
  margin-left: 10px;
}
section.product-carts .cart-list .table-cart tbody tr td {
  font-size: 15px;
  padding: 1rem 0;
  font-family: 'Mulish', sans-serif;
  
}
section.product-carts .cart-list .table-cart tbody tr td input.numCart {
  width: 50px;
}
.success {
  color:white;
  font-weight: 600;
}
.warning {
  color: #fed655;
  font-weight: 600;
}
.delete {
  color: red;
  font-weight: 600;
}
.letgo {
  color: rgb(74, 102, 226);
  font-weight: 600;
}
.success a {
  text-decoration: none;
  background-color: #32bfbe;
  padding: 2px 10px;
  border-radius: 3px;
  color: white;
}
.success a:hover {
  cursor: pointer;
  opacity: 0.9;
}
.btn-warning-lui {
  color: white;
  background-color: #32bfbe;
  padding: 5px 10px;
  border: 0;
  border-radius: 3px;
}
  </style>
    <section class="product-carts">
        <section class="cart-list">
            <table class="table-cart">
                <thead>
                    <tr class="title-table">
                        <th>Sản phẩm</th>
                        <th>Kích thước</th>
                        <th width="200px">Số lượng</th>
                        <th width="200px">Tổng giá</th>
                        <!-- <th width="200px">Trạng thái</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($history = mysqli_fetch_assoc($data['showHistoryDetails'])) {
                    ?>
                        <tr>
                            <td class="img-name"><img src="<?=BASE_URL?>/<?=$history['thumbnail']?>" alt=""><a href="<?=BASE_URL?>/home/product/<?=$history['product_id']?>"><?=$history['product_name']?></a></td>
                            <td><span class="size-cart"><?=$history['size']?></span></td>
                            <td><?=$history['num']?></td>
                            <td><?=number_format($history['num'] * $history['price'], 0, ",", ".")?> VNĐ</td>
                            <!-- <td class="success">Đã nhận hàng</td> -->
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
                    <?php
                    $previous = "javascript:history.go(-1)";
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        $previous = $_SERVER['HTTP_REFERER'];
                    }
                    ?>
                    <a href="<?= $previous ?>" class="btn-warning-lui">Quay lại</a>
      
    </section>

</main>