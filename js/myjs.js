jQuery(document).ready(function($) {
new WOW().init();
    // $ Works! You can test it with next line if you like
    // console.log($);
    console.log("Hello");
    $(".newshover").hover(function() {
        $(this).toggleClass("appear-background-work");
        $(this).find(".news-title").toggleClass("appear-about");
    });



    $('#toggle-button').click(function() {
        $(".box").slideToggle();
        return false;
    });
    $(".arrow").on("click", function(e) {

        e.preventDefault();

        $("body, html").animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 600);

    });




    var list = $(".photo_album_cover");
    var numToShow = 3;
    var button = $("#loadMore");
    var numInList = list.length;
    list.hide();
    if (numInList > 7) {
        button.show();
    }
    list.slice(0, 7).show();

    button.click(function() {
        var showing = list.filter(':visible').length;
        list.slice(showing - 1, showing + numToShow).fadeIn();
        var nowShowing = list.filter(':visible').length;
        if (nowShowing >= numInList) {
            button.hide();
        }
        $('html,body').animate({
            scrollTop: $("#loadMore").offset().top
        }, 1500);
    });


    var vHeight = $(window).height(),
        vWidth = $(window).width(),
        cover = $('.about-div'),
        height = $('.entry-featured');



 

    var album = $(".album-cover");
    
    var albumToShow = 4;
    var button1 = $(".chevron-l");
    var button2 = $(".chevron-r");

    var albumInList = album.length;
console.log(albumInList);


    album.hide();

if (albumInList > 4) { 
    button2.fadeIn();
    album.slice(0, albumToShow).show();

    
    button2.click(function() {
        button1.css("opacity","1");
        var showing_cover1 = album.filter(':visible');
        var showing1 = album.filter(':visible').length;


        var molo = showing_cover1.eq(0);
        var nolo = showing_cover1.eq(3);
        var index11 = album.index(molo);
        var index21 = album.index(nolo);


        album.eq(index11).css("display", "none");
        album.eq(index21 + 1).css("display", "initial");

        if (album.last().is(':visible')) {

            button2.hide();

        }


        

    });

    button1.css("opacity","0");
    button1.click(function() {

        button2.fadeIn();
        var showing_cover2 = album.filter(':visible');
        var showing2 = album.filter(':visible').length;

        var kolo = showing_cover2.eq(0);
        var solo = showing_cover2.eq(3);
        var index1 = album.index(kolo);
        var index2 = album.index(solo);


        album.eq(index2).css("display", "none");
        album.eq(index1 - 1).css("display", "initial");

        if (album.first().is(':visible')) {
             button1.css("opacity","0");
        }

    });
    var player = $(".audio-player");
    var cover_album = $(".album_cover");


    var count_album = cover_album.length;
    var count2 = player.length;

    player.hide();
    cover_album.first().toggleClass("active");
    player.first().fadeIn();


    cover_album.click(function() {

        var index15 = cover_album.index($(this));

cover_album.eq(index15).addClass("active");
        cover_album.not($(this)).removeClass("active");
        
        player.eq(index15).addClass("active");
        player.not(player.eq(index15)).fadeOut("fast");
        player.eq(index15).fadeIn("slow");
    });




} else{
    album.show();
    $(".large-10.albums").css( "width", "100%" );
    button2.fadeOut();
    button1.fadeOut();
var player = $(".audio-player");
    var cover_album = $(".album_cover");


    var count_album = cover_album.length;
    var count2 = player.length;

    player.hide();
    cover_album.first().toggleClass("active");
    player.first().fadeIn();


    cover_album.click(function() {

        var index15 = cover_album.index($(this));

cover_album.eq(index15).addClass("active");
        cover_album.not($(this)).removeClass("active");
        
        player.eq(index15).addClass("active");
        player.not(player.eq(index15)).fadeOut("fast");
        player.eq(index15).fadeIn("slow");
    });
};

});


// jQuery(document).ready(function($) {
//     var isMobile = window.matchMedia("(max-width: 640px)");
// if (isMobile.matches) {

    
//   var smallalbum = $(".album-cover");
    
//     var albumToShowsmall = 3;
//     var button11 = $(".chevron-l");
//     var button22 = $(".chevron-r");

//     var albumInListt = smallalbum.length;



//     smallalbum.hide();

//     button22.fadeIn();
//     smallalbum.slice(0, 3).show();
    
//     button22.click(function() {
//         button11.css("opacity","1");
//         var showing_cover11 = smallalbum.filter(':visible');
//         var showing11 = smallalbum.filter(':visible').length;


//         var first_visible = showing_cover11.eq(0);
//         var last_visible = showing_cover11.eq(2);
//         var index111 = smallalbum.index(first_visible);
//         var index211 = smallalbum.index(last_visible);


//         smallalbum.eq(index111).css("display", "none");
//         smallalbum.eq(index211 + 1).css("display", "initial");

//         if (smallalbum.last().is(':visible')) {

//             button22.hide();

//         }


        

//     });

//     button11.css("opacity","0");
//     button11.click(function() {

//         button22.fadeIn();
//         var showing_cover22 = smallalbum.filter(':visible');
//         var showing22 = smallalbum.filter(':visible').length;

//         var kolo2 = showing_cover22.eq(0);
//         var solo2 = showing_cover22.eq(2);
//         var index121 = smallalbum.index(kolo2);
//         var index321 = smallalbum.index(solo2);
        



//         smallalbum.eq(index321 + 1).css("display", "none");
//         smallalbum.eq(index121 + 1).css("display", "initial");

//         if (smallalbum.first().is(':visible')) {
//              button11.css("opacity","0");
//         }

//     });
//     var playersmall = $(".audio-player");
//     var cover_albumsmall = $(".album_cover");


//     var count_albumsmall = cover_albumsmall.length;
//     var count22 = playersmall.length;

//     playersmall.hide();
//     cover_albumsmall.first().toggleClass("active");
//     playersmall.first().fadeIn();


//     cover_albumsmall.click(function() {

//         var index15small = cover_albumsmall.index($(this));

// cover_albumsmall.eq(index15small).addClass("active");
//         cover_albumsmall.not($(this)).removeClass("active");
        
//         playersmall.eq(index15small).addClass("active");
//         playersmall.not(playersmall.eq(index15small)).fadeOut("fast");
//         playersmall.eq(index15small).fadeIn("slow");
//     });


  
// }


  


//     });
