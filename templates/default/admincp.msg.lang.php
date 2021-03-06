<?php

// Admins' CP Language Pack for Discuz! Version 1.0.0
// Translated by Crossday

$msglang = array
(
	'undefined_action' => ' 未定義操作。',
	'noaccess' => '您沒有權限訪問管理中心。',
	'noaccess_isfounder' => '您沒有權限訪問該設置，出於安全考慮此設置只有論壇創始人可以使用，請檢查論壇的 config.inc.php 文件內創始人的設置。',
	'noaccess_ip' => '對不起，管理員設定了只有特定 IP 地址範圍才能訪問管理中心，您的地址不在被允許的範圍內。',
	'action_noaccess' => '對不起，管理員限制您無權使用本功能。',
	'action_noaccess_config' => '對不起，出於系統安全考慮，論壇管理員關閉了該功能，如需要打開請自行修改論壇的 config.inc.php 文件內對應的相關安全配置信息。',
	'action_access_noexists' => '論壇缺少安全設置，請對照標準程序的 config.inc.php 仔細修改您的配置文件。否則無法使用本功能。',
	'import_data_invalid' => '數據無法識別，請返回。',
	'import_data_typeinvalid' => '數據類型錯誤，請返回。',

	'settings_gzip_invalid' => '當前 PHP 版本不支持 Gzip 壓縮，請返回修改。',
	'settings_maxonlines_invalid' => '指定的最大在線人數必須填寫且不得超過 65535，請返回修改。',
	'settings_creditsformula_invalid' => '積分公式包含無效變量或運算符，請返回修改。',
	'settings_ipaccess_invalid' => '操作錯誤！您必須將自己的 IP 加入到允許訪問論壇的 IP 列表中，請返回修改。',
	'settings_adminipaccess_invalid' => '操作錯誤！您必須將自己的 IP 加入到允許訪問後台的 IP 列表中，請返回修改。',
	'settings_credits_title_invalid' => '您沒有為全部被啟用的積分設置積分名稱，請返回修改。',
	'settings_creditstrans_invalid' => '交易積分必須是已經被啟用的積分類型，請返回修改。',
	'settings_update_succeed' => '全局設置成功更新。',
	'settings_seccodewidthheight_invalid' => '驗證碼圖片寬度或者高度超出限定的範圍，請返回修改。',
	'settings_extcredits_must_available' => '您需要至少開啟一種擴展積分，請返回修改。',

	'uc_database_connect_error' => '連接用戶中心數據庫服務器失敗，請返回檢查設置。',
	'uc_database_select_db_error' => '選擇用戶中心數據庫失敗，可能不存在該數據庫，請返回檢查設置。',
	'uc_config_write_error' => '配置文件寫入失敗，請返回檢查設置。',

	'forums_add_category_succeed' => '添加新分類 <b>$newcat</b> 成功。',
	'forums_add_forum_succeed' => '添加新版塊 <b>$newforum</b> 成功。',
	'forums_update_succeed' => '版塊設置成功更新。',
	'forums_copy_source_invalid' => '您沒有選擇要複製的源版塊，請返回修改。',
	'forums_copy_target_invalid' => '您沒有選擇要複製的目標版塊，請返回修改。',
	'forums_copy_options_invalid' => '您沒有選擇要複製的項目，請返回修改。',
	'forums_copy_succeed' => '版塊設置成功複製。',
	'forums_moderators_update_succeed' => '版主設置成功更新。',
	'forums_merge_source_sub_notnull' => '源版塊下級版塊不為空，請先返回修改相關下級版塊的上級設置。',
	'forums_merge_succeed' => '版塊合併成功。',
	'forums_edit_name_invalid' => '您沒有輸入分類名稱，請返回修改。',
	'forums_edit_sub_notnull' => '下級版塊不為空，不能修改本版塊的上級版塊歸屬，請返回。',
	'forums_edit_succeed' => '版塊設置成功更新。',
	'forums_delete_sub_notnull' => '下級版塊不為空，請先返回刪除本分類或版塊的下級論壇。',
	'forums_delete_confirm' => '本操作不可恢復，您確定要刪除該版塊，清除其中帖子和附件嗎？<br />注意: 刪除論壇並不會更新用戶發帖數和積分',
	'forums_delete_succeed' => '版塊成功刪除。',
	'forums_nonexistence' => '指定的版塊不存在，請返回修改',
	'forums_threadtypes_duplicate' => '新增主題分類與現有重複，請返回修改。',
	'forums_threadtypes_succeed' => '主題分類成功更新。',
	'forums_threadsorts_duplicate' => '不允許發表多種分類信息，請返回修改。',
	'forums_rules_nopermission' => '對不起，管理員設置了版主無法編輯版塊規則。',
	'forums_rules_succeed' => '版塊規則成功編輯。',
	'forums_noparent' => '對不起，您沒有選擇該版塊的分類或者上級版塊，請返回修改。',
	'forums_name_toolong' => '輸入版塊名稱超過50個字符，請返回修改。',
	'forums_formulaperm_error' => '權限表達式無效，請返回修改。',
	'forums_delete_alarm' => '本操作不可恢復，正在刪除版塊數據... ...',
	'forums_edit_nonexistence' => '請先選擇您要進行操作的版塊：',
	'forums_edit_threadsort_nonexistence' => '沒有選擇默認的分類信息，請返回修改。',

	'announce_nonexistence' => '指定的公告不存在或無權編輯，請返回。',
	'announce_time_invalid' => '對不起，您沒有輸入起始時間或您輸入的終止時間不正確，請返回修改。',
	'announce_invalid' => '您必須輸入公告標題和內容，請返回修改。',
	'announce_succeed' => '論壇公告成功編輯。',
	'announce_update_succeed' => '論壇公告成功更新。',

	'modcp_ann_empty' => '您必須輸入公告標題和內容，請返回修改。',
	'modcp_ann_urlerror' => '網址鏈接無效，請返回修改。',

	'admingroups_edit_succeed' => '管理組權限設置成功更新。',
	'admingroups_edit_nonexistence' => '請先選擇您要進行操作的管理組：',

	'usergroups_update_credits_invalid' => '缺少積分下限為負數或 0 的會員用戶組，請返回修改。',
	'usergroups_update_credits_duplicate' => '會員用戶組積分下限設置重複，請返回修改。',
	'usergroups_update_succeed' => '用戶組成功更新。如您添加了新的用戶組，<br />請不要忘記修改其相應的權限設置。',
	'usergroups_edit_public_invalid' => '公眾用戶組不能關聯管理組，否則將產生安全隱患，請返回修改。',
	'usergroups_edit_creditstrans_disabled' => '您需要先在 全局設置中啟用交易積分才能設置收費公眾用戶組的相關功能，請返回修改。',
	'usergroups_edit_rate_invalid' => '用戶組評分上下限或 24 小時最大評分數設置有誤，請返回修改。',
	'usergroups_edit_succeed' => '用戶組權限設置成功更新。',
	'usergroups_type_nonexistence' => '用戶組類型錯誤，請返回',
	'usergroups_edit_nonexistence' => '請先選擇您要進行操作的用戶組：',
	'usergroups_edit_fail' => '您沒有權限編輯擁有管理權限的用戶組，請返回',

	'ranks_succeed' => '發帖數級別成功更新。',

	'members_add_toolong' => '對不起，您的用戶名超過 15 個字符，請返回輸入一個較短的用戶名。',
	'members_add_tooshort' => '對不起，您輸入的用戶名小於3個字符, 請返回輸入一個較長的用戶名。',
	'members_add_illegal' => '用戶名包含敏感字符或被系統屏蔽，請返回重新填寫。',
	'members_username_protect' => '用戶名包含被系統屏蔽的字符，請返回重新填寫。',
	'members_add_invalid' => '您沒有填寫完整用戶資料，請返回修改。',
	'members_add_username_duplicate' => '用戶名已經存在，請返回修改。',
	'members_add_username_activation' => '用戶名已經存在，但尚未激活，請返回修改。',
	'members_email_duplicate' => '該 Email 地址已經被註冊，請返回重新填寫。',
	'members_email_illegal' => 'Email 地址無效，請返回重新填寫。',
	'members_email_domain_illegal' => 'Email 包含不可使用的郵箱域名，請返回重新填寫。',
	'members_add_succeed' => '用戶 $newusername(UID $uid) 添加成功。',
	'members_search_invalid' => '您沒有提供搜索的條件，請返回修改。',
	'members_search_noresults' => '沒有找到符合條件的會員。',
	'members_delete_confirm' => '本操作不可恢復，您確定要刪除符合條件的 $membernum 個用戶嗎？',
	'members_delete_succeed' => '符合條件的 $numdeleted 個用戶被成功刪除。',
	'members_edit_nonexistence' => '指定用戶不存在，請返回。',
	'members_edit_illegal' => '您不能編輯特殊用戶，請返回。',
	'members_edit_reason_invalid' => '您沒有輸入執行此變更的理由，請返回修改。',
	'members_edit_duplicate' => '新用戶名與現有用戶重複，請返回修改。',
	'members_edit_succeed' => '用戶資料成功更新。',
	'members_edit_groups_toomany' => '您設置了過多的擴展用戶組，已超出系統允許的存儲容量，請返回修改。',
	'members_edit_groups_illegal' => '過期用戶組和用戶當前所屬用戶組相同，請返回修改。',
	'members_edit_groups_succeed' => '用戶的用戶組屬性編輯成功。',
	'members_edit_credits_succeed' => '用戶積分成功編輯。',
	'members_edit_medals_nonexistence' => '目前沒有可用的勳章，請到「勳章中心」啟用勳章後再進行此操作。',
	'members_edit_medals_succeed' => '用戶勳章成功編輯。',
	'members_newsletter_sm_invalid' => '您沒有輸入消息的標題或內容，請返回修改。',
	'members_newsletter_notify_succeed' => '論壇通知成功發送。',
	'members_reward_invalid' => '您沒有對用戶積分進行獎懲，請返回修改。',
	'members_reward_succeed' => '用戶積分獎懲成功執行。',
	'members_reward_notify_succeed' => '用戶積分獎懲成功執行，並已通知相關用戶。',
	'members_confermedal_succeed' => '頒發勳章成功執行。',
	'members_confermedal_notify_succeed' => '頒發勳章成功執行，並已通知相關用戶。',
	'members_merge_invalid' => '您沒有輸入要合併的用戶名，或指定的用戶不存在，請返回修改。',
	'members_merge_confirm' => '本操作不可恢復，您確定將 $sourcemember 及其發表、擁有的全部資料轉移到 $targetmember 中並刪除 $sourcemember 嗎？',
	'members_merge_succeed' => '原用戶 $sourcemember 已成功合併入新用戶 $targetmember 中。',
	'members_sameness' => '對不起，原用戶名不能與目標用戶名相同，請返回修改。',
	'members_add_admin_none' => '對不起，出於安全性考慮，不允許直接添加管理員，請返回修改。',
	'members_add_ban_all_none' => '對不起，不允許添加禁止訪問、禁止IP、遊客用戶組，請返回修改。',
	'members_no_find_deluser' => '對不起，沒有搜索到需要刪除的用戶，請返回修改搜索條件或者重新選擇要刪除的用戶。',
	'members_dont_contain_admin_merge' => '源用戶中包含管理員身份會員，請首先將他的管理員身份解除後再進行合併操作，否則合併無法進行，請返回更改。',
	'members_super_edit_admin_allow' => '只有論壇創始人才能編輯修改管理員的資料，請返回。',
	'members_access_succeed' => '指定用戶論壇權限成功更新。',
	'members_ipban_nopermission' => '只有管理員可以使用「*」通配符，請返回。',
	'members_ipban_illegal' => '操作錯誤！您自己的 IP 已經存在於禁止列表中，請返回修改。',
	'members_ipban_invalid' => '新的禁止 IP 已經存在於列表中，請返回。',
	'members_ipban_succeed' => 'IP 禁止列表成功更新。',
	'members_nonexistence' => '請先輸入您要進行操作的用戶名：',

	'moderate_members_succeed' => '審核操作成功，共 $numvalidated 個用戶被通過，$numinvalidated 個用戶被否決，$numdeleted 個用戶被刪除。',
	'moderate_threads_succeed' => '審核操作成功，共 $validates 個主題被通過，$ignores 個主題被忽略，$recycles 個主題被放入回收站，$deletes 個主題被刪除。',
	'moderate_replies_succeed' => '審核操作成功，共 $validates 個回復被通過，$ignores 個回復被忽略，$deletes 個回復被刪除。',
	'moderate_posts_no_access_all' => '您沒有審核任何欄目帖子的權利，請返回。',
	'moderate_posts_no_access_this' => '您沒有審核此欄目的權限，請返回。',
	'threads_move_invalid' => '您沒有選擇或選擇的目標版塊/分類不存在，請返回。',
	'threads_forumstick_del_succeed' => '置頂主題列表更新成功',
	'threads_forumstick_edit_succeed' => '目標版塊更改成功',
	'threads_forumstick_add_succeed' => '主題添加成功',
	'threads_forumstick_targets_empty' => '請選擇一個或多個目標版塊',
	'threads_forumstick_url_invalid' => '您輸入的URL無效',

	'recyclebin_succeed' => '回收站更新成功，共 $threadsdel 個主題被刪除，$threadsundel 個主題被恢復。',
	'recyclebin_none_selected' => '沒有選擇要操作的帖子。',

	'google_succeed' => 'Google 搜索設置成功更新。',

	'qihoo_adminemail_invalid' => '您填寫的站長聯繫 Email 格式不正確，請返回修改',
	'qihoo_succeed' => '奇虎搜索設置成功更新。',
	'qihoo_topics_succeed' => '專題設置成功更新。',

	'alipay_ratio_invalid' => '您輸入的現金/積分兌換比率小於 0，請返回修改。',
	'alipay_account_invalid' => '您輸入的收款支付寶賬號格式不正確，請返回修改。',
	'alipay_securitycode_invalid' => '您輸入的支付寶安全校驗碼格式不正確，請返回修改。',
	'alipay_succeed' => '支付寶功能成功設定。',
	'tenpay_bargainor_invalid' => '請輸入 10 位數字的財付通商戶號。',
	'tenpay_key_invalid' => '密鑰只能用32位字母或數字組成，請返回修改。',
	'tenpay_succeed' => '財付通功能成功設定。',
	'ec_credit_succeed' => '信用評價體系成功設定。',

	'orders_disabled' => '您沒有啟用交易積分或支付寶積分充值功能，無法對訂單進行管理。',
	'orders_validate_succeed' => '訂單處理成功。',

	'magics_config_succeed' => '道具基本設置更新。',
	'magics_data_succeed' => '道具資料更新。',
	'magics_parameter_invalid' => '道具參數填寫不全，請返回修改。',
	'magics_identifier_invalid' => '道具唯一標識重複，請返回修改。',
	'magics_filename_illegal' => '您輸入的道具腳本文件名包含非法字符，請返回修改。',
	'magics_filename_invalid' => '您指定的道具腳本文件($magicfile)不存在或包含語法錯誤，請返回修改。',
	'magics_present_invalid' => '禮包類道具必須包含至少一種其他道具，請返回修改。',

	'medals_succeed' => '勳章成功編輯。',
	'medals_validate_succeed' => '勳章申請審核通過。',
	'medals_invalidate_succeed' => '勳章申請已被否決。',
	'medals_add_succeed' => '成功添加勳章。',
	'medals_please_input' => '請選擇需要操作的勳章',

	'tasks_succeed' => '任務成功添加或更新。',
	'tasks_settings_invalid' => '部分任務設置不合理無法啟用，請重新設置。',
	'tasks_noscript_or_nocfg' => '指定的任務配置文件或腳本文件不存在。',
	'tasks_basic_invalid' => '任務設置不完整，請返回！',
	'tasks_time_invalid' => '上線時間或下線時間設置不合理，請返回！',
	'tasks_reward_invalid' => '任務獎勵設置不合理，請返回！',
	'tasks_del_confirm' => '你確定要刪除當前任務嗎？',
	'tasks_del' => '任務成功刪除',
	'tasks_code_invalid' => '任務腳本代碼不符合規範，無法安裝，請與作者聯繫。',
	'tasks_install_duplicate' => '指定的任務腳本已安裝，請返回。',
	'tasks_installed' => '指定任務成功安裝！',
	'tasks_uninstall_confirm' => '該操作將卸載當前任務類型並刪除其下所有任務，請確認！',
	'tasks_noscript' => '指定的任務腳本文件不存在。',
	'tasks_uninstalled' => '指定任務成功卸載！',
	'tasks_newest' => '請上傳更高版本的任務腳本，然後刷新本頁。',
	'tasks_updated' => '指定任務成功升級！',
	'tasks_newbie_setting_invalid_tid' => '您必須設置一個指定的主題，請返回修改。',
	'tasks_newbie_setting_invalid_fid' => '您必須設置一個指定的版塊，請返回修改。',
	'tasks_newbie_setting_invalid_uid' => '您必須設置一個指定的會員，請返回修改。',

	'counter_forum_succeed' => '論壇帖數重建完成。',
	'counter_digest_succeed' => '精華帖數重建完成。',
	'counter_member_succeed' => '用戶發帖數重建完成。',
	'counter_thread_succeed' => '主題帖數重建完成。',
	'counter_moved_thread_succeed' => '移動標記清理完成。',
	'counter_moved_favorites_logs_succeed' => '清理收藏夾和日誌數據完成。',
	'counter_special_arrange_succeed' => '分類信息數據整理完成。',

	'database_export_custom_invalid' => '您至少需要選擇一個數據表進行備份，請返回修改。',
	'database_export_file_invalid' => '數據文件無法保存到服務器，請檢查目錄屬性。',
	'database_export_multivol_redirect' => '分卷備份: 數據文件 #$volume 成功創建，程序將自動繼續。',
	'database_export_succeed' => '數據成功備份至服務器 <a href=\"$filename\">$filename</a> 中。',
	'database_export_filename_invalid' => '您沒有輸入備份文件名或文件名中使用了敏感的擴展名，請返回修改。',
	'database_export_multivol_succeed' => '恭喜您，全部 $volume 個備份文件成功創建，備份完成。\n<br />$filelist',
	'database_export_zip_succeed' => '數據成功備份並壓縮至服務器 <a href=\"$filename\">$filename</a> 中。',
	'database_export_dest_invalid' => '目錄不存在或無法訪問，請檢查 ./forumdata/ 目錄。',
	'database_import_multivol_succeed' => '分卷數據成功導入論壇數據庫。',
	'database_import_file_illegal' => '數據文件不存在: 可能服務器不允許上傳文件或尺寸超過限制。',
	'database_import_format_illegal' => '數據文件非 Discuz! 格式，無法導入。',
	'database_import_multivol_prompt' => '分卷數據第一捲成功導入數據庫，您需要自動導入本次備份的其他分卷嗎？',
	'database_import_multivol_redirect' => '數據文件 #$dumpinfo[volume] 成功導入，程序將自動繼續。',
	'database_import_confirm' => '導入和當前 Discuz! 版本不一致的數據極有可能產生無法解決的故障，您確定繼續嗎？',
	'database_import_unzip' => '$info<br />備份文件解壓縮完畢，您需要自動導入備份嗎？導入後解壓縮的文件將會被刪除。',
	'database_import_multivol_unzip' => '$info<br />備份文件解壓縮完畢，您需要自動解壓縮其他的分卷文件嗎？',
	'database_import_multivol_unzip_redirect' => '數據文件 #$multivol 成功解壓縮，程序將自動繼續。',
	'database_import_multivol_confirm' => '所有分卷文件解壓縮完畢，您需要自動導入備份嗎？導入後解壓縮的文件將會被刪除。',
	'database_import_succeed' => '數據成功導入論壇數據庫。',
	'database_shell_fail' => 'Shell 權限被禁止或服務器不支持，無法使用 MySQL Dump 方式備份或恢複數據，請返回。',
	'database_file_delete_succeed' => '指定備份文件成功刪除。',
	'database_file_delete_invalid' => '您沒有選擇要刪除的備份文件，請返回。',
	'database_run_query_invalid' => '升級錯誤，MySQL 提示: {$sqlerror} ，請返回。',
	'database_run_query_succeed' => 'Discuz! 數據結構成功升級，影響的記錄行數 {$affected_rows}，請返回。',

	'adv_config_succeed' => '廣告設置成功更新。',
	'adv_title_invalid' => '您沒有填寫廣告標題，請返回修改。',
	'adv_endtime_invalid' => '您輸入的廣告結束時間早於當前時間或廣告起始時間，請返回修改。',
	'adv_parameter_invalid' => '您沒有完成與展現方式相對應的必填內容，請返回修改。',
	'adv_update_succeed' => '廣告列表成功更新。',
	'adv_succeed' => '廣告成功添加或更新。',
	'adv_title_more' => '對不起，您的廣告標題超過 50 個字符，請返回修改。',

	'crons_filename_illegal' => '您輸入的任務腳本文件名包含非法字符，請返回修改。',
	'crons_filename_invalid' => '您指定的任務腳本文件($cronfile)不存在或包含語法錯誤，請返回修改。',
	'crons_time_invalid' => '您沒有指定計劃任務執行的時間或條件，請返回修改。',
	'crons_succeed' => '計劃任務成功更新。',
	'crons_run_invalid' => '您要運行任務的腳本文件($cronfile)不存在或包含語法錯誤，任務無法運行，請返回。',
	'crons_run_succeed' => '計劃任務成功執行。',

	'onlinelist_succeed' => '在線列表項目成功更新。',
	'forumlinks_succeed' => '友情鏈接成功更新。',
	'censor_succeed' => '詞語過濾成功更新。',
	'censor_batch_add_succeed' => '批量導入詞語完畢。總共新增詞語 <b>($newcount)</b>, 更新詞語 <b>($updatecount)</b>, 忽略詞語 <b>($ignorecount)</b>。',
	'censor_keywords_tooshort' => '添加關鍵詞長度過短(少於 3 個字節)，請返回修改。',
	'censor_keywords_existence' => '當前詞庫中已經有此關鍵詞，請勿添加重複詞語，請返回修改',
	'smilies_type_nonexistence' => '指定的表情分類不存在。',
	'smilies_delete_invalid' => '您不能直接刪除非空的表情分類，請先返回刪除本分類下的所有表情。',
	'smilies_edit_succeed' => '表情列表成功更新。',
	'smilies_import_succeed_renamed' => '導入表情分類名稱與現有重複，已被自動重命名。表情成功導入。',
	'smilies_import_succeed' => '表情成功導入。',
	'smilies_directory_invalid' => '表情目錄 $smurl 不存在，您可以通過 FTP 創建目錄 $smurl 並上傳相應的表情圖片。請返回。',
	'smilies_update_succeed' => '更新成功，在 $smurl 目錄中共搜索到 $num 個尚未啟用的表情，已自動添加到表情分類「$smtype[name]」。',
	'smilies_update_error' => '目錄 $smurl 中沒有找到尚未使用的表情圖片，請返回。<br />添加表情請通過 FTP 上傳表情圖片到 $smurl 目錄，然後刷新本頁。',
	'thread_icon_succeed' => '主題圖標成功更新。',
	'thread_stamp_succeed' => '主題圖章成功更新。',
	'attachtypes_duplicate' => '新增擴展名與現有重複，請返回修改。',
	'attachtypes_succeed' => '附件類型成功更新。',

	'styles_export_invalid' => '指定的風格不存在，無法導出。',
	'styles_delete_invalid' => '您不能直接刪除系統默認的風格，請返回選擇其他風格為默認後再進行刪除。',
	'styles_delete_invalid_default' => '請勿刪除 ID 為 1 的風格，這是系統內置風格。如果您不喜歡這款風格，可以禁用它。',
	'styles_edit_succeed' => '界面方案成功更新。',
	'styles_import_version_invalid' => '本風格適用於 Discuz! $stylearray[version] 與當前版本($version)不一致，請返回。',
	'styles_import_version_invalid_confirm' => '本風格適用於 Discuz! $stylearray[version] 與當前版本($version)不一致，您確定要安裝嗎？',
	'styles_import_directory_invalid' => '模板目錄無法自動建立，請設置 $basedir 目錄屬性為 777<br />或通過 FTP 建立目錄 $stylearray[directory] 並設置屬性為 777。',
	'styles_import_succeed_renamed' => '導入風格或模板名稱與現有重複，已被自動重命名。界面方案成功導入。',
	'styles_import_succeed' => '界面方案成功導入。',
	'styles_install_succeed' => '界面方案成功安裝！',
	'styles_edit_variable_duplicate' => '新增的替換變量名已經存在，請返回修改。',
	'styles_edit_variable_illegal' => '新增的替換變量名稱不合法，請返回修改。',
	'styles_copy_succeed' => '界面方案成功複製。',
	'styles_nonexistence' => '請先選擇您要進行操作的界面方案：',

	'tpl_directory_invalid' => '模板目錄 $directory 不存在於 ./templates 中，或以 \"/\" 結尾，請返回修改。',
	'tpl_new_directory_invalid' => '您沒有填寫模板所在目錄，請返回修改。',
	'tpl_default_directory_invalid' => '您不能修改默認模板的目錄設置，請返回。',
	'tpl_delete_invalid' => '您不能刪除默認模板，請返回。',
	'tpl_update_succeed' => '模板套系成功更新。',
	'tpl_reset_confirm' => '您確定要恢復 $template[directory]/$fn 為默認模板嗎？',
	'tpl_reset_succeed' => '指定模板已恢復成默認模板，現在將轉入模板列表。',
	'tpl_edit_nonexistence' => '指定模板套系不存在，請返回。',
	'tpl_edit_invalid' => '指定文件 $template[directory]/$fn 無法寫入，<br />若需在線編輯，請將該文件和所在目錄屬性設置為 777。',
	'tpl_edit_succeed' => '指定模板成功編輯，現在將轉入模板列表。',
	'tpl_add_invalid' => '指定模板套系不存在或已被刪除，請返回。',
	'tpl_add_duplicate' => '新增模板已經存在，請返回選擇其他名稱。',
	'tpl_add_file_invalid' => '指定文件 $template[directory]/$name.htm 無法寫入，<br />若需在線編輯，請將該文件和所在目錄屬性設置為 777。',
	'tpl_add_succeed' => '指定模板成功添加，現在將轉入模板編輯頁。',
	'tpl_delete_confirm' => '本操作不可恢復，您確定要刪除模板 $fn 嗎？',
	'tpl_delete_succeed' => '指定模板成功刪除，現在將轉入模板列表。',
	'tpl_delete_fail' => '程序無權刪除模板文件，請用 FTP 登錄後再試。',
	'tpl_desctpl_exists' => '目標文件 $desctemplate[directory]/$fn 已經存在，您確定要覆蓋嗎？',
	'tpl_tplcopy_succeed' => '模板 $fn 已成功複製到 $desctemplate[directory] ，請返回。',
	'tpl_tplcopy_invalid' => '指定文件 $desctemplate[directory]/$fn 無法寫入，<br />若需在線編輯，請將該文件和所在目錄屬性設置為 777。',

	'fields_edit_succeed' => '用戶資料欄目成功更新。',
	'fields_edit_invalid' => '項目名稱和長度不能為空，請返回修改。',

	'dzcode_edit_succeed' => 'Discuz! 代碼成功更新。',
	'dzcode_edit_tag_invalid' => '代碼標籤為空或包含非法字符，請返回修改。',
	'dzcode_edit_range_invalid' => '代碼參數個數或嵌套層數範圍無效，請返回修改。',

	'plugins_settings_module_nonexistence' => '指定的插件管理模塊文件($modfile)不存在或存在語法錯誤，請檢查是否已將插件完整上傳。',
	'plugins_settings_succeed' => '插件參數設置成功更新。',
	'plugins_edit_name_invalid' => '您沒有輸入插件名稱，請返回修改。',
	'plugins_edit_directory_invalid' => '您輸入的插件目錄不合法或沒有使用 \"/\" 結尾，請返回修改。',
	'plugins_edit_identifier_invalid' => '您輸入的唯一標識符不合法或與現有插件重複，請返回修改。',
	'plugins_edit_modules_duplicated' => '您輸入的程序模塊名稱與現有模塊重複，請返回修改。',
	'plugins_edit_modules_name_invalid' => '您輸入的程序模塊名稱不合法，請返回修改。',
	'plugins_edit_modules_url_invalid' => '您沒有輸入直接鏈接 URL，請返回修改。',
	'plugins_edit_modules_menu_invalid' => '您沒有輸入菜單名稱，請返回修改。',
	'plugins_edit_hooks_title_invalid' => '您輸入的鉤子名稱不合法或與現有鉤子重複，請返回修改。',
	'plugins_edit_language_invalid' => '插件語言包文件($langfile)不存在。',
	'plugins_edit_hooks_succeed' => '插件鉤子成功更新。',
	'plugins_edit_var_invalid' => '您輸入的配置變量名不合法或重複，請返回修改。',
	'plugins_edit_var_title_invalid' => '您沒有輸入配置名稱，請返回修改。',
	'plugins_edit_vars_succeed' => '插件變量配置成功更新。',
	'plugins_edit_succeed' => '插件配置成功更新。',
	'plugins_add_succeed' => '插件已成功添加，請繼續進行詳細設置。',
	'plugins_import_version_invalid' => '本插件適用於 Discuz! $pluginarray[version] 與當前版本($version)不一致，請返回。',
	'plugins_import_version_invalid_confirm' => '本插件適用於 Discuz! $pluginarray[version] 與當前版本($version)不一致，您確定要安裝嗎？<br />如果本插件的安裝說明中不包含修改文件的內容則說明此插件為綠色插件，您可放心安裝。',
	'plugins_import_identifier_duplicated' => '您要導入的插件($plugin[name])已經安裝，請返回。',
	'plugins_import_succeed' => '插件數據成功導入！<br />為了正常使用此插件，您可能還需要上傳或修改相應的文件或模板，詳情請查看本插件的安裝說明',
	'plugins_import_hooks_title_invalid' => '插件的鉤子名稱不合法，無法導入。',
	'plugins_import_var_invalid' => '插件的鉤子名稱不合法，無法導入。',
	'plugins_install_succeed' => '插件成功安裝！<br />為了正常使用此插件，您可能還需要上傳或修改相應的文件或模板，詳情請查看本插件的安裝說明',
	'plugins_nonexistence' => '您即將進行的操作：設計插件。請先選擇插件：',
	'plugins_delete_confirm' => '您確定要卸載此插件嗎？',
	'plugins_delete_succeed' => '插件成功卸載！<br />為了正常使用此插件，您可能還需要刪除或修改相應的文件或模板，詳情請查看本插件的安裝說明',
	'plugins_upgrade_hooks_title_invalid' => '插件的鉤子名稱不合法，無法升級。',
	'plugins_upgrade_var_invalid' => '插件的鉤子名稱不合法，無法升級。',
	'plugins_upgrade_succeed' => '插件成功升級到 {$toversion}！',

	'addons_provider_nonexistence' => '資源提供商不存在，請返回。',
	'addons_provider_disabled' => '資源提供商不存在或已被關閉，請返回',
	'addons_provider_apiinvalid' => '資源提供商資源連接錯誤，請返回。',
	'addons_provider_removesucceed' => '資源提供商已經移除。',
	'addons_provider_exists' => '資源提供商已經存在。',
	'addons_provider_addsucceed' => '資源提供商成功添加。',

	'trade_fee_error' => '交易設置有誤，請返回修改。',
	'reward_credits_error' => '懸賞交易積分設置有誤，請返回修改。',

	'update_cache_succeed' => '全部緩存更新完畢。',
	'csscache_update' => 'CSS 緩存文件已更新',

	'jswizard_disabled' => '論壇JS調用功能沒有開啟。',
	'jswizard_overflow' => '存儲區域超出容量限制，請返回修改。',
	'jswizard_jskey_exists' => '數據調用的模塊名稱已經存在，請返回更改。',
	'jswizard_succeed' => '數據調用成功添加或更新。',
	'jswizard_copy_succeed' => '數據調用項目已複製為「{$requestdata[variable]}」。',
	'jswizard_infoside_succeed' => '邊欄成功更新。',
	'jswizard_import_exist' => '需要導入的數據調用模塊名稱已經存在 ({$existkeys})，請返回修改。',
	'jswizard_relatedtag_succeed' => '標籤聚合成功更新。',

	'creditwizard_resetusercredit_warning' => '<font color=\"FF0000\"><b>警告：</b></font>此操作將重置所有用戶的擴展積分 extcredits{$resetcredit} 為 {$initcredits[$resetcredit]}，您是否確認此操作？',
	'creditwizard_resetusercredit_ok' => '所有用戶的積分已重置',
	'creditwizard_edit_rate_invalid' => '{$group[grouptitle]} 評分上下限或 24 小時最大評分數設置有誤，請返回修改。',
	'creditwizard_edit_succeed' => '積分項目設置成功更新。',

	'filecheck_nofound_md5file' => '不存在校驗文件，無法進行此操作。',

	'dbcheck_permissions_invalid' => '您的服務器環境不允許執行數據庫校驗，無法進行此操作。',
	'dbcheck_checking' => '正在進行數據庫校驗，請稍候......',
	'dbcheck_nofound_md5file' => '不存在校驗文件，無法進行此操作。',
	'dbcheck_ok' => '您的數據庫完整無誤',
	'dbcheck_repair_completed' => '數據庫修復成功。',
	'dbcheck_repair_error' => '數據庫修復成功，但仍有 $errorcount 個數據字段修復失敗，請返回。<br /><br />$error',

	'faq_list_update' => '幫助列表更新',
	'faq_no_title' => '您沒有填寫幫助標題，請返回修改。',
	'faq_identifier_invalid' => '幫助標識重複，請返回修改。',
	'faq_keyword_toolong' => '幫助關鍵詞過長，請返回修改。',

	'ftp_password_short' => 'FTP 密碼不得少於 3 位，請返回修改。',
	'cachethread_dir_noexists' => '對不起，您所指定的目錄 $settingsnew[cachethreaddir] 不存在或者不可寫！請返回並嘗試通過 FTP 將其屬性改為 777。',

	'project_update_forum' => '論壇全局設置更新。',
	'project_import_succeed' => '設置方案成功導入',
	'project_no_title' => '沒有填寫方案名稱，請返回。',
	'project_no_usergroup' => '你選擇的用戶組不存在。',
	'project_no_item' => '沒有填寫要保存的項目，請返回。',
	'project_sava_succeed' => '成功保存設置方案。',
	'project_target_item_invalid' => '沒有指定目標項目，請返回。',
	'project_no_scheme' => '您選擇的設置方案不存在，請返回。',
	'project_scheme_succeed' => '目標設置方案更新。',
	'project_invalid' => '論壇方案參數非法，請返回。',


	'watermarkpreview_error' => '水印功能未啟用，無法預覽',
	'watermarkpreview_fontpath_error' => '文本水印 TrueType 字體文件不存在',
	'watermarkpreview_createerror' => '水印圖片無法生成或不符合生成水印的條件，請檢查設置',
	'thumbpreview_error' => '縮略圖功能未啟用，無法預覽',
	'thumbpreview_createerror' => '縮略圖片無法生成，請檢查設置',

	'ecommerce_invalidcredit' => '信用度必須大於 0 才能進行評級！請返回修改。',
	'ecommerce_must_larger' => '信用等級 $rank 的信用度必須大於上一等級的信用度！請返回修改。',

	'tags_updated' => '主題標籤設置成功更新。',
	'tags_not_open' => '主題標籤(TAG)功能沒有開啟。',

	'threadtype_infotypes_succeed' => '分類選項成功更新',
	'threadtype_infotypes_optionvariable_invalid' => '分類選項變量名重複，請返回修改',
	'threadtype_infotypes_noexist' => '主題選項分類不存在',
	'threadtype_infotypes_option_succeed' => '分類擴展選項成功更新',
	'threadtype_infotypes_option_invalid' => '分類擴展選項名稱或者變量名為空，請返回修改。',
	'threadtype_infotypes_invalid' => '分類信息至少應該有一個選項，請返回修改。',
	'threadtype_infotypes_model_succeed' => '分類信息模型成功更新',

	// 自定義菜單相關
	'custommenu_edit_succeed' => '常用操作成功更新',
	'custommenu_history_delete_succeed' => '歷史操作記錄已清空',
	'custommenu_add_succeed' => '菜單 $lang[$title] 已成功添加到常用操作，即將返回上一頁，您可以<a href=\"$BASESCRIPT?action=misc&operation=custommenu\">點這裡編輯常用操作</a>',
	'custommenu_history_delete_confirm' => '本操作不可恢復，您確定要刪除歷史操作記錄嗎？',

	'search_result_noexists' => '對不起，沒有找到相關設置或管理操作！<br />輸入多個詞語搜索（不同字詞之間用一個空格隔開，不區分大小寫），可以獲得更精確的搜索結果。',
	'search_keyword_noexists' => '請輸入要搜索的關鍵詞！',

	'nav_add_succeed' => '導航欄成功更新。',

	'focus_update_succeed' => '站長推薦成功更新。',
	'focus_add_num_limit' => '對不起，最多只能添加 10 條站長推薦。',
	'focus_add_succeed' => '站長推薦添加成功。',
	'focus_topic_noexists' => '指定的站長推薦不存在。',
	'focus_topic_exists' => '添加的站長推薦已存在。',
	'focus_edit_succeed' => '站長推薦編輯成功。',
	'focus_conf_succeed' => '站長推薦設置成功。',

	'delete_position_succeed' => '刪除帖子索引成功。',
	'select_thread_empty' => '沒有選擇主題，請返回重新選擇。',
	'add_postposition_succeed' => '添加帖子索引成功。',
	'addpostposition_continue' => '正在添加帖子索引，切勿關閉瀏覽器！',
	'delete_position_gotu_add' => '已經刪除了帖子索引，正轉向重新創建帖子索引，切勿關閉瀏覽器！',

);

?>