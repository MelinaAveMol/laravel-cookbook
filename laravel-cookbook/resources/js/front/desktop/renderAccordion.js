//PRIMER INTENTO

// export let renderAccordion = () => {

//     let questions = document.querySelectorAll(".main-question");


//     //console.log();

//     if(questions){
//         questions.forEach((question, i) => {

//             question.addEventListener ("click", () => {
//                 pointers.forEach ((pointer, i) =>{
//                     replies[i].classList.remove("active");
//                     pointer.classList.remove("active");

//                 });

//                 // console.log(replies [i], pointers);

//                 replies[i].classList.add("active");
//                 pointers [i].classList.add("active");
//             });

//         });
//     }

// }

//SEGUNDO INTENTO

export let renderAccordion = () => {}

    let questions = document.querySelectorAll(".question");


    //console.log();

    if(questions){
        questions.forEach((question, i) => {

            question.addEventListener ("click", () => {
            
            let replies = document.querySelectorAll(".reply")
            replies[i].classList.toggle("active")
            
            let pointer = document.querySelectorAll(".pointer")
            pointer [i].classList.toggle("active")
            
        });        
    });
}

// //TERCER INTENTO 


// export let question = () => {

// let questions = document.querySelectorAll(".question");

// questions.forEach((event)=> {
//     event.addEventListener("click" , () =>{

//         if (event.classList.contains("active")) {
//             event.classList.remove("active");

//         }else {

//             event.classList.add("active");

//         }
//     });


// });

// }