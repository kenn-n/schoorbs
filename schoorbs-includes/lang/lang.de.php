<?php
/**
 * This file contains PHP code that specifies language specific strings
 * The default strings come from lang.en, and anything in a locale
 * specific file will overwrite the default. This is a German file.
 *  
 * @author Michael Redinger, Uwe L. Korn <uwelk@xhochy.org>, jberanek
 * @package Schoorbs
 * @subpackage Language
 */

# The charset to use in "Content-type" header
$vocab["charset"]            = "utf-8";

# Used in style.inc
$vocab["mrbs"]               = "Raumbuchungssystem Schoorbs";

# Used in functions.inc
$vocab["report"]             = "Bericht";
$vocab["admin"]              = "Admin";
$vocab["help"]               = "Hilfe";
$vocab["search"]             = "Suche";
$vocab["not_php3"]           = "<h1>WARNUNG: Funktioniert warscheinlich nicht mit PHP3</h1>";

# Used in day.php
$vocab["bookingsfor"]        = "Einträge für";
$vocab["bookingsforpost"]    = "";
$vocab["areas"]              = "Bereiche";
$vocab["daybefore"]          = "gehe zum vorherigen Tag";
$vocab["dayafter"]           = "gehe zum nächsten Tag";
$vocab["gototoday"]          = "gehe zum heutigen Tag";
$vocab["goto"]               = "Start";
$vocab["highlight_line"]     = "Markieren Sie diese Zeile";
$vocab["click_to_reserve"]   = "Click on the cell to make a reservation.";

# Used in trailer.inc
$vocab["viewday"]            = "Zeige Tag";
$vocab["viewweek"]           = "Zeige Woche";
$vocab["viewmonth"]          = "Zeige Monat";
$vocab["ppreview"]           = "Druckansicht";

# Used in edit_entry.php
$vocab["addentry"]           = "Eintrag hinzufügen";
$vocab["editentry"]          = "Eintrag ändern";
$vocab["editseries"]         = "Alle Einträge ändern";
$vocab["namebooker"]         = "Kurzbeschreibung ";
$vocab["fulldescription"]    = "Vollständige Beschreibung:<br />&nbsp;&nbsp;(Anzahl der Teilnehmer etc;)";
$vocab["date"]               = "Tag:";
$vocab["start_date"]         = "Anfangsdatum:";
$vocab["end_date"]           = "Enddatum:";
$vocab["time"]               = "Zeit:";
$vocab["period"]             = "Period:";
$vocab["duration"]           = "Dauer:";
$vocab["seconds"]            = "Sekunden";
$vocab["minutes"]            = "Minuten";
$vocab["hours"]              = "Stunden";
$vocab["days"]               = "Tage";
$vocab["weeks"]              = "Wochen";
$vocab["years"]              = "Jahre";
$vocab["periods"]            = "periods";
$vocab["all_day"]            = "Ganztägig";
$vocab["type"]               = "Art:";
$vocab["internal"]           = "Intern";
$vocab["external"]           = "Extern";
$vocab["save"]               = "Speichern";
$vocab["rep_type"]           = "Art der Wiederholung:";
$vocab["rep_type_0"]         = "Keine";
$vocab["rep_type_1"]         = "täglich";
$vocab["rep_type_2"]         = "wöchentlich";
$vocab["rep_type_3"]         = "monatlich";
$vocab["rep_type_4"]         = "jährlich";
$vocab["rep_type_5"]         = "monatlich, entsprechender Tag";
#$vocab["rep_type_6"]         = "jede n-te Woche";
$vocab["rep_end_date"]       = "Ende der Wiederholung:";
$vocab["rep_rep_day"]        = "Tag der Wiederholung:";
$vocab["rep_for_weekly"]     = "(für wöchentlich)";
$vocab["rep_freq"]           = "Häufigkeit:";
$vocab["rep_num_weeks"]      = "Anzahl Wochen";
$vocab["rep_for_nweekly"]    = "(für n-te Woche)";
$vocab["ctrl_click"]         = "Strg-Click um mehr als einen Raum auszuwählen";
$vocab["entryid"]            = "Entry ID ";
$vocab["repeat_id"]          = "Repeat ID "; 
$vocab["you_have_not_entered"] = "Sie haben folgendes Feld nicht ausgefüllt :";
$vocab["you_have_not_selected"] = "You have not selected a";
$vocab["valid_room"]         = "room.";
$vocab["valid_time_of_day"]  = "Gültige Uhrzeit.";
$vocab["brief_description"]  = "Kurzbeschreibung.";
$vocab["useful_n-weekly_value"] = "useful n-weekly value.";

