export let renderMenu = () => {

    let pickButtons = document.querySelectorAll(".front-menu");

        menuOptions.forEach(menuOption => {
        
                menuOption.addEventistener('click', () =>{

                    console.log(menuOption.dataset.url);
                });
        
        
        });

}


    
let sendShowRequest = async () => {

document.dispatchEvent(new CustomEvent('startWait'));

let response =  await fetch(url, {
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    },
    method: 'GET',
})

.then(response => {
        
        if (!response.ok) throw response;

        return response.json();
})
.then(json => {

    mainContainer.innerHTML = json.content;

    document.dispatchEvent(new CustomEvent('renderMenuModules'));
})
    .catch( error => {
        
        if(error.status == '500'){
            console.log(error);
        };

        sendShowRequest();
    });

};
