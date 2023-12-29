{{-- <div class="d-flex flex-column flex-center text-center p-10">
    <div class="card mb-12">
        <!--begin::Hero body-->
        <div class="card-body flex-column py-20 px-20">
            <!--begin::Hero content-->
            <div class="d-flex align-items-center h-lg-300px">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                    <!--begin::Title-->
                    <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">What is your Name ?</h1>
                    <!--end::Title-->

                    <!--begin::Input group-->
                    <div class="position-relative">
                        <input type="text" class="form-control fs-4 py-4 text-gray-700 placeholder-gray-400 mw-500px"
                            name="fullname" placeholder="Enter your Fullname">
                    </div>
                    <div class="mb-0 mt-10 d-grid gap-1  col-12 mx-auto">
                        <button type="button" class="btn btn-success hover-scale btn-0002-0001">Start Excel
                            Test</button>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Hero content-->
        </div>
        <!--end::Hero body-->
    </div>
</div> --}}
{{-- <div class="d-flex flex-column flex-center text-center p-10">
    <div class="card card-flush w-lg-650px py-5">
        <div class="card-body py-15 py-lg-20">
            <h1 class="fw-bolder text-gray-900 mb-1">
                What is your Name ?
            </h1>
            <div class="text-muted fw-semibold fs-6 mt-1 mb-7">
                This will be use for your test result.
            </div>
            <form class="w-md-350px mb-0 mx-auto fv-plugins-bootstrap5 fv-plugins-framework" action="#"
                id="fv-0002-0001">
                <div class="fv-row text-start">
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                        <input type="text" placeholder="Tell us your fullname" name="fullname" autocomplete="off"
                            class="form-control" id="fullname">
                    </div>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
            </form>
            <div class="mb-0 mt-10 d-grid gap-1  col-8 mx-auto">
                <button type="button" class="btn btn-success hover-scale btn-0002-0001">Start Typing Test</button>
            </div>
        </div>
    </div>
</div> --}}
<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
    id="kt_create_account_stepper">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
        <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-450px scroll-y bgi-size-cover bgi-position-center"
            style="background-image: url(../../assets/media/misc/auth-bg.png)">
            <!--begin::Header-->
            <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                <!--begin::Logo-->
                <a href="javascript:;">
                    <img alt="Logo" src="{{ asset('web_img/company_logo.png') }}" class="h-80px" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="d-flex flex-row-fluid justify-content-center p-10">
                <!--begin::Nav-->
                <div class="stepper-nav">
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-3">
                                <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Introduction
                                </h3>

                                <div class="stepper-desc fw-normal">
                                    Applicant Details
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 1-->

                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Typing Test
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Typing speed and acuracy
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 3-->

                    <!--begin::Step 4-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Excel Test
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Basic excel knowledge
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 4-->

                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Test Result
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Excel and Typing Test Results
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 5-->
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-650px w-xl-700px mx-auto">
                <!--begin::Form-->
                <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <h1 class="fw-bolder text-gray-900">
                                Applicant Proficiency Test
                            </h1>
                            <div class="fw-semibold fs-6 text-gray-500 mb-9">
                                Hello Guest, we'll be assessing your Typing and Excel skills. <br>Get ready to showcase your proficiency!
                            </div>

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="form-label mb-3 fw-bold">Fullname</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="fullname" placeholder="Fullname" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 1-->

                    <!--begin::Step 2-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bold text-dark">Check your typing skills</h2>
                                <!--end::Title-->

                                <!--begin::Notice-->
                                <div class="text-muted fw-semibold fs-6">
                                    If you need more info, please check out
                                    <a href="#" class="link-primary fw-bold">Help Page</a>.
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-3">Specify Duration</label>
                                <!--end::Label-->

                                <!--begin::Row-->
                                <div class="row mb-2" data-kt-buttons="true">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                            <input type="radio" class="btn-check" name="account_team_size"
                                                value="1-1" />
                                            <span class="fw-bold fs-4">1 Minute</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
                                            <input type="radio" class="btn-check" name="account_team_size"
                                                checked value="2-10" />
                                            <span class="fw-bold fs-4">3 Minutes</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                            <input type="radio" class="btn-check" name="account_team_size"
                                                value="10-50" />
                                            <span class="fw-bold fs-4">5 Minutes</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                            <input type="radio" class="btn-check" name="account_team_size"
                                                value="50+" />
                                            <span class="fw-bold fs-4">10 Minutes</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Hint-->
                                <div class="form-text">
                                    Customers will see this shortened version of your statement descriptor
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">Select Difficulty</label>
                                <!--end::Label-->

                                <!--begin::Options-->
                                <div class="mb-0">
                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin::Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-bank fs-1 text-gray-600"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </span>
                                            <!--end::Icon-->

                                            <!--begin::Description-->
                                            <span class="d-flex flex-column">
                                                <span
                                                    class="fw-bold text-gray-800 text-hover-primary fs-5">Easy</span>
                                                <span class="fs-6 fw-semibold text-muted">Use images to enhance
                                                    your post flow</span>
                                            </span>
                                            <!--end:Description-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="account_plan"
                                                value="1" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin::Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-chart fs-1 text-gray-600"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </span>
                                            <!--end::Icon-->

                                            <!--begin::Description-->
                                            <span class="d-flex flex-column">
                                                <span
                                                    class="fw-bold text-gray-800 text-hover-primary fs-5">Medium</span>
                                                <span class="fs-6 fw-semibold text-muted">Use images to your
                                                    post time</span>
                                            </span>
                                            <!--end:Description-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" checked
                                                name="account_plan" value="2" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin::Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600"><span
                                                            class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span></i>
                                                </span>
                                            </span>
                                            <!--end::Icon-->

                                            <!--begin::Description-->
                                            <span class="d-flex flex-column">
                                                <span
                                                    class="fw-bold text-gray-800 text-hover-primary fs-5">Hard</span>
                                                <span class="fs-6 fw-semibold text-muted">Use images to enhance
                                                    time travel rivers</span>
                                            </span>
                                            <!--end:Description-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="account_plan"
                                                value="3" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 2-->

                    <!--begin::Step 3-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-12">
                                <!--begin::Title-->
                                <h2 class="fw-bold text-dark">Business Details</h2>
                                <!--end::Title-->

                                <!--begin::Notice-->
                                <div class="text-muted fw-semibold fs-6">
                                    If you need more info, please check out
                                    <a href="#" class="link-primary fw-bold">Help Page</a>.
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label required">Business Name</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input name="business_name" class="form-control form-control-lg form-control-solid"
                                    value="Keenthemes Inc." />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label">
                                    <span class="required">Shortened Descriptor</span>


                                    <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover"
                                        data-bs-html="true" data-bs-content="
