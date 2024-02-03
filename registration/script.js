const form = document.querySelector("form");
const nextBtn = form.querySelector(".nextBtn");
const backBtn = form.querySelector(".backBtn");
const sections = form.querySelectorAll(".form");

let currentSection = 0;

nextBtn.addEventListener("click", () => {
    const inputs = sections[currentSection].querySelectorAll("input");
    let isFilled = true;
    
    inputs.forEach(input => {
        if (input.value.trim() === "") {
            isFilled = false;
            // You might add logic here to indicate required fields
        }
    });

    if (isFilled && currentSection < sections.length - 1) {
        sections[currentSection].classList.remove('secActive');
        currentSection++;
        sections[currentSection].classList.add('secActive');
    } else if (currentSection === sections.length - 1 && isFilled) {
        // If on the last section and all fields filled, submit the form
        form.submit();
    }
});

backBtn.addEventListener("click", () => {
    if (currentSection > 0) {
        sections[currentSection].classList.remove('secActive');
        currentSection--;
        sections[currentSection].classList.add('secActive');
    }
});




/*const form = document.querySelector("form");
const nextBtn = form.querySelector(".nextBtn");
const backBtn = form.querySelector(".backBtn");
const sections = form.querySelectorAll(".form");

let currentSection = 0;

nextBtn.addEventListener("click", () => {
    const inputs = sections[currentSection].querySelectorAll("input");
    let isFilled = true;
    inputs.forEach(input => {
        if (input.value === "") {
            isFilled = false;
        }
    });

    if (isFilled && currentSection < sections.length - 1) {
        sections[currentSection].classList.remove('secActive');
        currentSection++;
        sections[currentSection].classList.add('secActive');
    }
});

backBtn.addEventListener("click", () => {
    if (currentSection > 0) {
        sections[currentSection].classList.remove('secActive');
        currentSection--;
        sections[currentSection].classList.add('secActive');
    }
});




/* const form = document.querySelector("form"),
        nextBtn= form.querySelector(".nextBtn"),
        backBtn= form.querySelector(".backBtn"),
        allInput= form.querySelectorAll(".first input");

nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
           
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive') );*/