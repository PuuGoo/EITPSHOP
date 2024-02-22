
<div class="sma-right">
            <div class="sma-r-top">
              <div class="sma-rt-left">
                <div class="sma-rt-l-title eh6">Product Update Sub Category</div>
                <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                  Update old product sub category
                </div>
              </div>
            </div>
            <div class="sma-r-bot">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="sma-rb-item">
                  <label for="">Category</label>
                  <select name="subcat_catelogy" id="" class="form-select">
                    <?php foreach ($show_cats as $cat) : ?>
                        <?php if ($cat['id'] === $show_subCat_id['MaDanhMuc']) : ?>
                            <option value="<?= $cat['id'] ?>" selected><?= $cat['TenDanhMuc'] ?></option>
                        <?php else : ?>
                            <option value="<?= $cat['id'] ?>"><?= $cat['TenDanhMuc'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="sma-rb-item">
                  <label for="">Sub Category Name</label>
                  <input type="text" name="subcat_name" value="<?= $show_subCat_id['TenDanhMuc'] ?>"/>
                </div>

                <div class="sma-rb-item">
                  <label for="">Sub Category Code</label>
                  <input type="text" name="subcat_code" value="<?= $show_subCat_id['SubCategoryCode'] ?>"/>
                </div>
                <div class="sma-rb-item form-floating">
                  <label
                    for="floatingTextarea2"
                    style="position: relative; padding: 0"
                    >Description</label
                  >
                  <textarea
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea2"
                    style="height: 100px"
                    name="subcat_description"
                  ><?= $show_subCat_id['Description'] ?></textarea>
                </div>
              <div class="sma-r-end">
                <div class="btn-main">
                  <button class="btn-general" type="submit" name="update_subCategory">Submit</button>
                  <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>