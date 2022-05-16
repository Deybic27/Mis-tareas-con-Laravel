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
  document.addEventListener("click", function() {
    console.log(window.location.href)
    const params = new URLSearchParams(window.location.href)
    console.log(params.getAll("p").toString())
    const idPost = params.getAll("p").toString()
    fetch('http://127.0.0.1:8000/api/V1/post/'+idPost)
      .then(response => response.json())
      .then(function(data){
        console.log(data)

        document.querySelector("#editPost").style = "display: block";
        document.querySelector("#newPost").style = "display: none";
        document.querySelector("#editPost form").action = "http://127.0.0.1:8000/posts/"+data["id"];
        document.querySelector("#editPost form #title").value = data["title"];
        document.querySelector("#editPost form #description").value = data["description"];
        document.querySelector("#editPost form img").src = data["image"];
        document.querySelector("#editPost form #category").value = data["post_category_id"];
      });
    
  });
});