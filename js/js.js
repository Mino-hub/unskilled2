$(window).on("load",function(){
    $("#outline__ul").children(".outline__ul-li-h2, .outline__ul-li-h3, .outline__ul-li-h4, .outline__ul-li-h5, .outline__ul-li-h6").on("click",function(){
        var h_index = $(this).index();
        var article_content_h = $("#content").children("h1,h2,h3,h4,h5,h6").eq(h_index).offset().top;
        $("html,body").animate({ scrollTop: article_content_h - 100 }, "2000");
    });

    $("#top").on("click",function(){
        $("html,body").animate({ scrollTop: 0}, 200);
    });
});
