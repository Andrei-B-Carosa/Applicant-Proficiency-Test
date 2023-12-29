import {page_content} from '../pg_controller/pg_content.js';
import {_fvApplicant} from '../fv_controller/0002.js';
import { sentence,addTemplates } from 'https://unpkg.com/txtgen/dist/txtgen.esm.js'

// import {_httpRequest} from '../pg_controller/pg_data.js';
// import {_dtDeviceList} from '../dt_controller/serverside/0002.js';
// import {gs_sessionStorage,gs_clearSession,gs_SelectSearch,gs_Modal} from '../../global.js';

export function controller(view,pg){

    _fvApplicant();

    const templates = {
        easy: [
            '{{a_noun}} is {{a_noun}} from the right perspective.',
            'The {{noun}} is {{an_adjective}}.'
        ],
        medium: [
            '{{a_noun}} {{verb}} {{an_adjective}} {{noun}}.',
            'In the {{noun}}, {{a_noun}} {{verb}} {{an_adjective}}.'
        ],
        hard: [
            'With {{an_adjective}} {{noun}}, {{a_noun}} {{verb}} {{an_adjective}} {{noun}}.',
            'The {{noun}} {{verb}} {{an_adjective}} {{noun}}, {{a_noun}} {{verb}} {{an_adjective}} {{noun}}.'
        ]
    };

    addTemplates(templates.medium)
    console.log(sentence())

    // let form = document.querySelector("#fv-0002-0001"),
    //     btn_0001 = document.querySelector(".btn-0002-0001"),
    //     fullname;

    // btn_0001.addEventListener("click", e => {
    //     e.preventDefault();
    //     e.stopImmediatePropagation();

    //     btn_0001.setAttribute("disabled",true);
    //     fullname = form.querySelector("#fullname").value;
    //     if(fullname.trim()){
    //         gs_sessionStorage('param1',window.btoa(fullname));
    //     }else{
    //         Swal.fire("Ooops","Please complete the form !","info").then(() => btn_0001.removeAttribute("disabled"));
    //     }
    // });



}

export function construct(res,type){

}
