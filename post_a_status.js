document.addEventListener("DOMContentLoaded", function(event) {
        var linktoclick = document.getElementById("1");
        var formtodisplay = document.getElementById("2");
        linktoclick.addEventListener("click", function() {
                if (formtodisplay.style.display == "") {
                        formtodisplay.style.display = "flex";
                }
                else {
                        formtodisplay.style.display = "";
                }
        })

        for (var i = 2; i <= 6; i++) {
                document.getElementById(i).addEventListener("click", function() {
                        if (formtodisplay.style.display == "") {
                                formtodisplay.style.display = "flex";
                        }
                        else {
                                formtodisplay.style.display = "";
                        }
                });
        }
});
