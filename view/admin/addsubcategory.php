
<div class="sma-right">
            <div class="sma-r-top">
              <div class="sma-rt-left">
                <div class="sma-rt-l-title eh6">Product Add Sub Category</div>
                <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                  Create new product category
                </div>
              </div>
            </div>
            <div class="sma-r-bot">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="sma-rb-item">
                  <label for="">Category</label>
                  <select name="subcat_catelogy" id="" class="form-select">
                    <option value="" selected>Choose Category</option>
                    <?php foreach($show_cats as $cat): ?>
                    <option value="<?= $cat['id'] ?>"><?= $cat['TenDanhMuc'] ?></option>
                     <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="sma-rb-item">
                  <label for="">Sub Category Name</label>
                  <input type="text" name="subcat_name"/>
                </div>

                <div class="sma-rb-item">
                  <label for="">Sub Category Code</label>
                  <input type="text" name="subcat_code"/>
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
                  ></textarea>
                </div>
              <div class="sma-r-end">
                <div class="btn-main">
                  <button class="btn-general" type="submit" name="add_subCategory">Submit</button>
                  <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>