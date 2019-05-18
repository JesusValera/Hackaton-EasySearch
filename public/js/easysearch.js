var easysearch = {
    selectTrain: function(idtrain) {
        //Remove selected class to all train options
        $("[id^='o_idtrain_']").removeClass('selected');

        //Select the option clicked
        $('#o_idtrain_' + idtrain).addClass('selected');
    }
}