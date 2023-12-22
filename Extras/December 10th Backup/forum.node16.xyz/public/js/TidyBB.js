$(document).ready(function() {
    //The syntex highlighting in <pre> tags.
    $('pre').each(function(i, e) {hljs.highlightBlock(e)});
    //The tags used in conversations.
    $('#receiver').tagsInput({
        defaultText: 'add user',
        'width':'100%',
        'height':'auto'
    });
});
$(function() {
    if( $('input[type="checkbox"]#gravatar').is(':checked') ) {
        $('.iko.avatar_uploader').css("display", 'none');
    }
    $('input[type="checkbox"]#gravatar').click(function() {
        $('.iko.avatar_uploader').slideToggle();
    });
});
var formsave1=new autosaveform({
    formid: 'TIDY_form',
    pause: 1000 //<--no comma following last option!
});

/*
 * Forum functions.
 */

//Quote Post.
function quote(id) {
    //$('#editor').execCommand('quote',{author: '',seltext:'Post ID: ' + id + ''});
    var textarea = document.getElementById('editor');
    sceditor.instance(textarea).insertText('[quote]' + id + '[/quote]');
}

//Inserting Smilies.
function add_emoji(text) {
    console.log(text);
    var ori_val = $('#editor').val();
    $('#editor').val(ori_val + text);
}
