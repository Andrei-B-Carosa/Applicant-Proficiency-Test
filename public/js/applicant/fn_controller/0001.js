import {page_content} from '../pg_controller/pg_content.js';
// import {_httpRequest} from '../pg_controller/pg_data.js';
// import {_dtDeviceList} from '../dt_controller/serverside/0002.js';
// import {gs_sessionStorage,gs_clearSession,gs_SelectSearch,gs_Modal} from '../../global.js';

export function controller(view,pg){

    const btn_0001 = document.querySelector(".btn-0001-0001");
    btn_0001.addEventListener("click", e => {
        e.preventDefault();
        e.stopImmediatePropagation();
        page_content('typing-test');
    });

}

export function construct(res,type){

}
