export let renderFilter = () => {

    let formContainer = document.querySelector('.front-form');
    let dispatchButton = document.querySelector('.filter-button');
    let forms = document.querySelectorAll('.form-content');

    document.addEventListener("renderFormModules",( event =>{
        renderForm();
    }), {once: true});

    document.addEventListener("loadForm", (event => {
        formContainer.innerHTML = event.detail.form;
    }), {once: true});


    if(dispatchButton){


        dispatchButton.addEventListener("click", (event) => {
    
            forms.forEach(form => { 

                /*
                    En las siguientes líneas se obtiene el valor del formulario a través de un objeto FormData
                    y se captura la url que usaremos para enviar los datos al servidor.
                */
                
                let data = new FormData(form);
                let url = form.action;
               

                /*
                    A continuación vamos a hacer una llamada de tipo POST mediante fetch, esta vez vamos a 
                    añadir en los headers el token que nos ha dado Laravel el cual va a prevenir que se puedan 
                    hacer ataques de tipos cross-site scripting.
                */
    
                let sendPostRequest = async () => {
    
                    // document.dispatchEvent(new CustomEvent('startWait'));
                    
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                        
                    })
                    
                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        formContainer.innerHTML = json.form;

                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('renderFormModules'));
                        document.dispatchEvent(new CustomEvent('renderTableModules'));
                    });
                };
        
                sendPostRequest();
            });
        });
    }

}