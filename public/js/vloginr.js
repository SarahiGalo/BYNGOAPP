
const $input = document.querySelector("#nombre");
            const patron = /[a-zA-Z ]+/;
            $input.addEventListener("keydown", event => {
                if(patron.test(event.key)){
                    document.getElementById('nombre');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $input2 = document.querySelector("#app");
            const patron2 = /[a-zA-Z ]+/;
            $input2.addEventListener("keydown", event => {
                if(patron2.test(event.key)){
                    document.getElementById('app');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        }); 

        const $input3 = document.querySelector("#apm");
            const patron3 = /[a-zA-Z ]+/;
            $input3.addEventListener("keydown", event => {
                if(patron3.test(event.key)){
                    document.getElementById('apm');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        }); 

        const $input4 = document.querySelector("#calle");
            const patron4 = /[a-zA-Z0-9 ]+/;
            $input4.addEventListener("keydown", event => {
                if(patron4.test(event.key)){
                    document.getElementById('calle');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        }); 
        const $input5 = document.querySelector("#colonia");
            const patron5 = /[a-zA-Z0-9 ]+/;
            $input5.addEventListener("keydown", event => {
                if(patron5.test(event.key)){
                    document.getElementById('colonia');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        }); 
        const $input6 = document.querySelector("#municipio");
            const patron6 = /[a-zA-Z ]+/;
            $input6.addEventListener("keydown", event => {
                if(patron6.test(event.key)){
                    document.getElementById('municipio');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $input7 = document.querySelector("#numc");
            const patron7 = /[0-9#]+/;
            $input7.addEventListener("keydown", event => {
                if(patron7.test(event.key)){
                    document.getElementById('numc');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $input8 = document.querySelector("#del");
            const patron8 = /[a-zA-Z0-9 ]+/;
            $input8.addEventListener("keydown", event => {
                if(patron8.test(event.key)){
                    document.getElementById('del');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $input9 = document.querySelector("#tel");
            const patron9 = /[0-9]+/;
            $input9.addEventListener("keydown", event => {
                if(patron9.test(event.key)){
                    document.getElementById('tel');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $inputA = document.querySelector("#email");
            const patronA = /[a-zA-Z0-9_@.]+/;
            $inputA.addEventListener("keydown", event => {
                if(patronA.test(event.key)){
                    document.getElementById('email');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $inputB= document.querySelector("#email2");
            const patronB = /[a-zA-Z0-9_@.]+/;
            $inputB.addEventListener("keydown", event => {
                if(patronB.test(event.key)){
                    document.getElementById('email2');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $inputC = document.querySelector("#curp");
            const patronC = /[a-zA-Z0-9]+/;
            $inputC.addEventListener("keydown", event => {
                if(patronC.test(event.key)){
                    document.getElementById('curp');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
        const $inputD = document.querySelector("#licencia");
            const patronD = /[a-zA-Z0-9]+/;
            $inputD.addEventListener("keydown", event => {
                if(patronD.test(event.key)){
                    document.getElementById('licencia');
                }
                else{
                    if(event.keyCode==8){
                    }
                    else{
                        event.preventDefault();
                    }
                }
        });
