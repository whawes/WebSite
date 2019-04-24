$(function() {

	$("#firstname_error_message").hide();
	$("#lastname_error_message").hide();
	$("#phone_error_message").hide();
	$("#country_error_message").hide();
	$("#mail_error_message").hide();
	$("#street_error_message").hide();
	$("#city_error_message").hide();
	$("#cp_error_message").hide();
	$("#livraison_error_message").hide();

	var error_livraison ="";
	var error_lastname = "";
	var error_firstname = "";
	var error_phone = "";
	var error_street = "";
	var error_mail = "";
	var error_cp = "";
	var error_country = "";
	var error_city = "";

	$("#form_firstname").focusout(function() {

		check_firstname();
		
	});
	$("#form_lastname").focusout(function() {

		check_lastname();

	});

	$("#form_phone").focusout(function() {

		check_phone();
		
	});
	$("#form_country").focusout(function() {

		check_country();

	});
	$("#form_city").focusout(function() {

		check_city();
		
	});

	$("#form_mail").focusout(function() {

		check_mail();
		
	});
	$("#form_street").focusout(function() {

		check_street();

	});
	$("#form_cp").focusout(function() {

		check_cp();

	});


	function check_lastname() {
	
		var lastname_length = $("#form_lastname").val().length;
		
		if(lastname_length < 5 || lastname_length > 20) {
			$("#lastname_error_message").html("Should be between 5-20 characters");
			$("#lastname_error_message").show();
			error_lastname = true;
		} else {
			$("#lastname_error_message").hide();
		}
	
	}
	function check_firstname() {

		var firstname_length = $("#form_firstname").val().length;

		if(firstname_length < 5 || firstname_length > 20) {
			$("#firstname_error_message").html("Should be between 5-20 characters");
			$("#firstname_error_message").show();
			error_firstname = true;
		} else {
			$("#firstname_error_message").hide();
		}

	}

	function check_phone() {
	
		var phone_length = $("#form_phone").val().length;
		
		if(phone_length !=8 ) {
			$("#phone_error_message").html("At least 8 characters");
			$("#phone_error_message").show();
			error_phone = true;


		} else {

			$("#phone_error_message").hide();
		}
	
	}
	function check_cp() {

		var cp_length = $("#form_cp").val().length;

		if(cp_length != 4) {
			$("#cp_error_message").html("Invalid Code Postal must have 4 characters");
			$("#cp_error_message").show();
			error_cp = true;
		} else {
			$("#cp_error_message").hide();
		}

	}

	function check_street() {

		var street_length = $("#form_street").val().length;

		
		if(street_length < 4 ) {
			$("#street_error_message").html("Invalid street");
			$("#street_error_message").show();
			error_street = true;
		} else {
			$("#street_error_message").hide();
		}
	
	}
	function check_country() {

		var country_length = $("#form_country").val().length;


		if(country_length < 4 ) {
			$("#country_error_message").html("Invalid Country");
			$("#country_error_message").show();
			error_country = true;
		} else {
			$("#country_error_message").hide();
		}

	}
	function check_city() {

		var city_length = $("#form_city").val().length;


		if(city_length < 4 ) {
			$("#city_error_message").html("Invalid City");
			$("#city_error_message").show();
			error_city = true;
		} else {
			$("#city_error_message").hide();
		}

	}

	function check_mail() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_mail").val())) {
			$("#mail_error_message").hide();
		} else {
			$("#mail_error_message").html("Invalid email address");
			$("#mail_error_message").show();
			error_mail = true;
		}
	
	}
	function check_livraison() {

		if($('#form_livraison').is(':checked') || $('#form_livraison1').is(':checked') || $('#form_livraison2').is(':checked')  ) {
			$("#livraison_error_message").hide();

		} else {
			$("#livraison_error_message").html("il faut choisie au mois une methode");
			$("#livraison_error_message").show();
			error_livraison = true;

		}

	}

	$("#Commande_form").submit(function() {
											
		error_lastname = false;
		error_firstname = false;
		error_phone = false;
		error_country = false;
		error_mail = false;
		error_city = false;
		error_cp = false;
		error_street = false;
		error_livraison = false;
											
		check_firstname();
		check_lastname();
		check_phone();
		check_street();
		check_mail();
		check_cp();
		check_city();
		check_country();
		check_livraison();
		
		if(error_firstname == false && error_livraison == false && error_lastname == false && error_phone == false && error_country == false && error_mail == false && error_city == false && error_cp == false && error_street == false) {
			return true;
		} else {
			return false;	
		}

	});

});
