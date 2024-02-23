
<div class="sma-right">
            <div class="sma-r-top">
              <div class="sma-rt-left">
                <div class="sma-rt-l-title eh6">Add User</div>
                <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
                  Create new User
                </div>
              </div>
            </div>
            <div class="sma-r-bot">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="sma-rb-item">
                  <label for="">User Name</label>
                  <input type="text" name="user_name"/>
                </div>
                <div class="sma-rb-item">
                  <label for="">Mobile</label>
                  <input type="text" name="user_mobile"/>
                </div>
                <div class="sma-rb-item">
                  <label for="">Email</label>
                  <input type="text" name="user_email"/>
                </div>
                <div class="sma-rb-item">
                    <label for="">Role</label>
                    <select name="user_role" id="" class="form-select">
                        <option value="2" selected>Select</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                </div>
                <div class="sma-rb-item">
                  <label for="">Password</label>
                  <input type="password" name="user_password"/>
                </div>
                <div class="sma-rb-item">
                    <label for="">Status</label>
                    <select name="user_status" id="" class="form-select">
                        <option value="2" selected>Select</option>
                        <option value="1">Active</option>
                        <option value="0">Restricted</option>
                    </select>
                </div>
                <div class="sma-rb-item">
                  <label for="insert-img">
                    <i class="uil uil-cloud-upload"></i>
                    <div class="sma-rb-i-title">
                      Drag and drop a file to upload
                    </div>
                  </label>
                  <input type="file" id="insert-img" name="user_image"/>
                </div>
              <div class="sma-r-end">
                <div class="btn-main">
                  <button class="btn-general" type="submit" name="add_user">Submit</button>
                  <button class="btn-ghost" type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>