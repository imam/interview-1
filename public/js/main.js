$(document).ready(function(){
    loadMore = $('#loadMore');
    items = $('#items');
    nextPage = 1;


    loadMore.on('click',function (e) {
        e.preventDefault();
        $.get('/homeapi/'+nextPage).done(function(e){
            nextPage++
            items.append(e);
            if(nextPage == 2){
                    loadMore.hide();
            }

        });
    })
});