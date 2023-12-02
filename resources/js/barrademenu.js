let arrow = document.querySelectorAll(".arrow");

for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar"); // Pegando sidebar
let sidebarBtn = document.querySelector(".bx-menu"); // Pegando o botão de abrire fechar a sidebar
let mainContent = document.querySelector(".main-content"); // Pegando conteúdo

// Caso o botão seja clicado, ele adiciona ou remove a classe "close" na sidebar e adiciona ou remove a tag que da margem no texto
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    mainContent.classList.toggle("main-content-shifted");
});