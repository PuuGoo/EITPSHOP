<div class="sma-right">
  <div class="sma-r-top">
    <div class="sma-rt-left">
      <div class="sma-rt-l-title eh6">Profile</div>
      <div class="sma-rt-l-content eh" style="color: var(--grey-01)">
        User Profile
      </div>
    </div>
  </div>
  <div class="sma-r-bot">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="sma-rb-heading"></div>
      <div class="sma-rb-start">
        <div class="sma-rb-s-left">
          <div class="sma-rb-sl-image">
            <img src="assets/images/<?php echo $_SESSION['HinhAnh']; ?>" width="200" height="200" alt="">
          </div>
          <div class="sma-rb-sl-text">
            <div class="sma-rb-sl-t-title eh6">PuuGoo</div>
            <div class="sma-rb-sl-t-content eh" style="color: var(--grey-01)">Update Your Photo and Personal Details</div>
          </div>
        </div>
        <div class="sma-rb-s-right">
          <div class="btn-main">
            <button class="btn-general" type="submit" name="profile_user">Save</button>
            <a href="?mod=page&act=admin">
              <button class="btn-ghost" type="button">Cancel</button>
            </a>
          </div>
        </div>
      </div>
      <div class="sma-rb-item">
        <label for="">First Name</label>
        <input type="text" name="user_fname" value="<?php echo $show_user['FirstName']; ?>" />
      </div>
      <div class="sma-rb-item">
        <label for="">Last Name</label>
        <input type="text" name="user_lname" value="<?php echo $show_user['LastName']; ?>" />
      </div>
      <div class="sma-rb-item">
        <label for="">Email</label>
        <input type="text" name="user_email" value="<?php echo $show_user['Email']; ?>" />
      </div>
      <div class="sma-rb-item">
        <label for="">Phone</label>
        <input type="text" name="user_phone" value="<?php echo $show_user['MobileNumber']; ?>" />
      </div>
      <div class="sma-rb-item">
        <label for="">User Name</label>
        <input type="text" name="user_name" value="<?php echo $show_user['UserName']; ?>" />
      </div>
      <div class="sma-rb-item">
        <label for="">Password</label>
        <input type="password" name="user_password" value="<?php echo $show_user['MatKhau']; ?>" />
      </div>
      <div class="sma-r-end">
        <div class="btn-main">
          <button class="btn-general" type="submit" name="profile_user">Submit</button>
          <a href="?mod=page&act=admin">
            <button class="btn-ghost" type="button" name="cancel">Cancel</button>
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</section>