<?php
echo "Hello World!";

// Display an external page using an iframe
var src = "https://webchat.botframework.com/embed/NMLuisTextQuery-bot?s=wYvQrbSkmWQ.wKg_HdWwrujUThZge5b3mcyHVL0BA57C6iUMlZ8Ptro";
$.modal('<iframe src="' + src + '" height="450" width="830" style="border:0">', {
    closeHTML:"",
    containerCss:{
        backgroundColor:"#fff",
        borderColor:"#fff",
        height:450,
        padding:0,
        width:830
    },
    overlayClose:true
});
