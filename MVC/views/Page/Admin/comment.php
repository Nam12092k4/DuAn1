<main  class="con_home_admin">
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
    
    <h5>Quản lí bình luận</h5>

</section>
    
    <section class="Product">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th style="width: 5px" scope="col"></th>
                </tr>
            </thead>
            <tbody id="tableSearch">
                <?php
                while ($row = mysqli_fetch_array($data['showCommentAd'])) {
                ?>
                    <tr>
                        <td class="capitalize"><?=$row['name']?></td>
                        <td><?=$row['product_name']?></td>
                        <td><?=$row['comment_content']?></td>
                        <td class="address_user_truncate"><?=$row['comment_date']?></td>
                        <td><button class="btn-xoa" onclick="deleteComment(<?= $row['comment_id'] ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/></svg></button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
</main>