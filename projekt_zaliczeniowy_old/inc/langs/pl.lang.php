<?php
	$lang->set('test','test');
	
	
	//HEADER
	$lang->set('header_toggle_nav','Rozwiń menu');
	$lang->set('header_search_placeholder','Wpisz id lub tytuł notatki :)');
	$lang->set('header_search_btn','»');
	
	//NAV_GUEST
	$lang->set('nav_guest_login','Zaloguj się');
	$lang->set('nav_guest_register','Stwórz konto');
	
	//GUEST_REGISTER
	$lang->set('guest_register_title','Notuś - Tworzenie nowego konta');
	$lang->set('guest_register_title2','Tworzenie nowego konta');
	$lang->set('guest_register_desc','Dzieli Cię tylko krok od swobodnego notowania!');
	$lang->set('guest_register_email','Twój adres email');
	$lang->set('guest_register_email_placeholder','Wprowadź swój adres email');
	$lang->set('guest_register_nick','Twój nick');
	$lang->set('guest_register_nick_info','6-15 znaków.');
	$lang->set('guest_register_nick_placeholder','Jak się nazywasz? :)');
	$lang->set('guest_register_password','Twoje hasło');
	$lang->set('guest_register_password_placeholder','Wprowadź swoje hasło');
	$lang->set('guest_register_password_info','Minimum 6 znaków. W tym minimum 1 duża litera, 1 mała litera oraz 1 znak specjalny.');
	$lang->set('guest_register_password_preg','(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-]).{6,}');
	$lang->set('guest_register_repassword','Powtórz twoje hasło');
	$lang->set('guest_register_repassword_placeholder','Powtórz swoje hasło');
	$lang->set('guest_register_btn','Stwórz konto');
	$lang->set('guest_register_password_not_match','Podane hasła różnią się.');
	//--
	$lang->set('guest_register_not_isset_email','Nie podano adresu email.');
	$lang->set('guest_register_invalid_email','Podany adres email jest nieprawidłowy.');
	$lang->set('guest_register_not_isset_password','Nie podano hasła.');
	$lang->set('guest_register_password_secure_error','Podane hasło nie spełnia wymagań bezpieczeństwa.');
	$lang->set('guest_register_not_isset_nick','Nie podano nicku.');
	$lang->set('guest_register_nick_not_pass','Nick może mieć minimalnie 3, a maksymalnie 15 znaków.');
	$lang->set('guest_register_unknown_error','Błąd systemu. Konto nie mogło zostać stworzone.');
	$lang->set('guest_register_not_unique_email','Na podany adres email jest już utworzone konto.');
	$lang->set('guest_register_not_unique_nick','Taki nick jest już zajęty :(');
	$lang->set('guest_register_success','Konto zostało utworzone :)');
	
	//GUEST_LOGIN
	$lang->set('guest_login_title','Notuś - Logowanie');
	$lang->set('guest_login_title2','Logowanie');
	$lang->set('guest_login_desc','Zaloguj się, aby móc szybko i wygodnie notować!');
	$lang->set('guest_login_email','Adres email');
	$lang->set('guest_login_email_placeholder','Wprowadź swój adres email');
	$lang->set('guest_login_password','Hasło');
	$lang->set('guest_login_password_placeholder','Wprowadź hasło do Twojego konta');
	$lang->set('guest_login_button','Zaloguj się');
	$lang->set('guest_login_error','Podana kombinacja loginu i hasła jest nieprawidłowa.');
	
	
	
	//USER_SETTINGS
	$lang->set('user_settings_title','Notuś - Ustawienia konta');
	$lang->set('user_settings_title2','Ustawienia konta');
	$lang->set('user_settings_chpass_title','Zmiana hasła');
	$lang->set('user_settings_chpass_old_pass','Obecne hasło');
	$lang->set('user_settings_chpass_old_pass_placeholder','Wprowadź obecne hasło');
	$lang->set('user_settings_chpass_new_pass','Nowe hasło');
	$lang->set('user_settings_chpass_new_pass_placeholder','Wprowadź nowe hasło');
	$lang->set('user_settings_chpass_repass','Powtórz nowe hasło');
	$lang->set('user_settings_chpass_repass_placeholder','Wprowadź jeszcze raz nowe hasło');
	$lang->set('user_settings_save_button','Zapisz');
	$lang->set('user_settings_chpass_success','Pomyślnie zaktualizowano hasło.');
	$lang->set('user_settings_chpass_old_pass_error','Wprowadzono niepoprawne aktualne hasło.');
	$lang->set('user_settings_chpass_unkown_error','Błąd systemu.');
	
	
	//APP_NOTES
	$lang->set('notes_guest_desc','Zaloguj się, aby móc lepiej zarządzać swoimi notatkami!');
	$lang->set('notes_empty_notes','Nie można zapisać pustej notatki!');
	$lang->set('notes_unkown_error','Błąd systemu.');
	$lang->set('notes_save_button','Zapisz notusia');