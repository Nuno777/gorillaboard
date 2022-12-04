const ListItems = document.querySelectorAll(".sidebar-list li")

ListItems.forEach(item => {
    item.addEventListener("click", () =>{
        let isActive = item.classList.contains("active");

        ListItems.forEach((el) => {
            el.classList.remove("active");
        });

        if (isActive) item.classList.remove("active");
        else item.classList.add("active");
    });
});


const toggleSidebar = document.querySelector(".toggle-sidebar");
const logo = document.querySelector(".logo-box");
const sidebar = document.querySelector(".sidebar");


toggleSidebar.addEventListener("click", () => {
    toggleSidebar.classList.toggle("close");
});

logo.addEventListener("click", () =>{
    sidebar.classList.toggle("close");
});
