
var app = new Vue({
	  el: '#app',
	  data: {
	  	newTask: '',
	  	todos: []
	  },

	  created()
	  {
	  	  axios.get('/todos').then(function(response){
	  	  	
	  	  		this.todos = response.data;
	  	  }.bind(this));
	  },

	  methods: {
	  	deleteItem(index){

	  	  $('#trash').animateCss('animated bounce');

	  	  axios.get('/delete-todo?id=' + this.todos[index].id).then(function(response){
	  	  		
	  	  		
	  	        this.todos.splice(index, 1);

	  	  }.bind(this));


	  	},
	  	complete(index){
	  		this.todos[index].completed = 1;
	  	},

	  	addTodo() {

	  		console.log("I am here");
	  		
	  		var todo = {
				  
				      title: this.newTask,

				      description: this.newTask
				  
				  };

				  console.log(todo);



	  		// hit the server to add the todo.
	  		    axios.post('/todos', JSON.stringify(todo)).then(function(response){
  				

  					this.todos.unshift(todo);

  					this.newTask = '';
				  
				  }.bind(this));

	  		// push it to the list

	  	}
	  }
	});