# Used in view_entry.php
$vocab["description"]        = "Beschreibung:";
$vocab["room"]               = "Raum";
$vocab["createdby"]          = "Erstellt von:";
$vocab["lastupdate"]         = "Letzte Änderung:";
$vocab["deleteentry"]        = "Eintrag löschen";
$vocab["deleteseries"]       = "Alle Einträge löschen";
$vocab["confirmdel"]         = "Sind Sie sicher,\\ndass Sie diesen Eintrag\\nlöschen wollen?\\n\\n";
$vocab["returnprev"]         = "Zurück zur vorigen Seite";
$vocab["invalid_entry_id"]   = "Invalid entry id.";
$vocab["invalid_series_id"]  = "Invalid series id.";

# Used in edit_entry_handler.php
$vocab["error"]              = "Fehler";
$vocab["sched_conflict"]     = "Konflikt in der Planung";
$vocab["conflict"]           = "Der neue Eintrag hat einen Konflikt mit folgenden Einträgen:";
$vocab["too_may_entrys"]     = "Die gewählten Optionen würden zu viele Einträge erzeugen.<BR>Ändern Sie bitte die Optionen!";
$vocab["returncal"]          = "Zurück zur Kalenderansicht";
$vocab["failed_to_acquire"]  = "Konnte nicht exclusiv auf die Datenbank zugreifen"; 
$vocab["mail_subject_entry"] = $mail["subject"];
$vocab["mail_body_new_entry"] = $mail["new_entry"];
$vocab["mail_body_del_entry"] = $mail["deleted_entry"];
$vocab["mail_body_changed_entry"] = $mail["changed_entry"];
$vocab["mail_subject_delete"] = $mail["subject_delete"];

# Authentication stuff
$vocab["accessdenied"]       = "Zugang verweigert";
$vocab["norights"]           = "Sie haben keine Berechtigung, diesen Eintrag zu ändern";
$vocab["please_login"]       = "Bitte einloggen";
$vocab["user_name"]          = "Benutzername";
$vocab["user_password"]      = "Passwort";
$vocab["unknown_user"]       = "Unbekannter Benutzer";
$vocab["you_are"]            = "Sie sind";
$vocab["login"]              = "Einloggen";
$vocab["logoff"]             = "Ausloggen";

# Authentication database
$vocab["user_list"]          = "Benutzerliste";
$vocab["edit_user"]          = "Bearbeite Benutzer";
$vocab["delete_user"]        = "Lösche diesen Benutzer";
#$vocab["user_name"]         = Use the same as above, for consistency.
#$vocab["user_password"]     = Use the same as above, for consistency.
$vocab["user_email"]         = "Email Addresse";
$vocab["password_twice"]     = "Falls Sie Ihr Passwort ändern wollen, geben Sie das neue Passwort zwei mal ein.";
$vocab["passwords_not_eq"]   = "Fehler: Die Passwörter stimmen nicht überein.";
$vocab["add_new_user"]       = "Benutzer hinzufügen";
$vocab["rights"]             = "Rechte";
$vocab["action"]             = "Action";
$vocab["user"]               = "Benutzer";
$vocab["administrator"]      = "Administrator";
$vocab["unknown"]            = "Unbekannt";
$vocab["ok"]                 = "OK";
$vocab["show_my_entries"]    = "Click to display all my upcoming entries";

# Used in search.php
$vocab["invalid_search"]     = "Leerer oder ungültiger Suchbegriff.";
$vocab["search_results"]     = "Suchergebnis für:";
$vocab["nothing_found"]      = "Keine passenden Suchergebnisse gefunden.";
$vocab["records"]            = "Ergebnisse ";
$vocab["through"]            = " bis ";
$vocab["of"]                 = " von ";
$vocab["previous"]           = "Vorige";
$vocab["next"]               = "Nächste";
$vocab["entry"]              = "Eintrag";
$vocab["view"]               = "Öffnen";
$vocab["advanced_search"]    = "Erweiterte Suche";
$vocab["search_button"]      = "Suche";
$vocab["search_for"]         = "Suche nach";
$vocab["from"]               = "Von";

