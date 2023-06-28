"use strict";

// Class definition
var KTAppInvoicesCreate = function () {
    var form;

	// Private functions
	var updateTotal = function() {
		var items = [].slice.call(form.querySelectorAll('[data-kt-element="items"] [data-kt-element="item"]'));
		var grandTotal = 0;

		var format = wNumb({
			//prefix: '$ ',
			decimals: 2,
			thousand: ','
		});

		items.map(function (item) {
            var quantity = item.querySelector('[data-kt-element="quantity"]');
			var price = item.querySelector('[data-kt-element="price"]');

			var priceValue = format.from(price.value);
			priceValue = (!priceValue || priceValue < 0) ? 0 : priceValue;

			var quantityValue = parseInt(quantity.value);
			quantityValue = (!quantityValue || quantityValue < 0) ?  1 : quantityValue;

			price.value = format.to(priceValue);
			quantity.value = quantityValue;

			item.querySelector('[data-kt-element="total"]').innerText = format.to(priceValue * quantityValue);

			grandTotal += priceValue * quantityValue;
		});


		form.querySelector('[data-kt-element="sub-total"]').innerText = format.to(grandTotal);
		form.querySelector('[data-kt-element="grand-total"]').innerText = format.to(grandTotal);
		other_price();
	}

	var other_price = function(){
		var format = wNumb({
			//prefix: '$ ',
			decimals: 2,
			thousand: ','
		});

		var tax = form.querySelector('[data-kt-element="tax"]');
		var discount = form.querySelector('[data-kt-element="discount"]');

		var taxValue = format.from(tax.value);
		taxValue = (!taxValue || taxValue < 0) ? 0 : taxValue;

		var discountValue = format.from(discount.value);
		discountValue = (!discountValue || discountValue < 0) ?  0 : discountValue;

		tax.value = format.to(taxValue);
		discount.value = format.to(discountValue);

		var sub_total = form.querySelector('[data-kt-element="sub-total"]');

		var subTotalV = format.from(sub_total.innerText);
		subTotalV = (!subTotalV || subTotalV < 0) ? 0 : subTotalV;

		var final_total = subTotalV;
		var final_total = final_total + ((subTotalV * tax.value)/100);
		var final_total = final_total - ((subTotalV * discount.value)/100);
		form.querySelector('[data-kt-element="grand-total"]').innerText = format.to(final_total);
	}


	var handleEmptyState = function() {
		if (form.querySelectorAll('[data-kt-element="items"] [data-kt-element="item"]').length === 0) {
			var item = form.querySelector('[data-kt-element="empty-template"] tr').cloneNode(true);
			form.querySelector('[data-kt-element="items"] tbody').appendChild(item);
		} else {
			KTUtil.remove(form.querySelector('[data-kt-element="items"] [data-kt-element="empty"]'));
		}
	}

	var handeForm = function (element) {
		// Add item
		form.querySelector('[data-kt-element="items"] [data-kt-element="add-item"]').addEventListener('click', function(e) {
			e.preventDefault();

			var item = form.querySelector('[data-kt-element="item-template"] tr').cloneNode(true);

			form.querySelector('[data-kt-element="items"] tbody').appendChild(item);

			handleEmptyState();
			updateTotal();
		});

		// Remove item
		KTUtil.on(form, '[data-kt-element="items"] [data-kt-element="remove-item"]', 'click', function(e) {
			e.preventDefault();

			KTUtil.remove(this.closest('[data-kt-element="item"]'));

			handleEmptyState();
			updateTotal();
		});

		// Handle price and quantity changes
		KTUtil.on(form, '[data-kt-element="items"] [data-kt-element="quantity"], [data-kt-element="items"] [data-kt-element="price"]', 'change', function(e) {
			e.preventDefault();

			updateTotal();
		});

		KTUtil.on(form,'[data-kt-element="tax"]', 'change', function(e) {
			e.preventDefault();

			other_price();
		});

		KTUtil.on(form,'[data-kt-element="discount"]', 'change', function(e) {
			e.preventDefault();

			other_price();
		});
	}

	var initForm = function(element) {
		// Due date. For more info, please visit the official plugin site: https://flatpickr.js.org/
		var invoiceDate = $(form.querySelector('[name="start_date"]'));
		invoiceDate.flatpickr({
			enableTime: false,
			dateFormat: "Y-m-d",
		});

        // Due date. For more info, please visit the official plugin site: https://flatpickr.js.org/
		var dueDate = $(form.querySelector('[name="due_date"]'));
		dueDate.flatpickr({
			enableTime: false,
			dateFormat: "Y-m-d",
		});
	}

	// Public methods
	return {
		init: function(element) {
            form = document.querySelector('#kt_invoice_form');

			handeForm();
            initForm();
			updateTotal();
        }
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppInvoicesCreate.init();
});
