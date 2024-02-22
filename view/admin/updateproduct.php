<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title eh6">Product Add</div>
            <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                Create new product
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="sma-rb-item">
                <label for="">Product Name</label>
                <input type="text" name="prod_name" value="<?= $show_prod_by_id['TenSanPham'] ?>" />
            </div>
            <div class="sma-rb-item">
                <label for="">Category</label>
                <select name="prod_catelogy" id="" class="form-select">
                    <?php foreach ($show_cats as $cat) : ?>
                        <?php if ($cat['id'] === $prod_catelogy_id) : ?>
                            <option value="<?= $cat['id'] ?>" selected><?= $cat['TenDanhMuc'] ?></option>
                        <?php else : ?>
                            <option value="<?= $cat['id'] ?>"><?= $cat['TenDanhMuc'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">Sub Category</label>
                <select name="prod_sub_catelogy" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['SubCategory'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['SubCategory'] !== "Choose Sub Category") {
                                echo $show_prod_by_id['SubCategory'];
                            } else {
                                echo "Choose Sub Category";
                            }
                        
                        ?>
                    </option>                    
                    <option value="Laptop">Laptop</option>
                    <option value="Laptop">Mobile</option>
                    <option value="Laptop">Tablet</option>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">Brand</label>
                <select name="prod_brand" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['Brand'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['Brand'] !== "Choose Brand") {
                                echo $show_prod_by_id['Brand'];
                            } else {
                                echo "Choose Brand";
                            }
                        
                        ?>
                    </option>                      
                    <option value="Samsung">Samsung</option>
                    <option value="Samsung">Apple</option>
                    <option value="Samsung">LG</option>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">Unit</label>
                <select name="prod_unit" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['Unit'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['Unit'] !== "Choose Unit") {
                                echo $show_prod_by_id['Unit'];
                            } else {
                                echo "Choose Unit";
                            }
                        
                        ?>
                    </option>
                    <option value="PCS">PCS</option>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">SKU</label>
                <input type="text" name="prod_sku" value="<?= $show_prod_by_id['SKU'] ?>" />
            </div>
            <div class=" sma-rb-item">
                <label for="">Minimun Qty</label>
                <input type="text" name="prod_minQty" value="<?= $show_prod_by_id['MinQty'] ?>" />
            </div>
            <div class="sma-rb-item">
                <label for="">Quantity</label>
                <input type="text" name="prod_qty" value="<?= $show_prod_by_id['Qty'] ?>" />
            </div>
            <div class="sma-rb-item form-floating">
                <label for="floatingTextarea2" style="position: relative; padding: 0">Description</label>
                <textarea name="prod_description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $show_prod_by_id['MoTa'] ?></textarea>
            </div>
            <div class="sma-rb-item">
                <label for="">Tax</label>
                <select name="prod_tax" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['Tax'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['Unit'] !== "Choose Tax") {
                                echo $show_prod_by_id['Tax'] . "%";
                            } else {
                                echo "Choose Tax";
                            }
                        
                        ?>
                    </option>
                    <option value="10">10%</option>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">Discount Type</label>
                <select name="prod_discount_type" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['LoaiGiamGia'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['LoaiGiamGia'] !== "Choose Percentage") {
                                echo $show_prod_by_id['LoaiGiamGia'] . "%";
                            } else {
                                echo "Choose Percentage";
                            }
                        
                        ?>
                    </option>
                    <option value="10">10%</option>
                </select>
            </div>
            <div class="sma-rb-item">
                <label for="">Price</label>
                <input type="text" name="prod_price" value="<?= $show_prod_by_id['Gia'] ?>" />
            </div>
            <div class="sma-rb-item">
                <label for="">Status</label>
                <select name="prod_status" id="" class="form-select">
                    <option value="<?= $show_prod_by_id['Status'] ?>" selected>
                        <?php 
                        
                            if($show_prod_by_id['Status'] !== "Choose Status") {
                                echo $show_prod_by_id['Status'];
                            } else {
                                echo "Choose Status";
                            }
                        
                        ?>
                    </option>
                    <option value="Closed">Closed</option>
                    <option value="Opened">Opened</option>
                </select>
            </div>
            <div class="sma-rb-item">
            <img src="assets/images/<?= $show_prod_by_id['HinhAnh'] ?>" width="240" height="240" alt="" style="margin-bottom: 16px;">
                <label for="insert-img">
                    <i class="uil uil-cloud-upload"></i>
                    <div class="sma-rb-i-title">
                        Drag and drop a file to upload
                    </div>
                </label>
                <input type="file" id="insert-img" name="prod_image" />
            </div>
            <div class="sma-r-end">
                <div class="btn-main">
                    <button class="btn-general" type="submit" name="update_product">Submit</button>
                    <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>