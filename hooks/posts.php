//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook4 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'post' => 
  array (
    0 => 
    array (
      'selector' => 'div[data-controller=\'core.front.core.comment\'].ipsComment_content.ipsType_medium > div.cPost_contentWrap > div.ipsItemControls > ul.ipsComment_controls.ipsClearfix.ipsItemControls_left[data-role=\'commentControls\']',
      'type' => 'add_inside_start',
      'content' => '<li data-controller="plugins.easyMention">
    <button class="ipsButton ipsButton_light ipsButton_verySmall ipsButton_narrow cMultiQuote" data-action="mentionUser" data-name="{$comment->author_name}" data-member-id="{$comment->author_id}" data-profile="{$comment->author()->url()}" data-ipstooltip style="display: inline-block;" _title="{lang=\'mentionUser\'}">
        <i class="fa fa-at"></i>
    </button>
</li>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}
