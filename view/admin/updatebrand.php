
<div class="sma-right">
            <div class="sma-r-top">
              <div class="sma-rt-left">
                <div class="sma-rt-l-title eh6">Update Brand</div>
                <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                  Update old Brand
                </div>
              </div>
            </div>
            <div class="sma-r-bot">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="sma-rb-item">
                  <label for="">Brand Name</label>
                  <input type="text" name="brand_name" value="<?= $show_brand['BrandName'] ?>"/>
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
                    name="brand_description"
                  ><?= $show_brand['BrandDescription'] ?></textarea>
                </div>
                <div class="sma-rb-item">
                <img src="assets/images/<?= $show_brand['BrandImage'] ?>" width="240" height="240" alt="" style="margin-bottom: 16px;">
                  <label for="insert-img">
                    <i class="uil uil-cloud-upload"></i>
                    <div class="sma-rb-i-title">
                      Drag and drop a file to upload
                    </div>
                  </label>
                  <input type="file" id="insert-img" name="brand_image"/>
                </div>
              <div class="sma-r-end">
                <div class="btn-main">
                  <button class="btn-general" type="submit" name="update_brand">Submit</button>
                  <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>