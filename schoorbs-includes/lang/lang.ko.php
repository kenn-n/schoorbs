<?php
# $Id: lang.ko,v 1.1.2.1 2005/07/13 10:29:18 jberanek Exp $

# This file contains PHP code that specifies language specific strings
# The default strings come from lang.en, and anything in a locale
# specific file will overwrite the default. This is a Korean file.
#
#
#
#
# This file is PHP code. Treat it as such.

# The charset to use in "Content-type" header
$vocab["charset"]            = "utf-8";

# Used in style.inc
$vocab["mrbs"]               = "회의실 예약 시스템";

# Used in functions.inc
$vocab["report"]             = "보고서";
$vocab["admin"]              = "관리자";
$vocab["help"]               = "도움말";
$vocab["search"]             = "검색";
$vocab["not_php3"]             = "<h1>주의: PHP3에서는 동작하지 않습니다.</H1>";

# Used in day.php
$vocab["bookingsfor"]        = "Bookings for";
$vocab["bookingsforpost"]    = "의 예약입니다.";
$vocab["areas"]              = "지역";
$vocab["daybefore"]          = "이전으로";
$vocab["dayafter"]           = "다음으로";
$vocab["gototoday"]          = "오늘의 예약";
$vocab["goto"]               = "바로가기";
$vocab["highlight_line"]     = "Highlight this line";
$vocab["click_to_reserve"]   = "Click on the cell to make a reservation.";

# Used in trailer.inc
$vocab["viewday"]            = "일 단위";
$vocab["viewweek"]           = "주 단위";
$vocab["viewmonth"]          = "월 단위";
$vocab["ppreview"]           = "인쇄용 미리보기";

# Used in edit_entry.php
$vocab["addentry"]           = "예약 등록";
$vocab["editentry"]          = "예약 수정";
$vocab["editseries"]         = "예약(Series) 수정";
$vocab["namebooker"]         = "예약자명:";
$vocab["fulldescription"]    = "상세정보(인원,내부/외부회의 등):";
$vocab["date"]               = "날짜:";
$vocab["start_date"]         = "시작일:";
$vocab["end_date"]           = "종료일:";
$vocab["time"]               = "시간:";
$vocab["period"]             = "기간:";
$vocab["duration"]           = "회의 시간:";
$vocab["seconds"]            = "초";
$vocab["minutes"]            = "분";
$vocab["hours"]              = "시간";
$vocab["days"]               = "일";
$vocab["weeks"]              = "주";
$vocab["years"]              = "년";
$vocab["periods"]            = "기간";
$vocab["all_day"]            = "하루종일";
$vocab["type"]               = "회의 종류:";
$vocab["internal"]           = "내부회의";
$vocab["external"]           = "외부회의";
$vocab["save"]               = "보존";
$vocab["rep_type"]           = "반복 타입:";
$vocab["rep_type_0"]         = "없음";
$vocab["rep_type_1"]         = "일간";
$vocab["rep_type_2"]         = "주간";
$vocab["rep_type_3"]         = "월간";
$vocab["rep_type_4"]         = "연간";
$vocab["rep_type_5"]         = "월간, 해당일";
$vocab["rep_type_6"]         = "몇주간";
$vocab["rep_end_date"]       = "반복 종료일:";
$vocab["rep_rep_day"]        = "반복일:";
$vocab["rep_for_weekly"]     = "(몇 주간용)";
$vocab["rep_freq"]           = "빈도:";
$vocab["rep_num_weeks"]      = "몇 주";
$vocab["rep_for_nweekly"]    = "(몇 주간용)";
$vocab["ctrl_click"]         = "2개 이상을 선택하기 위해서는 Control-Click을 사용하세요";
$vocab["entryid"]            = "엔트리 ID ";
$vocab["repeat_id"]          = "반복 ID "; 
$vocab["you_have_not_entered"] = "You have not entered a";
$vocab["you_have_not_selected"] = "You have not selected a";
$vocab["valid_room"]         = "room.";
$vocab["valid_time_of_day"]  = "valid time of day.";
$vocab["brief_description"]  = "간략 설명";
$vocab["useful_n-weekly_value"] = "useful n-weekly value.";

