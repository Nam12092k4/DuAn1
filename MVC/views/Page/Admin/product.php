      <main class="con_home_admin">
      <style>
  @import url('https://fonts.googleapis.com/css2?family=Goldman&display=swap');
  .col .col-4 .pb-4{
    border-radius: 20px;
  }
  .home_admin{
    display:flex;
    justify-content: center;
    gap:30px;
    padding-top: 30px;
  }
  .home_admin button{
    position: relative;
    width: 150px;
    height: 400px;
   background-color: #77797b;
   border: 0;
   border-radius: 20px;
   box-shadow: 3px 3px 7px 1px rgba(0,0,0,0.3);
  }
  .con_home_admin{
    width: 90%;
    padding: 10px 10px 30px 10px;
    margin: 0 auto;
    border-radius: 10px;
  }
  .text-dark{
    position: absolute;
    bottom: 20px;
    left: 40px;
    padding-top: 15px;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    background-color:white;
    font-size: 30px;
    text-align:center;
  }
  .text-uppercase{
    color:#ffc52f;
    font-family: 'Goldman', sans-serif;
  }
  .mepu{
    width: 100%;
    height: 50px;
    border-radius: 5px;
    background-color: #e9ecef;
    margin: 0 auto;
    text-align: center;
    padding-top: 10px;
  }
  #tableSearch{
    background-color: white;
    border-radius: 20px;
    border-top: 0px solid white;
    
  }
  #tableSearch tr{
    background-color: white;
    border-radius: 20px;
    border-top: 10px solid #f3f3f3;
    
  }
  .btn-xoa{
    padding: 6px 15px 1px 15px;
    border: 0;
    border-radius: 5px;
    background-color: red;
  }
</style>
<section class="mepu">
    
    <h5>Quản lí sản phẩm</h5>

</section>
        <section class="row display-flex justify-content-between ml-0 mr-0">
          <button class="btn btn-success mb-3" data-toggle="modal" data-target="#tabProduct" style="margin-top:10px;">
            <i class="fas fa-plus-circle"></i> Add
          </button>

          <!-- Load Tab -->
          <div class="modal fade" id="tabProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4>Thêm sản phẩm</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="<?= BASE_URL ?>/Admin/addProduct" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Danh mục</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <?php
                        if (isset($data['ShowCategory'])) {
                          while ($row = mysqli_fetch_array($data['ShowCategory'])) {
                        ?>
                            <option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
                        <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Thương hiệu</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="brand_id">
                        <?php
                        if (isset($data['ShowBrand'])) {
                          while ($row = mysqli_fetch_array($data['ShowBrand'])) {
                        ?>
                            <option value="<?= $row['brand_id'] ?>"><?= $row['name'] ?></option>
                        <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Tên sản phẩm</label>
                      <input type="text" name="name" required class="form-control" id="formGroupExampleInput" placeholder="...">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Giá theo loại sản phẩm</label>
                      <div class="form-group row">
                        <div class="input-group input-group-sm mb-3 col-4 pt-2">
                          <span class="input-group-text" id="inputGroup-sizing-sm" ><input type="text" name="n_sizeM" style="border:0;width:140px;"></span>
                          <input type="text" name="sizeM" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3 col-4 pt-2">
                          <span class="input-group-text" id="inputGroup-sizing-sm"><input type="text" name="n_sizeML" style="border:0;width:140px;"></span>
                          <input type="text" name="sizeML" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3 col-4 pt-2">
                          <span class="input-group-text" id="inputGroup-sizing-sm"><input type="text" name="n_sizeL" style="border:0;width:140px;"></span>
                          <input type="text" name="sizeL" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Giảm giá (%)</label>
                      <input type="text" name="priceSale" class="form-control" id="formGroupExampleInput" placeholder="...">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Ảnh</label>
                      <input type="file" required name="thumbnail" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Giới Thiệu Sản Phẩm</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>



        </section>
        <section class="Product">
          <table class="table">
            <thead>
              <tr>
                <!-- <th style="width: 10px" scope="col">STT</th> -->
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th style="width: 5px" scope="col"></th>
                <th style="width: 5px" scope="col"></th>
              </tr>
            </thead>
            <tbody id="tableSearch">
            <?php
            while ($row = mysqli_fetch_array(($data['ShowProduct']))) {
            ?>
                <tr class="sortbyProduct">
                    <td>
                        <img style="width: 70px" src="<?= BASE_URL ?>/<?= $row['thumbnail'] ?>" alt="" />
                    </td>
                    <td><?= $row['product_name'] ?></td>
                    <td class="hidden-price"><?= $row['price'] ?></td> <!-- Giá ẩn -->
                    <td class="gia"><?= number_format($row['price'], 0, ",", ".") ?> VNĐ</td>
                    <td class="percent"><?= $row['price_sale'] ?>%</td>
                    <td><?= date("d/m/Y", strtotime($row['import_date'])); ?></td>
                    <td><a href="<?= BASE_URL ?>/Admin/editProduct/<?= $row['product_id'] ?>" class="btn btn-warning">Edit</a></td>
                    <td><button class="btn-xoa" onclick="deleteProduct(<?= $row['product_id'] ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/></svg></button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
          </table>
        </section>
      </main>