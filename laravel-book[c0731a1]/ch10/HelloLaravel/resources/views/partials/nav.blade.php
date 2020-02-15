<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<a class="navbar-brand" href="{{ action('HomeController@index') }}">HelloLaravel</a>
		<ul class="nav navbar-nav">
			<li>
				<a href="{{ action('BoardController@getIndex') }}">排行榜</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if(Auth::check())
				<li class="navbar-text">
					{{ Auth::user()->name }}，您好
				</li>
				<li>
					<a href="{{ action('AuthController@getLogout') }}">登出</a>
				</li>
				<li>
					<a href="{{ action('SchoolController@getEdit') }}">我的資料</a>
				</li>
			@else
				<li>
					<a href="{{ action('AuthController@getLogin') }}">登入</a>
				</li>
			@endif
		</ul>
	</div>
</nav>
<div style="padding-top: 70px;"></div>