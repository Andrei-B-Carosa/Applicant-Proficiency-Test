"use strict";

import {gs_sessionStorage,gs_getItem} from './../../global.js';

export function _fvApplicant(){

    var fvApplicant = (function () {

        var _handleApplicant = function(){

            const form = document.querySelector("#fv-0002-0001");
            const btn_0001 = document.querySelector(".btn-0002-0001");

            const fvApplicant = FormValidation.formValidation(form, {
                fields: {
                    fullname: {validators: { notEmpty: { message: 'This field is required' } }},
                },
                plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
                },
            });

            btn_0001.addEventListener("click", e => {
                e.preventDefault();
                e.stopImmediatePropagation();

                btn_0001.setAttribute("disabled",true);
                fvApplicant.validate().then(function (v) {
                    if(v != "Valid"){
                        Swal.fire("Ooops","Please complete the form !","info").then(() => btn_0001.removeAttribute("disabled"));
                    }else{
                        gs_sessionStorage('param1',window.btoa(form.querySelector("#fullname").value));

                    }
                });
            });

        }

        return {
            init: function () {
                _handleApplicant();
            },
        };

    })();

    KTUtil.onDOMContentLoaded(function () {
        fvApplicant.init();
    });

}
