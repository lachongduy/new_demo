<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/cartegory_class.php');
$brand = new brand;
$show_brand = $brand -> show_brand()
?>
       <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_brand){$i=0; while($result= $show_brand->fetch_assoc()){
                        $i++
                   
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['loaisanpham_id'] ?></td>
                        <td> <?php echo $result['danhmuc_ten']  ?></td>
                        <td> <?php echo $result['loaisanpham_ten'] ?></td>
                        <td><a href="brandedit.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>" class="btn btn-primary">Sửa</a>
                        
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xóa
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-left">
                            Bạn có thật sự muốn xóa?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <a class="btn btn-danger" href="branddelete.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>">Xóa</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        </td>
                    </tr>
                    <?php
                     }}
                    ?>
                   
                </table>
               </div>        
        </div>
    </section>
    <?php include 'script.php' ?>
</body>
</html>  