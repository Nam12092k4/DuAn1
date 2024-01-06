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
    
    <h5>Quản lí thương hiệu</h5>

</section>
        <section class="row display-flex justify-content-between ml-0 mr-0">
          <button class="btn btn-success mb-3" data-toggle="modal" data-target="#tabCategory" style="margin-top:10px;">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          <!-- Load Tab-->
          <div class="modal fade" id="tabCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4>Thêm thương hiệu</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= BASE_URL ?>/Admin/addBrand" method="POST">
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
                      <label for="formGroupExampleInput">Tên thương hiệu</label>
                      <input type="text" class="form-control" name="name" id="formGroupExampleInput" required placeholder="Tên danh mục..." />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Đóng
                    </button>
                    <!-- <input type="submit" class="btn btn-primary"></input> -->
                    <input type="submit" class="btn btn-primary" value="Lưu">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Load Tab-->

          
        </section>
        <section class="category">
          <table class="table">
            <thead >
            <tr >
                <th  scope="col"></th>
                <th style="width: 10px" scope="col"></th>
                <th style="width: 10px" scope="col"></th>
              </tr>
            </thead>
            <tbody id="tableSearch">
              <?php
              while ($row = mysqli_fetch_array($data['ShowBrand'])) {
              ?>
                <tr class="sortby">
                  <td><?= $row['name'] ?></td>
                  <td><a href="<?=BASE_URL?>/Admin/editBrand/<?=$row['brand_id']?>" class="btn btn-warning">Edit</a></td>
                  <td><button class="btn-xoa" onclick="deleteBrand(<?=$row['brand_id']?>)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/></svg></button></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </section>
      </main>

      <script>
        function deleteBrand(id) {
  var option = confirm("Bạn có chắc chắn muốn xoá thương hiệu này không?");
  if (!option) {
    return;
  }
  $.post(
    "./deleteBrand",
    {
      id: id,
      action: "delete",
    },
    function (data) {
      location.reload();
    }
  );
}
      </script>