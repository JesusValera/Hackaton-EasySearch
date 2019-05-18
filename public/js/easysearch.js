var easysearch = {
    selectTrain: function(idtrain, idsit) {
        //Remove selected class to all train options
        $("[id^='o_idtrain_']").removeClass('selected');

        //Select the option clicked
        $('#o_idtrain_' + idtrain).addClass('selected');
        $('#o_idtrain_' + idtrain + '_sit_' + idsit).addClass('selected');
    }
}