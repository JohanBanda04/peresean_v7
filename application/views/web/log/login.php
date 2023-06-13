<section dir="ltr" id="home">
<div class="limiter" >
	<div class="container-login100" style="background-color: #a1d5ff">
		<div class="wrap-login100" style="padding:40px; background-color: #a1d5ff">
			<div class="login100-pic">
				<a style="color: black" class="" href="http://www.freepik.com"></a>
				<center><img style="height: 400px; " src="img/peresean-img.png" alt="IMG"></img></center>

			</div>
			<form class="login100-form validate-form" action="" method="post">
				<span class="login100-form-title">
					PERESEAN
				</span>
				<span class="login100-form-title" style="font-size: 17px; padding: 0px 0px 40px;">
					PENGUNGGAHAN RAPERDA SEPUTAR NTB
				</span>
				<?php
					echo $this->session->flashdata('msg');
				?>
				<div class="wrap-input100 validate-input" data-validate = "Username is required">
					<input class="input100" type="text" placeholder="Username" name="username" autofocus>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" placeholder="Password" name="password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>


                <div class="form-group m-b-1" >
                    <div class="g-recaptcha" data-sitekey="6LdJ0pAmAAAAAI7vU7S3seu7_Wt9AnJCINpeceU_"
                         style="width: 40px">

                    </div>
                </div>

                <div class="container-login100-form-btn m-t-0">
<!--                    <button type="submit" id="btnlogin" name="btnlogin" class="login100-form-btn">-->
<!--                        Login-->
<!--                    </button>-->
                    <input type="submit" id="btnlogin" name="btnlogin" class="login100-form-btn" value="Login" />
                </div>
			</form>
		</div>
	</div>
</div>
    <script type="text/javascript">

        $(document).on('click', '#btnlogin', function() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert("Please verify you are not a robot.");
                return false;
            }
        });
    </script>
</section >

