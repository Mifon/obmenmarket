<?php return array (
  '723dd2884ed8f79093c4325c17543a81' => 
  array (
    'criteria' => 
    array (
      'name' => 'cfCities.outer',
    ),
    'object' => 
    array (
      'id' => 108,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'cfCities.outer',
      'description' => '<!--<select class="header__pads-city" name="regions" id="regions">
            <option value="01">Москвай</option>
            <option value="02">Асашай</option>
            <option value="03',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div class="cfcity header__pads-city">
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
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/cityfields/elements/chunks/chunk.cfcities.outer.tpl',
      'content' => '<div class="cfcity header__pads-city">
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
',
    ),
  ),
  '735f9e313387cf2fb2f7aebbd7805938' => 
  array (
    'criteria' => 
    array (
      'name' => 'cfCities.row',
    ),
    'object' => 
    array (
      'id' => 109,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'cfCities.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<li><a href="[[+link]]" data-city="[[+id]]">[[+name]]</a></li>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/cityfields/elements/chunks/chunk.cfcities.row.tpl',
      'content' => '<li><a href="[[+link]]" data-city="[[+id]]">[[+name]]</a></li>
',
    ),
  ),
);