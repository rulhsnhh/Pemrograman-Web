const optionMenu=document.querySelector("#select-menu"),
selectBtn=document.querySelector("#select-btn"),
options=document.querySelector("#option"),
sBtn_text=document.querySelector("#sBtn-text");

selectBtn.addEventListener("click",()=> optionMenu.classList.toggle("active"));

options.forEach(option => {
    option.addEventListener("click", ()=>{
        let selectedOption= option.querySelector("#option-text"), innerText;
        sBtn_text.innerText=selectedOption;

        optionMenu.classList.remove("active");
    });
});