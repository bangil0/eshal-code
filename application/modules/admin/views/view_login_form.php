<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Silahkan Login</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="<?=  base_url()?>admin/auth/login">
                        <fieldset>
                            <div class="form-group">
                                <input name="identity" value="" id="identity" type="email" class="form-control" placeholder="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
									<input type="checkbox" name="remember" value="1"  id="remember" />Ingat Saya
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
							<a href="forgot_password">Forgot your password?</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>