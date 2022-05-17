<?php
	//HEADER
	Flight::set('lang.header_toggle_nav','Rozwiń menu');
	Flight::set('lang.header_search_placeholder','Wpisz id notatki');
	Flight::set('lang.header_search_btn','»');
	
	//NAV_GUEST
	Flight::set('lang.nav_guest_login','Zaloguj się');
	Flight::set('lang.nav_guest_register','Stwórz konto');
	
	//NAV USER
	Flight::set('lang.nav_user_logout','Wyloguj');
	Flight::set('lang.nav_user_my_notes','Moje notatki');
	Flight::set('lang.nav_user_account_settings','Ustawienia konta');
	Flight::set('lang.nav_user_my_categories','Zarządzaj kategoriami');
	
	//GUEST_REGISTER
	Flight::set('lang.guest_register_title','Tworzenie nowego konta');
	Flight::set('lang.guest_register_title2','Tworzenie nowego konta');
	Flight::set('lang.guest_register_desc','Dzieli Cię tylko krok od swobodnego notowania!');
	Flight::set('lang.guest_register_email','Twój adres email');
	Flight::set('lang.guest_register_email_placeholder','Wprowadź swój adres email');
	Flight::set('lang.guest_register_nick','Twój nick');
	Flight::set('lang.guest_register_nick_info','6-15 znaków.');
	Flight::set('lang.guest_register_nick_placeholder','Jak się nazywasz? :)');
	Flight::set('lang.guest_register_password','Twoje hasło');
	Flight::set('lang.guest_register_password_placeholder','Wprowadź swoje hasło');
	Flight::set('lang.guest_register_password_info','Minimum 6 znaków. W tym minimum 1 duża litera, 1 mała litera oraz 1 znak specjalny.');
	Flight::set('lang.guest_register_password_preg','(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-]).{6,}');
	Flight::set('lang.guest_register_repassword','Powtórz twoje hasło');
	Flight::set('lang.guest_register_repassword_placeholder','Powtórz swoje hasło');
	Flight::set('lang.guest_register_btn','Stwórz konto');
	Flight::set('lang.guest_register_password_not_match','Podane hasła różnią się.');
	//--
	Flight::set('lang.guest_register_not_isset_email','Nie podano adresu email.');
	Flight::set('lang.guest_register_invalid_email','Podany adres email jest nieprawidłowy.');
	Flight::set('lang.guest_register_not_isset_password','Nie podano hasła.');
	Flight::set('lang.guest_register_password_secure_error','Podane hasło nie spełnia wymagań bezpieczeństwa.');
	Flight::set('lang.guest_register_not_isset_nick','Nie podano nicku.');
	Flight::set('lang.guest_register_nick_not_pass','Nick może mieć minimalnie 3, a maksymalnie 15 znaków.');
	Flight::set('lang.guest_register_unknown_error','Błąd systemu. Konto nie mogło zostać stworzone.');
	Flight::set('lang.guest_register_not_unique_email','Na podany adres email zostało już utworzone konto.');
	Flight::set('lang.guest_register_not_unique_nick','Ten nick jest już zajęty :(');
	Flight::set('lang.guest_register_success','Konto zostało utworzone :)');
	
	//GUEST_LOGIN
	Flight::set('lang.guest_login_title','Logowanie');
	Flight::set('lang.guest_login_title2','Logowanie');
	Flight::set('lang.guest_login_desc','Zaloguj się, aby móc szybko i wygodnie notować!');
	Flight::set('lang.guest_login_email','Adres email');
	Flight::set('lang.guest_login_email_placeholder','Wprowadź swój adres email');
	Flight::set('lang.guest_login_password','Hasło');
	Flight::set('lang.guest_login_password_placeholder','Wprowadź hasło do Twojego konta');
	Flight::set('lang.guest_login_button','Zaloguj się');
	Flight::set('lang.guest_login_error','Podana kombinacja loginu i hasła jest nieprawidłowa.');
	
	//USER_SETTINGS
	Flight::set('lang.user_settings_title','Ustawienia konta');
	Flight::set('lang.user_settings_title2','Ustawienia konta');
	Flight::set('lang.user_settings_chpass_title','Zmiana hasła');
	Flight::set('lang.user_settings_chpass_old_pass','Obecne hasło');
	Flight::set('lang.user_settings_chpass_old_pass_placeholder','Wprowadź obecne hasło');
	Flight::set('lang.user_settings_chpass_new_pass','Nowe hasło');
	Flight::set('lang.user_settings_chpass_new_pass_placeholder','Wprowadź nowe hasło');
	Flight::set('lang.user_settings_chpass_repass','Powtórz nowe hasło');
	Flight::set('lang.user_settings_chpass_repass_placeholder','Wprowadź jeszcze raz nowe hasło');
	Flight::set('lang.user_settings_save_button','Zapisz');
	Flight::set('lang.user_settings_chpass_success','Pomyślnie zaktualizowano hasło.');
	Flight::set('lang.user_settings_chpass_old_pass_error','Wprowadzono niepoprawne aktualne hasło.');
	Flight::set('lang.user_settings_chpass_unkown_error','Błąd systemu.');
	
	//APP_NOTES
	Flight::set('lang.notes_title','Tworzenie notatki');
	Flight::set('lang.notes_guest_desc','Zaloguj się, aby móc lepiej zarządzać swoimi notatkami!');
	Flight::set('lang.notes_empty_notes','Nie można zapisać pustej notatki!');
	Flight::set('lang.notes_unkown_error','Błąd systemu.');
	Flight::set('lang.notes_save_button','Zapisz notusia');
	Flight::set('lang.notes.postview_title','Notatka: ');
	Flight::set('lang.notes.postview_noaccess','Nie masz dostępu do tej notatki');
	Flight::set('lang.notes.postview_copiedurl','Skopiowano do schowka');
	Flight::set('lang.notes.postview_copyurl','Kopiuj adres do schowka');
	Flight::set('lang.notes.postview_showtxt','Wyświetl jako txt');
	Flight::set('lang.notes.postview_addnew','Stwórz nową notatkę');
	Flight::set('lang.notes.maxcharsdesc','Limit znaków: 500. Zaloguj się, aby notować bez limitu!');
	Flight::set('lang.notes.postview_notexist_title','Brak notatki');
	Flight::set('lang.notes.postview_notexist','<p>Taka notatka nie istnieje :(</p>
	<a href="'.Flight::get('app.url').Flight::get('app.path.notes').'" class="btn btn-danger">'.Flight::get('lang.notes.postview_addnew').'</a>');
	
	//posts
	Flight::set('lang.categories_title','Zarządzanie kategoriami');
	Flight::set('lang.my_posts_title','Moje notatki');
	Flight::set('lang.share_all','Udostępnij wszystkim');
	Flight::set('lang.not_share','Tylko dla mnie');
	Flight::set('lang.public','Publiczna');
	Flight::set('lang.private','Prywatna');
	Flight::set('lang.default_category','Domyślna kategoria');
	Flight::set('lang.category:','Kategoria: ');
	
	//categories
	Flight::set('lang.new_category_title','Dodawanie nowej kategorii');
	Flight::set('lang.new_category_name','Tytuł kategorii');
	Flight::set('lang.add_category','Dodaj kategorię');
	Flight::set('lang.mgmt_categories','Zarządzaj istniejącymi kategoriami');
	Flight::set('lang.del_category','Usuń kategorię');
	Flight::set('lang.clear_category','Wyczyść kategorię');
	Flight::set('lang.save_category','Zapisz');
	
	//404
	Flight::set('lang.404_title','Błąd');
	Flight::set('lang.404_title2','Błąd 404');
	Flight::set('lang.404_desc','Strona, której szukasz nie istnieje :(');
	Flight::set('lang.404_backhome','Powrót do strony głownej');
	
	//db
	Flight::set('lang.db_title','Błąd systemu');
	Flight::set('lang.db_title2','Błąd połączenia z bazą danych');
	Flight::set('lang.db_desc','Przykro nam, ale strona obecnie ma problemy z połączeniem z bazą danych.<br>Wróć niebawem!');
	
	
	
	
?>