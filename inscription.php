<?php
session_start();
include('fonctions.php');
require("templates/header2.php"); ?>

        <main id="mainConIns">
            <section>
			    <div id="conInsSection">
				    <h1 id="h1CoIn">Inscription</h1>
				    <form action="" method="post" ><br />
					    <div>
						    Login :<br /><br> <input type="text" name="login" required><br /><br>
						    Mot de Passe :<br><br /><input type="password" name="password" required><br /><br>
						    Confirmation Mot de Passe : <br><br /><input type="password" name="confirmpassword" required><br /> <br>

						<input type="submit" name="valider" value="Inscription">
				        </div>
				    </form>
				<?php
				inscription();
				?>
			</div>
		</section>
        </main>
		<?php require("templates/footer.phtml")  ?>