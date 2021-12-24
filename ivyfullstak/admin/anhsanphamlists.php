<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/cartegory_class.php');

?>
<?php
$product = new product();

    $get_all_anh = $product -> get_all_anh();
    
?>

       <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>ID Sản phẩm</th>
                        <th>Mã Sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($get_all_anh){$i=0; while($result= $get_all_anh->fetch_assoc()){
                        $i++
                   
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['sanpham_anh_id'] ?></td>
                        <td> <?php echo $result['sanpham_id']  ?></td>
                        <td> <?php echo $result['sanpham_ma']  ?></td>
                        <td> <img style="width: 100px; height: 50px" src="uploads/<?php echo $result['sanpham_anh'] ?>" alt=""></td>
                        <td>
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
                                <a href="anhsanphamdeletes.php?sanpham_anh_id=<?php echo $result['sanpham_anh_id'] ?>" class="btn btn-danger">Xóa</a>
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