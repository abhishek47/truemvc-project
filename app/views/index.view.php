<?php include 'partials/header.view.php'; ?>
	   
	<div class="page-header">
		
		<h1>Todos <small>by trumpets</small> &nbsp; <i id="trash" style="font-size: 26px; color: #333" class="fa fa-trash"></i></h1>

	 <form method="post" action="/todos">		
		<input type="text" v-model="newTask"  name="title" class="form-control"  placeholder="Add New Todo">
	
      </form> 	
	</div>

	<ul class="list-group">
		<li class="list-group-item" v-for="(todo, index) in todos" :key="todo.id">

		<div v-if="todo.completed == 1">
				<h4><strike>{{ todo.title }}</strike> 
					<button type="button" @click="deleteItem(index)" class="btn btn-xs btn-danger">Delete</button>
				</h4>
		</div>

		<div v-else >
				<h4>{{ todo.title }} 
					<button type="button" @click="complete(index)" class="btn btn-xs btn-success">Mark Complete</button>
				</h4>
		</div>

		<p>{{ todo.description }}</p>

		</li>
	</ul>

<?php include 'partials/footer.view.php'; ?>    