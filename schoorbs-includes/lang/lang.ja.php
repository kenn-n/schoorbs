<?php
# $Id: lang.en,v 1.26.2.2 2006/10/09 15:53:59 jberanek Exp $

# This file contains PHP code that specifies language specific strings
# The default strings come from lang.en, and anything in a locale
# specific file will overwrite the default. This is a US/UK English file.
#
#
#
#
# This file is PHP code. Treat it as such.

# The charset to use in "Content-type" header
$vocab["charset"]            = "utf-8";

# Used in style.inc
$vocab["mrbs"]               = "Schoorbs - Room Booking System";

# Used in functions.inc
$vocab["report"]             = "報告";
$vocab["admin"]              = "管理";
$vocab["help"]               = "ヘルプ";
$vocab["search"]             = "検索";
$vocab["not_php3"]             = "<h1>警告: このスクリプトは、PHP3ではおそらく動作しません</h1>";

# Used in day.php
$vocab["bookingsfor"]        = "";
$vocab["bookingsforpost"]    = "の予約です"; # Goes after the date
$vocab["areas"]              = "会議室";
$vocab["daybefore"]          = "前の日に移動";
$vocab["dayafter"]           = "次の日に移動";
$vocab["gototoday"]          = "本日に移動";
$vocab["goto"]               = "移動";
$vocab["highlight_line"]     = "この行を強調";
$vocab["click_to_reserve"]   = "予約を入れたいセルをクリックしてください.";

# Used in trailer.inc
$vocab["viewday"]            = "この日の予約";
$vocab["viewweek"]           = "週間予約";
$vocab["viewmonth"]          = "月間予約";
$vocab["ppreview"]           = "印刷向けページ";

# Used in edit_entry.php
$vocab["addentry"]           = "予約登録";
$vocab["editentry"]          = "予約の編集";
$vocab["editseries"]         = "定期予約の編集";
$vocab["namebooker"]         = "使用者:";
$vocab["fulldescription"]    = "詳細な説明:<br />&nbsp;&nbsp;(人数,<br />&nbsp;&nbsp;内部会議/外部会議 等)";
$vocab["date"]               = "日付:";
$vocab["start_date"]         = "開始時刻:";
$vocab["end_date"]           = "終了時刻:";
$vocab["time"]               = "時間:";
$vocab["period"]             = "期間:";
$vocab["duration"]           = "必要な時間:";
$vocab["seconds"]            = "秒";
$vocab["minutes"]            = "分";
$vocab["hours"]              = "時間";
$vocab["days"]               = "日";
$vocab["weeks"]              = "週";
$vocab["years"]              = "年";
$vocab["periods"]            = "期間";
$vocab["all_day"]            = "終日";
$vocab["type"]               = "会議の種類:";
$vocab["internal"]           = "社内会議";
$vocab["external"]           = "電話/Web会議";
$vocab["save"]               = "保存";
$vocab["rep_type"]           = "繰り返しの様式:";
$vocab["rep_type_0"]         = "なし";
$vocab["rep_type_1"]         = "毎日";
$vocab["rep_type_2"]         = "毎週";
$vocab["rep_type_3"]         = "毎月";
$vocab["rep_type_4"]         = "毎年";
$vocab["rep_type_5"]         = "毎月同じ日";
$vocab["rep_type_6"]         = "n週毎";
$vocab["rep_end_date"]       = "繰り返しの終了日:";
$vocab["rep_rep_day"]        = "繰り返しの曜日:";
$vocab["rep_for_weekly"]     = "(毎週, n週毎 選択時)";
$vocab["rep_freq"]           = "頻度:";
$vocab["rep_num_weeks"]      = "週の繰り返し数";
$vocab["rep_for_nweekly"]    = "(n週毎 選択時)";
$vocab["ctrl_click"]         = "複数の予約対象を選択するときは、<br />Controlキーを押しながらクリックしてください。";
$vocab["entryid"]            = "予約ID ";
$vocab["repeat_id"]          = "定期ID "; 
$vocab["you_have_not_entered"] = "以下の項目が入力されていません:";
$vocab["you_have_not_selected"] = "以下の項目が選択されていません:";
$vocab["valid_room"]         = "会議室・備品";
$vocab["valid_time_of_day"]  = "valid time of day.";
$vocab["brief_description"]  = "簡単な説明";
$vocab["useful_n-weekly_value"] = "useful n-weekly value.";

