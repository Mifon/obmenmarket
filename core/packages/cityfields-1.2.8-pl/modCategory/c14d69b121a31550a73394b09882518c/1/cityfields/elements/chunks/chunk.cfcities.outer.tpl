<div class="cfcity">
	Ваш город: <a href="#cfCity" data-toggle="modal" data-target="#cfCity">[[+cf.current_city]]</a>
	<div class="text-center cfcity_first">
		<p>Ваш город<br />[[+cf.current_city]]?</p>
		<div class="text-center">
			<a href="#cfCity" class="btn btn-primary" data-dismiss="cfcity">Да</a>
			<a href="#cfCity" class="btn btn-default" data-toggle="modal" data-target="#cfCity">Нет</a>
		</div>
	</div>
</div>
<div class="modal fade" id="cfCity" tabindex="-1" role="dialog" aria-labelledby="cfCityLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="cfCityLabel">Выберите город</h4>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="cfCitySearch" class="col-sm-2 control-label">Поиск:</label>
						<div class="col-sm-10">
							<input type="text" name="query" placeholder="Введите название" class="form-control" id="cfCitySearch" />
						</div>
					</div>
					<div class="text-danger" id="cfCityError">По данному запросу ни одного города не найдено!</div>
				</div>
				<ul class="list-unstyled cfcity_list">
					[[+rows]]
				</ul>
			</div>
		</div>
	</div>
</div>
