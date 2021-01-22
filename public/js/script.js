$(document).ready(function(){
    $(".faq__header").click(function(){
        $(this).find(i).toggleClass(".fa-sort-desc");
        $(this).find(i).toggleClass(".fa-sort-asc");
        $(this).parent().find("footer").slideToggle(1000);
    });
});