# Used in view_entry.php
$vocab["description"]        = "説明:";
$vocab["room"]               = "Room";
$vocab["createdby"]          = "Created By:";
$vocab["lastupdate"]         = "Last Updated:";
$vocab["deleteentry"]        = "Delete Entry";
$vocab["deleteseries"]       = "Delete Series";
$vocab["confirmdel"]         = "Are you sure\\nyou want to\\ndelete this entry?\\n\\n";
$vocab["returnprev"]         = "Return to previous page";
$vocab["invalid_entry_id"]   = "Invalid entry id.";
$vocab["invalid_series_id"]  = "Invalid series id.";

# Used in edit_entry_handler.php
$vocab["error"]              = "Error";
$vocab["sched_conflict"]     = "Scheduling Conflict";
$vocab["conflict"]           = "The new booking will conflict with the following entry(s):";
$vocab["too_may_entrys"]     = "The selected options will create too many entries.<BR>Please use different options!";
$vocab["returncal"]          = "Return to calendar view";
$vocab["failed_to_acquire"]  = "Failed to acquire exclusive database access";
$vocab["invalid_booking"]    = "Invalid booking";
$vocab["must_set_description"] = "You must set a brief description for the booking. Please go back and enter one.";

# Authentication stuff
$vocab["accessdenied"]       = "Access Denied";
$vocab["norights"]           = "You do not have access rights to modify this item.";
$vocab["please_login"]       = "Please log in";
$vocab["user_name"]          = "Name";
$vocab["user_password"]      = "Password";
$vocab["unknown_user"]       = "Unknown user";
$vocab["you_are"]            = "You are";
$vocab["login"]              = "Log in";
$vocab["logoff"]             = "Log Off";

# Authentication database
$vocab["user_list"]          = "User list";
$vocab["edit_user"]          = "Edit user";
$vocab["delete_user"]        = "Delete this user";
#$vocab["user_name"]         = Use the same as above, for consistency.
#$vocab["user_password"]     = Use the same as above, for consistency.
$vocab["user_email"]         = "Email address";
$vocab["password_twice"]     = "If you wish to change the password, please type the new password twice";
$vocab["passwords_not_eq"]   = "Error: The passwords do not match.";
$vocab["add_new_user"]       = "Add a new user";
$vocab["rights"]             = "Rights";
$vocab["action"]             = "Action";
$vocab["user"]               = "User";
$vocab["administrator"]      = "Administrator";
$vocab["unknown"]            = "Unknown";
$vocab["ok"]                 = "OK";
$vocab["show_my_entries"]    = "Click to display all my upcoming entries";
$vocab["no_users_initial"]   = "No users in database, allowing initial user creation";
$vocab["no_users_create_first_admin"] = "Create a user configured as administrator and then you can log in and create more users.";

# Used in search.php
$vocab["invalid_search"]     = "Empty or invalid search string.";
$vocab["search_results"]     = "Search Results for:";
$vocab["nothing_found"]      = "No matching entries found.";
$vocab["records"]            = "Records ";
$vocab["through"]            = " through ";
$vocab["of"]                 = " of ";
$vocab["previous"]           = "Previous";
$vocab["next"]               = "Next";
$vocab["entry"]              = "Entry";
$vocab["view"]               = "View";
$vocab["advanced_search"]    = "Advanced search";
$vocab["search_button"]      = "Search";
$vocab["search_for"]         = "Search For";
$vocab["from"]               = "From";

