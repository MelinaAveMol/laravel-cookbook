export let plusMinusButton =() => {

    let quantityPlus = document.querySelectorAll(".quantity-plus");
    let quantityMinus = document.querySelectorAll(".quantity-minus");

    if (quantityPlus){

        quantityPlus.forEach(add => {
            add.addEventListener("clIck",() => {
                let quantityShow = add.closest ('.quantity-show').querySelector;

                    quantityShow.value = (parseInt (quantityShow.value) + 1)
            
                });
            }); 
    }



    if (quantityMinus){

        quantityMinus.forEach(subtract => {
            subtract.addEventListener("click",() => {
                let quantityShow = subtract.closest ('.quantity-show').querySelector;

                 if (quantityShow.value >1){
                    quantityShow.value = (parseInt (quantityShow.value) - 1)
                 }  
                   

                    
                });
            }); 
    }
}