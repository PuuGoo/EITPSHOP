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
        <input type="text" name="prod_name" />
      </div>
      <div class="sma-rb-item">
        <label for="">Category</label>
        <select name="prod_catelogy" id="" class="form-select">
          <option value="" selected>Choose Category</option>
          <?php foreach($show_cats as $cat): ?>
          <option value="<?= $cat['id'] ?>"><?= $cat['TenDanhMuc'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">Sub Category</label>
        <select name="prod_sub_catelogy" id="" class="form-select">
          <option value="" selected>Choose Sub Category</option>
          <?php foreach($show_subcats as $subcat): ?>
          <option value="<?= $subcat['id'] ?>"><?= $subcat['TenDanhMuc'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">Brand</label>
        <select name="prod_brand" id="" class="form-select">
          <option value="" selected>Choose Brand</option>
          <?php foreach($show_brands as $brand): ?>
          <option value="<?= $brand['id'] ?>"><?= $brand['BrandName'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">Unit</label>
        <select name="prod_unit" id="" class="form-select">
          <option value="" selected>Choose Unit</option>
          <option value="PCS">PCS</option>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">SKU</label>
        <input type="text" name="prod_sku" />
      </div>
      <div class="sma-rb-item">
        <label for="">Minimun Qty</label>
        <input type="text" name="prod_minQty" />
      </div>
      <div class="sma-rb-item">
        <label for="">Quantity</label>
        <input type="text" name="prod_qty" />
      </div>
      <div class="sma-rb-item form-floating">
        <label for="floatingTextarea2" style="position: relative; padding: 0">Description</label>
        <textarea name="prod_description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      </div>
      <div class="sma-rb-item">
        <label for="">Tax</label>
        <select name="prod_tax" id="" class="form-select">
          <option value="" selected>Choose Tax</option>
          <option value="10">10%</option>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">Discount Type</label>
        <select name="prod_discount_type" id="" class="form-select">
          <option value="" selected>Percentage</option>
          <option value="10">10%</option>
        </select>
      </div>
      <div class="sma-rb-item">
        <label for="">Price</label>
        <input type="text" name="prod_price" />
      </div>
      <div class="sma-rb-item">
        <label for="">Status</label>
        <select name="prod_status" id="" class="form-select">
          <option value="Closed" selected>Closed</option>
          <option value="Opened">Opened</option>
        </select>
      </div>
      <div class="sma-rb-item">
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
          <button class="btn-general" type="submit" name="add_product">Submit</button>
          <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
        </div>
      </div>
    </form>

  </div>
</div>
</div>
</div>
</section>