"use strict";

$(document).ready(() => {
    const addButton = $("#add");
    const closeButton = $("#closeButton");
    const addModal = $("#addModal");
    const editCloseButton = $("editCloseButton");


    addButton.click(() => {
        addModal.css("display", "block");
    });


    closeButton.click( event => {
        event.preventDefault();
        addModal.css("display", "none");
    });

    editCloseButton.click( event => {
        event.preventDefault();
        addModal.css("display", "none");
    });
});