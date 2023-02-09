/*
* ---------------------------------------------------------------- 
*  Veented TinyMCE Quick Shortcodes Button
* ----------------------------------------------------------------  
*/

(function() {
	// Load plugin specific language pack

	tinymce.create('tinymce.plugins.insigniatinymce', {


		init : function(ed, url) {
			
			insignia_url = url;
			
			ed.addButton('insignia_shortcodes_button', {
				type: 'splitbutton',
				title : 'Add Custom Shortcode',
				tooltip: 'Quick Shortcodes',
				cmd : 'mcepshortcodes',
				onclick: function() {
	                ed.insertContent('Main button');
	            },
	            menu: [
                {
                    text: 'Dropcaps',
                    menu: [
                    {
                        text: 'Dropcap',
                        onclick: function(){
                            ed.insertContent('[dropcap]D[/dropcap]');
                        }
                    },
                    {
                        text: 'Dropcap Circle',
                        onclick: function(){
                            ed.insertContent('[dropcap style="circle"]D[/dropcap]');
                        }
                    },
                    {
                        text: 'Dropcap Circle Primary color',
                        onclick: function(){
                            ed.insertContent('[dropcap style="circle" color="pc-bg"]D[/dropcap]');
                        }
                    },
                    {
                        text: 'Dropcap Square',
                        onclick: function(){
                            ed.insertContent('[dropcap style="square"]D[/dropcap]');
                        }
                    },
                    {
                        text: 'Dropcap Square Primary color',
                        onclick: function(){
                            ed.insertContent('[dropcap style="square" color="pc-bg"]D[/dropcap]');
                        }
                    },
                    ]
                },
            	{
            	    text: 'Highlight',
            	    menu: [
            	    {
            	        text: 'Theme Color',
            	        onclick: function(){
            	            ed.insertContent('[highlight]Highlighted text[/highlight]');
            	        }
            	    },
            	    {
            	        text: 'Custom Color',
            	        onclick: function(){
            	            ed.insertContent('[highlight bgcolor="#363636" color="#fff"]Highlighted text[/highlight]');
            	        }
            	    }
            	    ]
            	},                                                              
	            ],
				image : insignia_url + '/insignia_button.png'
			});
			
			ed.addMenuItem('insertValueOfMyNewDropdown', {
			        icon: 'date',
			        text: 'Do something with this new dropdown',

			        context: 'insert'
			    });
			
		},

		getInfo : function() {
			return {
				longname : 'insignia_shortcodes_button',
				author : 'Insignia Technolabs',
				authorurl : 'https://themeforest.net/user/insignia_technolabs',
				infourl : 'http://www.tinymce.com/',
				version : "2.0"
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('insignia_shortcodes_button', tinymce.plugins.insigniatinymce);
})();