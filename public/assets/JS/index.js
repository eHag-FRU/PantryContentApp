"use strict";

$(document).ready(() => {
    const addButton = $("#add");
    const closeButton = $("#closeButton");
    const addModal = $("#addModal");


    addButton.click(() => {
        addModal.css("display", "block");
    });


    closeButton.click(() => {
        
        addModal.css("display", "none");
    });
});