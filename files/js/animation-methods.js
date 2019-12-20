(function()
{
    window.animationMethods =
    {
        setHint: function(thisItem, showStatus)
        {
            thisItem.hover(function(e)
            {
                let thisItem = $(this);

                let hintElement = document.createElement('div');
                hintElement.innerText = thisItem.attr('data-title');
                hintElement.classList.add('hint');

                thisItem.append(hintElement);

                setTimeout(function()
                {
                    hintElement.classList.add('hint-open');
                }, 10);
            },
            function()
            {
                let hintElement = thisItem.find('.hint');
                        
                hintElement.removeClass('hint-open');
                hintElement.addClass('hint-close');
            });

            thisItem.on('transitionend', function()
            {
                var hintElement = $(this).find('.hint');

                if(hintElement.hasClass('hint-close'))
                {
                    hintElement.remove();
                }
            });
        }
    };
})();