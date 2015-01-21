$(document).ready(function() {
    var prewidth = 12;
    var windowHeight = $(window).height();
    var menuBarHeight = $(".navbar-fixed-top").height() + $(".binMenuBar").height() + (($("section").outerHeight(true) - $("section").outerHeight()) / 2);
    var codeContainerHeight = windowHeight - menuBarHeight;
    $(".binCodeContainer").height(codeContainerHeight + "px");
    $(".binToggle").click(function () {
        $(this).toggleClass("active");
        var activeDiv = $(this).html();
        activeDiv = activeDiv.slice(12, -4);
        $("#bin" + activeDiv + "Container").toggle();

        var showingDivs = $(".binCodeContainer").filter(function () {
            return ($(this).css("display") != "none");
        }).length;
        var width = 12 / showingDivs;
        $("#binHTMLContainer").removeClass("col-md-" + prewidth);
        $("#binCSSContainer").removeClass("col-md-" + prewidth);
        $("#binResultContainer").removeClass("col-md-" + prewidth);
        $("#binHTMLContainer").addClass("col-md-" + width);
        $("#binCSSContainer").addClass("col-md-" + width);
        $("#binResultContainer").addClass("col-md-" + width);
        prewidth = width;
    });
    $("#binRunButton").click(function () {
        $("iframe").contents().find("html").html('<style>' + $("#binCssCode").val() + '</style>' + $("#binHtmlCode").val());
    });
});