# Used in report.php
$vocab["report_on"]          = "Report on Meetings:";
$vocab["report_start"]       = "Report start date:";
$vocab["report_end"]         = "Report end date:";
$vocab["match_area"]         = "Match area:";
$vocab["match_room"]         = "Match room:";
$vocab["match_type"]         = "Match type:";
$vocab["ctrl_click_type"]    = "Use Control-Click to select more than one type";
$vocab["match_entry"]        = "Match brief description:";
$vocab["match_descr"]        = "Match full description:";
$vocab["include"]            = "Include:";
$vocab["report_only"]        = "Report only";
$vocab["summary_only"]       = "Summary only";
$vocab["report_and_summary"] = "Report and Summary";
$vocab["summarize_by"]       = "Summarize by:";
$vocab["sum_by_descrip"]     = "Brief description";
$vocab["sum_by_creator"]     = "Creator";
$vocab["entry_found"]        = "entry found";
$vocab["entries_found"]      = "entries found";
$vocab["summary_header"]     = "Summary of (Entries) Hours";
$vocab["summary_header_per"] = "Summary of (Entries) Periods";
$vocab["total"]              = "Total";
$vocab["submitquery"]        = "Run Report";
$vocab["sort_rep"]           = "Sort Report by:";
$vocab["sort_rep_time"]      = "Start Date/Time";
$vocab["rep_dsp"]            = "Display in report:";
$vocab["rep_dsp_dur"]        = "Duration";
$vocab["rep_dsp_end"]        = "End Time";

# Used in week.php
$vocab["weekbefore"]         = "Go To Week Before";
$vocab["weekafter"]          = "Go To Week After";
$vocab["gotothisweek"]       = "Go To This Week";

# Used in month.php
$vocab["monthbefore"]        = "Go To Month Before";
$vocab["monthafter"]         = "Go To Month After";
$vocab["gotothismonth"]      = "Go To This Month";

# Used in {day week month}.php
$vocab["no_rooms_for_area"]  = "No rooms defined for this area";

# Used in admin.php
$vocab["edit"]               = "Edit";
$vocab["delete"]             = "Delete";
$vocab["rooms"]              = "Rooms";
$vocab["in"]                 = "in";
$vocab["noareas"]            = "No Areas";
$vocab["addarea"]            = "Add Area";
$vocab["name"]               = "Name";
$vocab["noarea"]             = "No area selected";
$vocab["browserlang"]        = "Your browser is set to use";
$vocab["postbrowserlang"]    = "language.";
$vocab["addroom"]            = "Add Room";
$vocab["capacity"]           = "Capacity";
$vocab["norooms"]            = "No rooms.";
$vocab["administration"]     = "Administration";

# Used in edit_area_room.php
$vocab["editarea"]           = "Edit Area";
$vocab["change"]             = "Change";
$vocab["backadmin"]          = "Back to Admin";
$vocab["editroomarea"]       = "Edit Area or Room Description";
$vocab["editroom"]           = "Edit Room";
$vocab["update_room_failed"] = "Update room failed: ";
$vocab["error_room"]         = "Error: room ";
$vocab["not_found"]          = " not found";
$vocab["update_area_failed"] = "Update area failed: ";
$vocab["error_area"]         = "Error: area ";
$vocab["room_admin_email"]   = "Room admin email:";
$vocab["area_admin_email"]   = "Area admin email:";
$vocab["invalid_email"]      = "Invalid email!";

# Used in del.php
$vocab["deletefollowing"]    = "This will delete the following bookings";
$vocab["sure"]               = "Are you sure?";
$vocab["YES"]                = "YES";
$vocab["NO"]                 = "NO";
$vocab["delarea"]            = "You must delete all rooms in this area before you can delete it<p>";

# Used in help.php
$vocab["about_mrbs"]         = "About Schoorbs";
$vocab["database"]           = "Database: ";
$vocab["system"]             = "System: ";
$vocab["please_contact"]     = "Please contact ";
$vocab["for_any_questions"]  = "for any questions that aren't answered here.";

# Used in mysql.inc AND pgsql.inc
$vocab["failed_connect_db"]  = "Fatal Error: Failed to connect to database";

?>
