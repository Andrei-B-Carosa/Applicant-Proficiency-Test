import {gs_swalToast} from '../global.js';
"use strict";

var KTLoginForm = (function () {

    var form,fvLoginForm,formUrl;
    var _handleLoginForm = function() {

        form       = document.querySelector("#form-login");
        formUrl   = KTUtil.attr(form,'action');

        fvLoginForm = FormValidation.formValidation(form, {
            fields: {
                username: { validators: { notEmpty: { message: "Username is required" } },
                },
                // password: { validators: { notEmpty: { message: "Password is required" } },
                // },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            }
        });

        $('.form-btn-submit').click(function (e) {
            e.preventDefault();
            let btn = $(this);
            fvLoginForm.validate().then(function (i) {
                if(i == "Valid"){
                    btn.attr("data-kt-indicator", "on").attr('disabled',true);
                    FormValidation.utils.fetch(formUrl, {
                        method: 'POST',
                        dataType: 'json',
                        credentials: "same-origin",
                        headers: {"X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')},
                        params: {
                            username: form.querySelector('[name="username"]').value,
                            password: form.querySelector('[name="password"]').value,
                        },
                    }).then(function(response) {
                        if(response.status == 'success'){
                            gs_swalToast(response.message,response.status);
                            window.location.replace("/"+response.payload+"/dashboard");
                        }else{
                            gs_swalToast(response.message,response.status);
                            if(response.payload == 'throttle'){
                                btn.attr("data-kt-indicator", "on").attr('disabled',true);
                            }else{
                                $("#csrf-token").attr('content',response.payload);
                                btn.attr("data-kt-indicator", "off").attr('disabled',false);
                            }
                        }
                    })
                }
            });
        });

    }

    return {
        init: function () {
            _handleLoginForm()
        }
    };

})();

jQuery(document).ready(function() {
    KTLoginForm.init();
});
