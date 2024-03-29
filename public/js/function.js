function rotatingText(val){
    const valSpan = $('span.content-rotating-text').text();
    for (let index = 0; index < val.length; index++) {
        const element = val[index];
        if(element == valSpan){
            cont = index+1;
            if (val[cont]) {
                $('span.content-rotating-text').text(val[cont]);
                break;
            }else{
                $('span.content-rotating-text').text(val[0]);
                break;
            }
        }
    }
}
$(document).ready(function() {

    const val = $('span.content-rotating-text').text();
    var arrayVal = val.split(',');
    $('span.content-rotating-text').text(arrayVal[0]);
    setInterval(()=>{
        rotatingText(arrayVal)
    }, 3000);
    
    var hide = 4;
    var show = 1;

    var hidep,showp;

    $("a#next").click(function(event) {
        event.preventDefault();
        if ($("#post"+hide).is(':hidden') && hide<=7) {
            $("#post"+show).hide("fast");
            $("#post"+hide).show("fast");
            hidep=hide;
            showp=show;
            if (hide<=6) {
                hide+=1;
                show+=1;
                console.log(hide+' '+show);
            }            
        }
    });

    $("a#previous").click(function(event) {
        event.preventDefault();
        if ($("#post"+showp).is(':hidden') && hidep<=7) {
            $("#post"+hidep).hide("fast");
            $("#post"+showp).show("fast");
            hide=hidep;
            show=showp;
            hidep-=1;
            showp-=1;
            console.log(hidep+' '+showp);
        }
    });

    
    $("a#show-menu").click(function(event) {
        event.preventDefault();
        if ($("header.desktop-header.close.show-menu-desktop").length) {
            $("header.desktop-header").removeClass("show-menu-desktop");
            $("header.mobile-header").removeClass("show-menu-mobile");
            $("main").removeClass("show-main");
        }else if($("header.desktop-header.close").length){
            $("header.desktop-header").addClass("show-menu-desktop");
            $("header.mobile-header").addClass("show-menu-mobile");
            $("main").addClass("show-main");
        }
    });
});

