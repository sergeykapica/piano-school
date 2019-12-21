(function()
{
    window.animationMethods={setHint:function(t,n){t.hover(function(t){let n=$(this),i=document.createElement("div");i.innerText=n.attr("data-title"),i.classList.add("hint"),n.append(i),setTimeout(function(){i.classList.add("hint-open")},10)},function(){let n=t.find(".hint");n.removeClass("hint-open"),n.addClass("hint-close")}),t.on("transitionend",function(){var t=$(this).find(".hint");t.hasClass("hint-close")&&t.remove()})}};
})();