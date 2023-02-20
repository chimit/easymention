;(function($, _, undefined){
	"use strict";

	ips.controller.register('plugins.easyMention', {

		initialize: function () {
			this.on( 'click', '[data-action="mentionUser"]', this.mention );
		},

		mention: function (e) {
			e.preventDefault();

			var editor = ips.ui.editor.getObj($('[data-role="replyArea"] [data-ipsEditor]'));
			var button = $( e.currentTarget );
			var html;

			if (button.attr('data-member-id')) {
				html = $('<a/>').attr({
						'href': button.attr('data-profile'),
						'data-ipshover': '',
						'data-ipshover-target': button.attr('data-hovercard'),
						'data-mentionid': button.attr('data-member-id'),
						'contenteditable': 'false'
					})
					.html(
						'@' + button.attr('data-name')
					)[0].outerHTML + '&nbsp;'
			} else {
				html = button.attr('data-name') + ',&nbsp;';
			}

			editor.unminimize(function () {
				editor.insertHtml(html);
			});
		}

	});
}(jQuery, _));
