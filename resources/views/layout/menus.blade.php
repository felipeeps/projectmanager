<div class="col-md-12">
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="navbar-toggler-icon"></span>
        </button> 
        <a class="navbar-brand" href="#"></a>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="{{route('projects.create')}}">Projetos<span class="sr-only">(current)</span></a>
				</li>
			    <li class="nav-item">
					<a class="nav-link" href="#">Etapas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tarefas</a>
				</li>
				<!-- Item do Menu com sub-itens
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider">
							</div> 
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
					</li>
				-->
			</ul>     
            
            <!-- Form Pesquisar Menu -->
            <form class="form-inline">
				<input class="form-control mr-sm-2" type="text"> 
					<button class="btn btn-primary my-2 my-sm-0" type="submit">
						Procurar
					</button>
			</form>
		</div>
    </nav>
</div>