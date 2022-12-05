const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");




toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
    document.getElementById("logo").src="img/gorilla_horizontal.png";
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");

    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
        document.getElementById("logo").src="img/gorilla_horizontal.png";
    }else{
        modeText.innerText = "Dark mode";
        document.getElementById("logo").src="img/gorilla_horizontal.png";
    }
});
