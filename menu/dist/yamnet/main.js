$(document).ready(function() {
    $("#yamnet-dashboard-upload").change(function(){
        console.log("logg")
        readURL(this);
    });
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById("yamnet-dashboard-bg-preview").setAttribute("style","background-image:url('"+e.target.result+"') !important ;background-size: cover")
        }

        reader.readAsDataURL(input.files[0]);
    }
}


