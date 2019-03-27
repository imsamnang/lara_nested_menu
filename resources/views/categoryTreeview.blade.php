<!DOCTYPE html>
<html>
<head>
	<title>Laravel Category Treeview Example</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
  <link rel="stylesheet" href="css/bootnavbar.css">  
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
  <link href="/css/treeview.css" rel="stylesheet">
</head>
<body>
	<div class="container">     
		<div class="panel panel-primary">
			<div class="panel-heading">Manage Category TreeView</div>
  		<div class="panel-body">
  			<div class="row">
  				<div class="col-md-6">
  					<h3>Category List</h3>
							{{-- <ul id="tree1">
			            @foreach($categories as $category)
			                <li>
			                    {{ $category->title }}
			                    @if(count($category->childs))
			                        @include('manageChild',['childs' => $category->childs])
			                    @endif
			                </li>
			            @endforeach
			        </ul> --}}
		    		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
		        			<div class="collapse navbar-collapse" id="navbarSupportedContent">				        
		                <ul class="navbar-nav mr-auto">
		                  @foreach($categories as $category)
		                      <li class="nav-item dropdown">
		                          {{ $category->title }}
		                          @if(count($category->childs))
		                              @include('manageChild',['childs' => $category->childs])
		                          @endif
		                      </li>
		                  @endforeach
		                </ul> 				        
			  					</div>
			  		</nav>
		  		</div>		
  				<div class="col-md-6">
  					<h3>Add New Category</h3>
			  			{!! Form::open(['route'=>'add.category']) !!}
			  				@if ($message = Session::get('success'))
									<div class="alert alert-success alert-block">
										<button type="button" class="close" data-dismiss="alert">×</button>	
									  <strong>{{ $message }}</strong>
									</div>
								@endif
			  				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
								{!! Form::label('Title:') !!}
								{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
								<span class="text-danger">{{ $errors->first('title') }}</span>
							</div>
							<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
								{!! Form::label('Category:') !!}
								{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
								<span class="text-danger">{{ $errors->first('parent_id') }}</span>
							</div>
							<div class="form-group">
								<button class="btn btn-success">Add New</button>
							</div>
			  			{!! Form::close() !!}
  				</div>
  			</div>	  			
  		</div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="/js/treeview.js"></script>
<script src="js/bootnavbar.js" ></script>

    <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>    
</body>
</html>