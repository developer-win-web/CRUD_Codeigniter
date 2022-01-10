<section class="col-lg-12 box">
<form method="post" action="update" >
				<table class="table table-dark">
						<?php

						if (isset($records)){

						?>
					<tr>
							<th>username</th>
							<th>password</th>
							<th>create date(insert)</th>
							<th>update date (Last update)</th>
					</tr>
					<tr>
						<input type="hidden" name="id" value="<?php echo $records->id;?>">
						<td><input name="username" value="<?php echo $records->username; ?>"></td>
						<td><input name="password" value="<?php echo $records->password; ?>"></td>
						<td><?php echo $records->created_date; ?></td>
						<td><?php echo $records->updated_date; ?></td>
					</tr>
						<?php
						}
						else
							echo "No";
						?>
					<tr>
						<td>
							<button class="btn btn-success" type="submit">Submit</button>
						</td>

					</tr>
				</table>

</form>
</section>
		</div>
	</div>
</div>
</body>

</html>
