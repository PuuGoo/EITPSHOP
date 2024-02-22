<div class="sma-right">
  <div class="sma-r-top">
    <div class="sma-rt-left">
      <div class="sma-rt-l-title eh6">Product List</div>
      <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
        Manage your products
      </div>
    </div>
    <div class="sma-rt-right">
      <div class="btn-main">
        <a href="?mod=product&act=addproduct">
          <button class="btn-general eh">
            <i class="uil uil-plus"></i>
            Add New Product
          </button>
        </a>
      </div>
    </div>
  </div>
  <div class="sma-r-bot">
    <div class="sma-rb-top">
      <div class="sma-rb-t-top">
        <i class="uil uil-filter filter"></i>
        <div class="sma-rb-t-search">
          <form action="">
            <i class="uil uil-search"></i>
            <input type="search" placeholder="Search..." />
          </form>
        </div>
      </div>
      <div class="sma-rb-t-bot">
        <div class="sma-rb-tb-left">
          <div class="sma-rb-tb-l-item">
            Product
            <i class="uil uil-arrow-down"></i>
            <i class="uil uil-arrow-up"></i>
          </div>
          <div class="sma-rb-tb-l-item">
            Category
            <i class="uil uil-arrow-down"></i>
            <i class="uil uil-arrow-up"></i>
          </div>
          <div class="sma-rb-tb-l-item">
            Sub Category
            <i class="uil uil-arrow-down"></i>
            <i class="uil uil-arrow-up"></i>
          </div>
          <div class="sma-rb-tb-l-item">
            Brand
            <i class="uil uil-arrow-down"></i>
            <i class="uil uil-arrow-up"></i>
          </div>
          <div class="sma-rb-tb-l-item">
            Price
            <i class="uil uil-arrow-down"></i>
            <i class="uil uil-arrow-up"></i>
          </div>
        </div>
        <div class="sma-rb-tb-right">
          <i class="uil uil-search"></i>
        </div>
      </div>
    </div>
    <table class="table sma-rb-bot">
      <thead class="sma-rb-b-heading">
        <tr>
          <th>
            <div class="option">
              <input type="checkbox" name="" id="checkbox" />
              <label for="checkbox"></label>
            </div>
          </th>
          <th class="sma-rb-bh-title eh">Product Name</th>
          <th class="sma-rb-bh-title eh">SKU</th>
          <th class="sma-rb-bh-title eh">Category</th>
          <th class="sma-rb-bh-title eh">Brand</th>
          <th class="sma-rb-bh-title eh">Price</th>
          <th class="sma-rb-bh-title eh">Unit</th>
          <th class="sma-rb-bh-title eh">Qty</th>
          <th class="sma-rb-bh-title eh">Created</th>
          <th class="sma-rb-bh-title eh">Action</th>
        </tr>
      </thead>
      <?php foreach ($show_prods as $prod) : ?>
        <tbody class="sma-rb-b-ite ms">
          <tr class="sma-rb-b-item">
            <td>
              <div class="option">
                <input type="checkbox" name="" id="checkbox" />
                <label for="checkbox"></label>
              </div>
            </td>
            <td class="sma-rb-bi name">
              <div class="sma-rb-bi-img">
                <img src="assets/images/<?= $prod['HinhAnh'] ?>" width="40" height="40" alt="" />
              </div>
              <div class="sma-rb-bi-title"><?= $prod['TenSanPham'] ?></div>
            </td>
            <td class="sma-rb-bi sku"><div><?= $prod['SKU'] ?></div></td>
            <td class="sma-rb-bi category"><div><?= getCatelogyById($prod['MaDanhMuc'])['TenDanhMuc'] ?></div></td>
            <td class="sma-rb-bi brand"><div><?= $prod['Brand'] ?></div></td>
            <td class="sma-rb-bi price"><div><?= $prod['Gia'] ?></div></td>
            <td class="sma-rb-bi unit"><div><?= $prod['Unit'] ?></div></td>
            <td class="sma-rb-bi qty"><div><?= $prod['Qty'] ?></div></td>
            <td class="sma-rb-bi create"><div>Admin</div></td>
            <td class="sma-rb-bi action">
              <div>
              <div class="sma-rb-bi-show">
                <i class="uil uil-eye"></i>
              </div>
              <a href="?mod=product&act=updateproduct&prod_id=<?= $prod['id'] ?>">
                <div class="sma-rb-bi-edit">
                  <i class="uil uil-edit-alt"></i>
                </div>
              </a>
              <a href="?mod=product&act=deleteproduct&prod_id=<?= $prod['id'] ?>">
                <div class="sma-rb-bi-delete">
                  <i class="uil uil-trash-alt"></i>
                </div>
              </a>
              </div>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      <!-- <div class="sma-rb-b-end">
          <div class="sma-rb-be-left">
            <div class="sma-rb-be-l-title">Show per page:</div>
            <div class="sma-rb-be-l-dropdown">
              <form action="">
                <input type="number" value="10" />
                <i class="uil uil-arrow-down"></i>
              </form>
            </div>
          </div>
          <div class="sma-rb-be-right">
            <div class="sma-rb-be-r-title">1-10 of 11 items</div>
            <div class="sma-rb-be-r-page">1</div>
          </div>
        </div> -->
    </table>
  </div>
</div>
</div>
</div>
</section>