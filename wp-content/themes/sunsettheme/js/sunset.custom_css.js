jQuery(document).ready( function($){
    var updateCSS = function(){ $("#css_form").val(editor.getSession().getValue() ); };
    $("#save-css-form").submit( updateCSS );
});

var editor = ace.edit("customCss");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/css");