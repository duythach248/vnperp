<div class="grid">
      <form action="" method="post" class="form login">	
		<?php echo validation_errors(); ?>	
		<h1><center>VINAPOOL COMPANY</center></h1>
        <div class="form__field">
          <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
          <input id="login__username" type="text" name="username" class="form__input" placeholder="Tên Đăng Nhập" value="<?php echo set_value('username', ''); ?>" autocomplete="on">
        </div>
        <div class="form__field">
          <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Mật Khẩu">
        </div>
        <div class="form__field">
          <input type="submit" name="submit" value="Đăng Nhập">
        </div>

      </form>

    </div>