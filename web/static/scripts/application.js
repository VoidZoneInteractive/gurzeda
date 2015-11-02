/**
 * Created by grzegorzgurzeda on 14.10.15.
 */
$( document ).ready(function()
{
    $('li').click(function(e) {
        e.preventDefault();
        //$('#content').css('width', '50%');
        var tl = new TimelineLite();
        tl.to('#content', 0.7, {width: '50%', ease: Power3.easeIn});
        tl.to('#background', 0.7, {width: '50%', ease: Power3.easeIn});
        tl.play();
        //$('#background').css('width', '50%');
    });
});