# Used in report.php
$vocab["report_on"]          = "Bericht über Termine:";
$vocab["report_start"]       = "Bericht Beginn:";
$vocab["report_end"]         = "Bericht Ende:";
$vocab["match_area"]         = "Suche Bereich:";
$vocab["match_room"]         = "Suche Raum:";
$vocab["match_type"]         = "Nach typ:";
$vocab["ctrl_click_type"]    = "Strg-Click um mehr als einen Typus auszuwählen";
$vocab["match_entry"]        = "Suche Kurzbeschreibung:";
$vocab["match_descr"]        = "Suche Beschreibung:";
$vocab["include"]            = "Generiere:";
$vocab["report_only"]        = "nur Bericht";
$vocab["summary_only"]       = "nur Zusammenfassung";
$vocab["report_and_summary"] = "Bericht und Zusammenfassung";
$vocab["summarize_by"]       = "Zusammenfassung nach:";
$vocab["sum_by_descrip"]     = "Kurzbeschreibung";
$vocab["sum_by_creator"]     = "Ersteller";
$vocab["entry_found"]        = "Eintrag gefunden";
$vocab["entries_found"]      = "Einträge gefunden";
$vocab["summary_header"]     = "Stundenzusammenfassung der Einträge";
$vocab["summary_header_per"] = "Summary of (Entries) Periods";
$vocab["total"]              = "Gesamt";
$vocab["submitquery"]        = "Bericht erstellen";
$vocab["sort_rep"]           = "Sortiere Report nach:";
$vocab["sort_rep_time"]      = "Startzeit/Datum ";
$vocab["rep_dsp"]            = "zeige im Report:";
$vocab["rep_dsp_dur"]        = "Dauer";
$vocab["rep_dsp_end"]        = "Endzeit";

# Used in week.php
$vocab["weekbefore"]         = "gehe zur vorigen Woche";
$vocab["weekafter"]          = "gehe zur nächsten Woche";
$vocab["gotothisweek"]       = "gehe zu dieser Woche";

# Used in month.php
$vocab["monthbefore"]        = "gehe zum vorigen Monat";
$vocab["monthafter"]         = "gehe zum nächsten Monat";
$vocab["gotothismonth"]      = "gehe zu diesen Monat";

# Used in {day week month}.php
$vocab["no_rooms_for_area"]  = "Der Bereich enthält keinen Raum";

# Used in admin.php
$vocab["edit"]               = "Bearbeiten";
$vocab["delete"]             = "Löschen";
$vocab["rooms"]              = "Räume";
$vocab["in"]                 = "in";
$vocab["noareas"]            = "Keine Bereiche";
$vocab["addarea"]            = "Bereich hinzufügen";
$vocab["name"]               = "Name";
$vocab["noarea"]             = "Kein Bereich ausgewählt";
$vocab["browserlang"]        = "Die Spracheinstellung Ihres Browsers ist";
$vocab["postbrowserlang"]    = ".";
$vocab["addroom"]            = "Raum hinzufügen";
$vocab["capacity"]           = "Kapazität";
$vocab["norooms"]            = "Keine Räume vorhanden.";
$vocab["administration"]     = "Administration";

# Used in edit_area_room.php
$vocab["editarea"]           = "Bereich bearbeiten";
$vocab["change"]             = "Ändern";
$vocab["backadmin"]          = "Zurück zu Admin";
$vocab["editroomarea"]       = "Raum- oder Bereichsbeschreibung bearbeiten";
$vocab["editroom"]           = "Raum bearbeiten";
$vocab["update_room_failed"] = "Raum aktualisieren gescheitert: ";
$vocab["error_room"]         = "Error: Raum ";
$vocab["not_found"]          = " nicht gefunden";
$vocab["update_area_failed"] = "Update area failed: ";
$vocab["error_area"]         = "Fehler: Bereich ";
$vocab["room_admin_email"]   = "E-mail des Raumadministrators";
$vocab["area_admin_email"]   = "E-mail des Bereichsadministrators";
$vocab["invalid_email"]      = "Ungültige e-mail Adresse !";

# Used in del.php
$vocab["deletefollowing"]    = "Dadurch werden die folgenden Einträge gelöscht";
$vocab["sure"]               = "Sind Sie sicher?";
$vocab["YES"]                = "JA";
$vocab["NO"]                 = "NEIN";
$vocab["delarea"]            = "Sie müssen alle Räume dieses Bereiches löschen, damit Sie den Bereich löschen können<p>";

# Used in help.php
$vocab["about_mrbs"]         = "Über Schoorbs";
$vocab["database"]           = "Datenbank: ";
$vocab["system"]             = "System: ";
$vocab["please_contact"]     = "Bitte kontaktieren Sie ";
$vocab["for_any_questions"]  = "für Fragen die hier nicht beantwortet sind.";

# Used in mysql.inc AND pgsql.inc
$vocab["failed_connect_db"]  = "Fataler Fehler: Kann nicht an Datenbank anbinden";

?>
