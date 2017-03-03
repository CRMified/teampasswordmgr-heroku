<?php
$lang = array (

	// controllers/mypwd
	'c_mypwd_invalid_pek_title'		=> 'My Passwords: invalid Personal Encryption Key',
	'c_mypwd_invalid_pek_desc'		=> 'Your Personal Encryption Key is not valid. Please contact support.',

	'c_mypwd'						=> 'My Password',

	'c_mypwd_not_found_title'		=> 'Password not found',
	'c_mypwd_not_found_desc'		=> 'This password does not exist or you cannot access it.',

	'c_mypwd_pwd_exists'			=> 'The password already exists.',
	'c_mypwd_new'					=> 'New Password',
	'c_mypwd_edit'					=> 'Edit My Password',
	'c_mypwd_edit_error'			=> 'There has been an error saving the password',
	'c_mypwd_edit_csrf_error'		=> 'There has been a CSRF error saving the password, please try again.',

	'c_mypwd_return'				=> 'Return to my password',

	'c_mypwd_del'					=> 'Delete My Password',
	'c_mypwd_del_ok'				=> 'The password has been deleted.',
	'c_mypwd_del_error'				=> 'There has been an error deleting the password.',
	'c_mypwd_del_csrf_error'		=> 'There has been a CSRF error deleting the password, please try again.',

	'c_mypwd_goto_pwd'				=> 'Go to the password',

	'c_mypwd_copy_archived'			=> 'the destination [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_mypwd_copy_exists'			=> 'the password already exists in the destination [PRJ].',
	'c_mypwd_copy_cannot'			=> 'you cannot create passwords in the destination [PRJ].',
	'c_mypwd_copy_prj_not_exists'	=> 'the destination [PRJ] does not exist or you cannot access it.',
	'c_mypwd_copy'					=> 'Copy My Password',
	'c_mypwd_copy_cannot_reason'	=> 'This password cannot be copied for the following reason',
	'c_mypwd_copy_error'		 	=> 'There has been an error copying the password',
	'c_mypwd_copy_ro'			 	=> 'You cannot copy/create passwords, you have a read only role.',
	'c_mypwd_copy_csrf_error' 		=> 'The password has NOT been copied (CSRF validation), please try again.',
	'c_mypwd_copy_ok_error'		 	=> 'The password has been copied, but there has been this error doing so',
	'c_mypwd_copy_pwd_prj_not_exist' => 'The password/[PRJ] does not exist or you cannot access it.',

	'c_mypwd_move'					=> 'Move My Password',
	'c_mypwd_move_cannot_reason'	=> 'This password cannot be moved for the following reason',
	'c_mypwd_move_error'		 	=> 'There has been an error moving the password',
	'c_mypwd_move_ro'			 	=> 'You cannot move/create passwords, you have a read only role.',
	'c_mypwd_move_csrf_error' 		=> 'The password has NOT been moved (CSRF validation), please try again.',
	'c_mypwd_move_ok_error'		 	=> 'The password has been moved, but there has been this error doing so',

	// views/mypwd
	'v_mypwd_my_account'			=> 'My Account',	// = v_users_my_account
 	'v_mypwd_my_settings'			=> 'My Settings',	// = v_users_my_settings
 	'v_mypwd_my_passwords'			=> 'My Passwords',	// = v_users_my_passwords

 	'v_mypwd_return_list'			=> 'Return to my passwords list',

 	'v_mypwd_edit_btn'				=> 'Edit',
 	'v_mypwd_copy_btn'				=> 'Copy',
 	'v_mypwd_move_btn'				=> 'Move',
 	'v_mypwd_del_btn'				=> 'Delete',
 	'v_mypwd_edit_title'			=> 'Edit password data',
 	'v_mypwd_copy_title'			=> 'copy password to a [PRJ]',
 	'v_mypwd_move_title'			=> 'move password to a [PRJ]',
 	'v_mypwd_del_title'				=> 'Delete password',

 	'v_mypwd_data'					=> 'Data',

 	'v_mypwd_no_data'				=> "This password doesn't have any data",
 	'v_mypwd_no_notes'				=> 'There are no notes for this password.',

 	'v_mypwd_created_on'			=> 'Created on',
 	'v_mypwd_updated_on'			=> 'Updated on',
 	'v_mypwd_by'					=> 'By',

 	'v_mypwd_ccall_copied'			=> 'Copied',
 	'v_mypwd_ccall_nothing'			=> 'Nothing to copy!',
 	'v_mypwd_ccall_error'			=> 'Error getting data to copy',
 	'v_mypwd_cc_copied'				=> 'Copied',
 	'v_mypwd_cc_nothing'			=> 'Nothing to copy!',
 	'v_mypwd_cc_error'				=> 'Error getting data to copy',
 	'v_mypwd_cc_not_supported'		=> 'This copy to clipboard method is not supported in this browser',
 	'v_mypwd_ccall'					=> 'Copy all the fields to clipboard',
 	'v_mypwd_cc'					=> 'Copy to clipboard',
 	'v_mypwd_ccnotes'				=> 'Copy notes to clipboard',
 	'v_mypwd_ccnotes_copied'		=> 'Copied',
 	'v_mypwd_ccnotes_nothing'		=> 'Nothing to copy!',
 	'v_mypwd_ccnotes_error'			=> 'Error getting data to copy',

 	'v_mypwd_sort_by_name'			=> 'Sort by Name',
 	'v_mypwd_list_auep'				=> 'Access / Username / Email / Password',
 	'v_mypwd_sort_by_updated'		=> 'Sort by Update Date',
 	'v_mypwd_updated'				=> 'Updated',
 	'v_mypwd_list_updated_ph'		=> 'Updated',

 	'v_mypwd_list_empty'			=> 'There are no passwords with this filter or search.',

 	'v_mypwd_sidebar_all_pwds'		=> 'All Passwords',
 	'v_mypwd_sidebar_search_res'	=> 'Search Results',
 	'v_mypwd_sidebar_filter_tag'	=> 'Filter by Tag',
 	'v_mypwd_sidebar_search_tags'	=> 'Search tags',

 	'v_mypwd_new_pwd'				=> 'New Password',
 	'v_mypwd_new_pwd_phone'			=> 'New',
 	'v_mypwd_search'				=> 'Search My Passwords',
 	'v_mypwd_search_phone'			=> 'Search',
 	'v_mypwd_adv_search_title'		=> 'Advanced search',
 	'v_mypwd_search_adv'			=> 'Search',
 	'v_mypwd_adv_help'				=> 'Advanced Search Help',
 	'v_mypwd_adv_search_any' 		=> 'Any Field',
 	'v_mypwd_adv_search_username_email' => 'Username or E-mail',
 	'v_mypwd_adv_search_tag'		=> 'Tag',

 	'v_mypwd_edit_info_saved_enc'	=> 'this information is saved encrypted',
 	'v_mypwd_edit_tags_instruct'	=> 'Use a comma (,) for new tags, "tab" for selecting from the list',
 	'v_mypwd_edit_access_examples'	=> 'Examples: http://site, ftp://ip-address, manual login',
 	'v_mypwd_edit_click_gen_pwd'	=> 'Click to generate password',
 	'v_mypwd_edit_del_gen_pwd' 		=> 'You need to delete the current password if you want to generate a new one!',
 	'v_mypwd_edit_pwd_generated'	=> 'Password generated!',
 	
 	'v_mypwd_del_confirm'			=> 'Delete this password?',
 	'v_mypwd_del_warning'			=> 'Warning: this action is permanent and cannot be un-done.',


);