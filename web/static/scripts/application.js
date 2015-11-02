/**
 * Created by grzegorzgurzeda on 14.10.15.
 */
$( document ).ready(function()
{
    $('li').click(function(e) {
        e.preventDefault();
        $('#content').css('width', '50%');
        $('#background').css('width', '50%');
    });
});