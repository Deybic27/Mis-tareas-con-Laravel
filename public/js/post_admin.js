document.addEventListener("DOMContentLoaded", function(event) {
  //código a ejecutar cuando el DOM está listo para recibir acciones
  document.querySelector('.contenedor').onmouseover = function() {
    document.querySelectorAll('.btnFloat').forEach(element => {
      element.classList.add('animacionVer');
    });
  }
  document.querySelector('.contenedor').onmouseout = function(){
    document.querySelectorAll('.btnFloat').forEach(element => {
      element.classList.remove('animacionVer');
    });
  }
  function loadDataEditForm() {
    console.log(window.location.href)
    const params = new URLSearchParams(window.location.href)
    console.log(params.getAll("p").toString(),'post')
    const idPost = params.getAll("p").toString()
    if (idPost) {
      fetch(window.location.host+'/api/V1/post/'+idPost)
        .then(response => response.json())
        .then(function(data){
          console.log(data)
  
          document.querySelector("#editPost").style = "display: block";
          document.querySelector("#newPost").style = "display: none";
          document.querySelector("#editPost form").action = window.location.host+"/posts/"+data["id"];
          document.querySelector("#editPost form #title").value = data["title"];
          document.querySelector("#editPost form #description").value = data["description"];
          document.querySelector("#editPost form img").src = data["image"];
          document.querySelector("#editPost form #category").value = data["post_category_id"];
        });
    }else{
      document.querySelector("#editPost").style = "display: none";
      document.querySelector("#newPost").style = "display: block";
    }
    console.log(params.getAll("c").toString(),'category')
    const idCategory = params.getAll("c").toString()
    if (idCategory) {
      fetch(window.location.host+'/api/V1/post-category/'+idCategory)
        .then(response => response.json())
        .then(function(data){
          console.log(data, 'data category')

          document.querySelector("#editCategory").style = "display: block";
          document.querySelector("#newCategory").style = "display: none";
          document.querySelector("#editCategory form").action = window.location.host+"/post-categories/"+data["id"];
          document.querySelector("#form_delete_category").action = window.location.host+"/post-categories/"+data["id"];
          document.querySelector("#editCategory form #name").value = data["name"];
          document.querySelectorAll(".modal-body strong").forEach(element => {
            element.innerHTML = data["name"];
          });
          
        });
    }
    document.querySelector("#loaderPage").style = "visibility:hidden;";
  }

  a = document.querySelectorAll("a");
  console.log(a);
  a.forEach(element => {
    element.addEventListener("click", function() {
      document.querySelector("#loaderPage").style = "visibility:visible;";
      setTimeout(loadDataEditForm,1000);
    });
  });
});