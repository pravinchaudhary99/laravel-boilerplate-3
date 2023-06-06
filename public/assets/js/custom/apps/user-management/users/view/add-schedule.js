"use strict";

// Class definition
var KTUsersAddSchedule = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_add_schedule');
    const form = element.querySelector('#kt_modal_add_schedule_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddSchedule = () => {

        // Init flatpickr -- for more info: https://flatpickr.js.org/
        $("#kt_modal_add_schedule_datepicker").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        // Init tagify -- for more info: https://yaireo.github.io/tagify/
        var user_list = $(".all_user_list").val();
        var list_data = Array()
        if(user_list != undefined || user_list != ""){
            list_data = user_list.replace(/'/g, '"');
            list_data = JSON.parse(list_data);
        }
        const tagifyInput = form.querySelector('#kt_modal_add_schedule_tagify');
        new Tagify(tagifyInput, {
            whitelist: list_data,
            maxTags: 10,
            dropdown: {
                maxItems: 20,           // <- mixumum allowed rendered suggestions
                classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0,             // <- show suggestions on focus
                closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
            }
        });

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		var validator = FormValidation.formValidation(
			form,
			{
				fields: {
					'event_datetime': {
						validators: {
							notEmpty: {
								message: 'Event date & time is required'
							}
						}
					},
                    'event_name': {
						validators: {
							notEmpty: {
								message: 'Event name is required'
							}
						}
					},
                    'event_org': {
						validators: {
							notEmpty: {
								message: 'Event organiser is required'
							}
						}
					},
                    'event_invitees': {
						validators: {
							notEmpty: {
								message: 'Event invitees is required'
							}
						}
					},
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		);

        // Revalidate country field. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="event_invitees"]')).on('change', function () {
            // Revalidate the field when an option is chosen
            validator.revalidateField('event_invitees');
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });


    }

    return {
        // Public functions
        init: function () {
            initAddSchedule();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersAddSchedule.init();
});