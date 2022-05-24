// export let addToShoppingTrolleyButtons  = () => {

// let addToTrolley = document.querySelectorAll('.pick');

// // addToShoppingTrolleyButtons.forEach(addToTrolleyButton => {

// //     addToTrolleyButton.addEventListener('click', addToTrolleyClicked);
    
//     if (addToTrolley){

//         addToTrolleyButton.forEach(add => {
//             add.addEventListener("click",() => {

//                 let trolleyShow = add.closest ('.show').querySelector;

//                     trolleyShow.value = (parseInt (trolleyShow.value) + 1)
            
//                 });
//             }); 
//     }

//     // function addToTrolleyClicked(event){

//     //     let button = event.target;
        
//     //     //console.log(':addToTrolleyClicked -> button', button);


//     //     let product = button.closest('.product');
//     //     //console.log(':addToTrolleyClicked -> product', product);



//     // } 
// };

// export let trolleyCounter  = () => {

// let trolleyCounter = 0;

// // boton.onclick = () => {
    
// //     trolleyCounter++;
    
// //     show.value = trolleyCounter;
// // }
// }


// export let trolleyCounter  = () => {

//     let trolleyCounter = 0;
    
//     boton.onclick = () => {
//         trolleyCounter = Number(show.value.trim("show "));
//         trolleyCounter = !isNaN( numero ) ? numero + 1 : 1;
      
//         show.value = trolleyCounter;
//       }

// }




// export let numero = 0;
// boton.onclick = () => {
//  numero++;
//  mostrador.value = numero;
//  add1.addEventListener("click", () => {
//     mostrador.value = parseInt(mostrador.value)+1;
//       });
// }


// export let trolleyCounter  = () => {

// let numero = document.querySelector(".add1");
// let mostrador = document.querySelector(".mostrador");
// let sumar = 1;

// document.querySelector(".mostrador").innerText = 0;

// btn.addEventListener("click", function () {
//     mostrador.innerText = parseInt(mostrador.innerText) + sumar;
// });


// }
// export addToTrolley = () {

//     let btn = document.querySelector(".btn");
// let counter = document.querySelector(".contador");
// let sumar = 1;

// document.querySelector(".contador").innerText = 0;

// btn.addEventListener("click", function () {
// 	counter.innerText = parseInt(show.innerText) + sumar;
// });


export let addToTrolley = () => {

    let adds= document.querySelectorAll(".add");
   
    if(adds){
        
        adds.forEach(add => {
            add.addEventListener("click", () => {

                let show= document.querySelector("#show");

                show.value = (parseInt(show.value) +1 );

            });
        });

    
    }


}

// export let addToTrolley = () => {

// let adds=document.querySelectorAll(".add");
// let show=document.querySelector(".show");
// let contador=0;

// for(let i=0; i<adds.length;i++){
//     adds[i].addEventListener("click", ()=>{

//         if(adds[i].classList.contains("add")){
//             contador++;
//             console.log(contador);
//             show.innerText=contador;
//     }
 
//        })
//     }
        
        
// }




