
          <div class="sma-right">
            <div class="sma-r-top">
              <div class="sma-rt-left">
                <div class="sma-rt-l-title eh6">Product Add Category</div>
                <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                  Create new product category
                </div>
              </div>
            </div>
            <div class="sma-r-bot">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="sma-rb-item">
                  <label for="">Category Name</label>
                  <input type="text" name="cat_name"/>
                </div>
                <div class="sma-rb-item">
                  <label for="">Category Code</label>
                  <input type="text" name="cat_code"/>
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
                    name="cat_description"
                  ></textarea>
                </div>
                <div class="sma-rb-item">
                  <label for="insert-img">
                    <i class="uil uil-cloud-upload"></i>
                    <div class="sma-rb-i-title">
                      Drag and drop a file to upload
                    </div>
                  </label>
                  <input type="file" id="insert-img" name="cat_image"/>
                </div>
              <div class="sma-r-end">
                <div class="btn-main">
                  <button class="btn-general" type="submit" name="add_category">Submit</button>
                  <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>