# Used in view_entry.php
$vocab["description"]        = "설명:";
$vocab["room"]               = "회의실명";
$vocab["createdby"]          = "예약자:";
$vocab["lastupdate"]         = "최종 갱신일:";
$vocab["deleteentry"]        = "예약 취소";
$vocab["deleteseries"]       = "예약(Series) 취소";
$vocab["confirmdel"]         = "예약을 취소하시겠습니까?";
$vocab["returnprev"]         = "이전 페이지로";
$vocab["invalid_entry_id"]   = "무효한 엔트리 ID.";
$vocab["invalid_series_id"]  = "무효한 Serires ID.";

# Used in edit_entry_handler.php
$vocab["error"]              = "에러";
$vocab["sched_conflict"]     = "스케쥴 중복";
$vocab["conflict"]           = "이미 다른 예약이 되어있습니다.";
$vocab["too_may_entrys"]     = "선택한 옵션은 너무 많은 엔트리를 작성하게 됩니다.<BR>다른 옵션을 선택해 주세요.";
$vocab["returncal"]          = "달력 화면으로 돌아감";
$vocab["failed_to_acquire"]  = "데이타베이스 접근에 실패하였습니다."; 
$vocab["mail_subject_entry"] = $mail["subject"];
$vocab["mail_body_new_entry"] = $mail["new_entry"];
$vocab["mail_body_del_entry"] = $mail["deleted_entry"];
$vocab["mail_body_changed_entry"] = $mail["changed_entry"];
$vocab["mail_subject_delete"] = $mail["subject_delete"];

# Authentication stuff
$vocab["accessdenied"]       = "접근이 거부됨";
$vocab["norights"]           = "수정할 수 있는 권한이 없습니다.";
$vocab["please_login"]       = "로그인 하여 주십시오";
$vocab["user_name"]          = "아이디";
$vocab["user_password"]      = "비밀번호";
$vocab["unknown_user"]       = "권한없는 사용자";
$vocab["you_are"]            = "아이디: ";
$vocab["login"]              = "로그인";
$vocab["logoff"]             = "로그아웃";

# Authentication database
$vocab["user_list"]          = "사용자 리스트";
$vocab["edit_user"]          = "사용자 수정";
$vocab["delete_user"]        = "사용자 삭제";
#$vocab["user_name"]         = Use the same as above, for consistency.
#$vocab["user_password"]     = Use the same as above, for consistency.
$vocab["user_email"]         = "메일 주소";
$vocab["password_twice"]     = "비밀번호를 변경하시려면, 새로운 비밀번호를 2회 입력하세요.";
$vocab["passwords_not_eq"]   = "에러: 비밀번호가 바르지 않습니다.";
$vocab["add_new_user"]       = "사용자 추가";
$vocab["rights"]             = "권한";
$vocab["action"]             = "동작";
$vocab["user"]               = "사용자";
$vocab["administrator"]      = "관리자";
$vocab["unknown"]            = "Unknown";
$vocab["ok"]                 = "OK";
$vocab["show_my_entries"]    = "Click to display all my upcoming entries";

# Used in search.php
$vocab["invalid_search"]     = "잘못된 검색어를 입력했음.";
$vocab["search_results"]     = "검색 결과:";
$vocab["nothing_found"]      = "검색 결과가 없습니다.";
$vocab["records"]            = "Records ";
$vocab["through"]            = " through ";
$vocab["of"]                 = " of ";
$vocab["previous"]           = "이전";
$vocab["next"]               = "이후";
$vocab["entry"]              = "Entry";
$vocab["view"]               = "View";
$vocab["advanced_search"]    = "상세 검색";
$vocab["search_button"]      = "검색";
$vocab["search_for"]         = "Search For";
$vocab["from"]               = "From";

