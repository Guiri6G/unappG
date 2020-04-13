<script src="https://kit.fontawesome.com/dc82b1705e.js" crossorigin="anonymous"></script>
<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php">Herbalife</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="../index.php">Accueil</a></li>
								<li><a href="./photo.php">Photo avant/après</a></li>
								<li><a href="./pro.php">Opportunité professionnelle</a></li>
								<li><a href="./contact.php">Contactez-nous</a></li>
								<li><a href="" data-toggle="modal" data-target="#modalLoginForm" ><i class="fas fa-user"></i> Se connecter</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>


		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Connecte-toi !</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="./script/login.php">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          
         <i class="fas fa-envelope prefix grey-text" style="float: left; margin-top: 15px;"></i> <center><input type="email" id="defaultForm-email" style="width: 80%" class="form-control validate" name="email" placeholder="E-mail"></center>
        </div>
        <br>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text" style="float: left; margin-top: 15px;" ></i>
         <center> <input type="password" id="defaultForm-pass" style="width: 80%" class="form-control validate" name="password" placeholder="Mot de passe"> </center>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" type="submit"> Se connecter </button>
      </div>
  </form>
    </div>
  </div>
</div>

