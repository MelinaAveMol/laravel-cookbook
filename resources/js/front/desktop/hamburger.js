export let renderHamburger = () => {
    let picks = document.getElementById("picks");
    let hamburger = document.getElementById("hamburger");

    if(hamburger) {

        hamburger.addEventListener("click", () => {
            
            picks.classList.toggle("active");
            hamburger.classList.toggle("active");
        });
    }
}