# Used in report.php
$vocab["report_on"]          = "회의에 관한 보고서 작성:";
$vocab["report_start"]       = "시작일:";
$vocab["report_end"]         = "종료일:";
$vocab["match_area"]         = "검색할 지역:";
$vocab["match_room"]         = "검색할 회의실:";
$vocab["match_type"]         = "회의 타입:";
$vocab["ctrl_click_type"]    = "2개 이상을 선택할 경우는 Control-Click을 사용하세요.";
$vocab["match_entry"]        = "검색할 설명:";
$vocab["match_descr"]        = "검색할 상세 정보:";
$vocab["include"]            = "포함:";
$vocab["report_only"]        = "보고서만";
$vocab["summary_only"]       = "요약정보만";
$vocab["report_and_summary"] = "보고서 및 요약정보";
$vocab["summarize_by"]       = "다음에 의해 요약됨:";
$vocab["sum_by_descrip"]     = "간략 설명";
$vocab["sum_by_creator"]     = "작성자";
$vocab["entry_found"]        = "entry found";
$vocab["entries_found"]      = "entries found";
$vocab["summary_header"]     = "Summary of (Entries) Hours";
$vocab["summary_header_per"] = "Summary of (Entries) Periods";
$vocab["total"]              = "전체";
$vocab["submitquery"]        = "보고서 실행";
$vocab["sort_rep"]           = "정렬 순서:";
$vocab["sort_rep_time"]      = "시작 일/시간";
$vocab["rep_dsp"]            = "Display in report:";
$vocab["rep_dsp_dur"]        = "기간";
$vocab["rep_dsp_end"]        = "종료 시간";

# Used in week.php
$vocab["weekbefore"]         = "저번 주로";
$vocab["weekafter"]          = "다음 주로";
$vocab["gotothisweek"]       = "이번 주로";

# Used in month.php
$vocab["monthbefore"]        = "저번 달로";
$vocab["monthafter"]         = "다음 달로";
$vocab["gotothismonth"]      = "이번 달로";

# Used in {day week month}.php
$vocab["no_rooms_for_area"]  = "등록된 회의실이 없습니다.";

# Used in admin.php
$vocab["edit"]               = "수정";
$vocab["delete"]             = "삭제";
$vocab["rooms"]              = "회의실";
$vocab["in"]                 = "in";
$vocab["noareas"]            = "등록된 지역가 없음";
$vocab["addarea"]            = "지역 추가";
$vocab["name"]               = "이름";
$vocab["noarea"]             = "지역이 선택되지 않았음";
$vocab["browserlang"]        = "당신의 브라우저는 다음 언어를 사용하도록 설정되어 있음: ";
$vocab["postbrowserlang"]    = "";
$vocab["addroom"]            = "회의실 추가";
$vocab["capacity"]           = "수용가능 인원";
$vocab["norooms"]            = "등록된 회의실이 없음";
$vocab["administration"]     = "지역 및 회의실 관리";

# Used in edit_area_room.php
$vocab["editarea"]           = "지역 수정";
$vocab["change"]             = "수정";
$vocab["backadmin"]          = "돌아가기";
$vocab["editroomarea"]       = "지역 또는 회의실 수정";
$vocab["editroom"]           = "회의실 수정";
$vocab["update_room_failed"] = "회의실 수정 실패: ";
$vocab["error_room"]         = "에러: 회의실  ";
$vocab["not_found"]          = "이(가) 발견되지 않음";
$vocab["update_area_failed"] = "지역 수정 실패: ";
$vocab["error_area"]         = "에러: 지역  ";
$vocab["room_admin_email"]   = "회의실 관리자 메일주소:";
$vocab["area_admin_email"]   = "지역 관리자 메일주소";
$vocab["invalid_email"]      = "잘못된 메일주소입니다!";

# Used in del.php
$vocab["deletefollowing"]    = "다음의 예약들이 삭제됩니다.";
$vocab["sure"]               = "삭제하시겠습니까?";
$vocab["YES"]                = "예";
$vocab["NO"]                 = "아니오";
$vocab["delarea"]            = "지우기 전에 이 지역안에 있는 모든 회의실을 지워야 합니다.<p>";

# Used in help.php
$vocab["about_mrbs"]         = "About MRBS";
$vocab["database"]           = "Database: ";
$vocab["system"]             = "System: ";
$vocab["please_contact"]     = "자세한 사항은 다음 관리자에게 연락주십시오: ";
$vocab["for_any_questions"]  = " ";

# Used in mysql.inc AND pgsql.inc
$vocab["failed_connect_db"]  = "심각한 에러: 데이터베이스에 접속할 수 없습니다.";

?>
