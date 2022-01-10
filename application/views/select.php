<section class="box col-lg-12">
	<form action="selectdetail" method="post">
		<table class="table table-dark">
			<?php
				if (isset($records) and !empty($records))
				{
				foreach ($records as $record)
				{
				?>

				<tr>
					<th>
						<label>username :</label>
					</th>
					<td>
						<input type="hidden" name="id" value="<?php echo $record->id;?>">
						<button name="username" type="submit" value="<?php echo $record->username;?>"><?php echo $record->username;?></button>
					</td>
				</tr>
				<?php
				}
				}
				?>

		</table>
	</form>
</section>
</div>


</div>
</body>

</html>