&lt;div class=&#039;p-4 rounded bg-light&#039;&gt;
&lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt;
&lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt;
&lt;div&gt;Amount&lt;/div&gt;
&lt;div&gt;Transaction&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt;

&lt;div class=&#039;d-flex flex-stack text-dark fw-bold mb-2&#039;&gt;
&lt;div&gt;USD345.00&lt;/div&gt;
&lt;div&gt;KEENTHEMES*&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt;
&lt;div&gt;USD75.00&lt;/div&gt;
&lt;div&gt;Hosting fee&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt;
&lt;div&gt;USD3,950.00&lt;/div&gt;
&lt;div&gt;Payrol&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span> </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input name="business_descriptor"
                                    class="form-control form-control-lg form-control-solid" value="KEENTHEMES" />
                                <!--end::Input-->

                                <!--begin::Hint-->
                                <div class="form-text">
                                    Customers will see this shortened version of your statement descriptor
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label required">Corporation Type</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <select name="business_type" class="form-select form-select-lg form-select-solid"
                                    data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                    data-hide-search="true">
                                    <option></option>
                                    <option value="1">S Corporation</option>
                                    <option value="1">C Corporation</option>
                                    <option value="2">Sole Proprietorship</option>
                                    <option value="3">Non-profit</option>
                                    <option value="4">Limited Liability</option>
                                    <option value="5">General Partnership</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--end::Label-->
                                <label class="form-label">Business Description</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea name="business_description"
                                    class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-0">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label required">Contact Email</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input name="business_email" class="form-control form-control-lg form-control-solid"
                                    value="corp@support.com" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->

                    </div>
                    <!--end::Step 3-->

                    <!--begin::Step 4-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bold text-dark">Billing Details</h2>
                                <!--end::Title-->

                                <!--begin::Notice-->
                                <div class="text-muted fw-semibold fs-6">
                                    If you need more info, please check out
                                    <a href="#" class="text-primary fw-bold">Help Page</a>.
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Name On Card</span>


                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span> </label>
                                <!--end::Label-->

                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="card_name" value="Max Doe" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Enter card number" name="card_number"
                                        value="4111 1111 1111 1111" />
                                    <!--end::Input-->

                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="../../assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="../../assets/media/svg/card-logos/mastercard.svg" alt=""
                                            class="h-25px" />
                                        <img src="../../assets/media/svg/card-logos/american-express.svg" alt=""
                                            class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                        Date</label>
                                    <!--end::Label-->

                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" class="form-select form-select-solid"
                                                data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_year" class="form-select form-select-solid"
                                                data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                <option></option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">CVV</span>


                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i></span> </label>
                                    <!--end::Label-->

                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" minlength="3"
                                            maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->

                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-semibold form-label">Save Card for further
                                        billing?</label>
                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check
                                        budget planning</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-semibold text-muted">
                                        Save Card
                                    </span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 4-->

                    <!--begin::Step 5-->
                    <div class="" data-kt-stepper-element="content">


                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-8 pb-lg-10">
                                <!--begin::Title-->
                                <h2 class="fw-bold text-dark">Your Are Done!</h2>
                                <!--end::Title-->

                                <!--begin::Notice-->
                                <div class="text-muted fw-semibold fs-6">
                                    If you need more info, please
                                    <a href="../layouts/corporate/sign-in.html" class="link-primary fw-bold">
                                        Sign In
                                    </a>
                                    .
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Body-->
                            <div class="mb-0">
                                <!--begin::Text-->
                                <div class="fs-6 text-gray-600 mb-5">
                                    Writing headlines for blog posts is as much an art as it is a science
                                    and probably warrants its own post, but for all advise is with what
                                    works for your great & amazing audience.
                                </div>
                                <!--end::Text-->

                                <!--begin::Alert-->

                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 ">
                                        <!--begin::Content-->
                                        <div class=" fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                            <div class="fs-6 text-gray-700 ">To start using great tools, please,
                                                <a href="../../utilities/wizards/vertical.html" class="fw-bold">Create
                                                    Team Platform</a>
                                            </div>
                                        </div>
                                        <!--end::Content-->

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Alert-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Wrapper-->

                    </div>
                    <!--end::Step 5-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-15">
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3"
                                data-kt-stepper-action="previous">
                                <i class="ki-duotone ki-arrow-left fs-4 me-1"><span class="path1"></span><span
                                        class="path2"></span></i> Previous
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                <span class="indicator-label">
                                    Submit
                                    <i class="ki-duotone ki-arrow-right fs-4 ms-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                Continue
                                <i class="ki-duotone ki-arrow-right fs-4 ms-1"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Body-->
</div>
