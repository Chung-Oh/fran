function activeMosaic() {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var imgJobs = document.querySelectorAll(".job-img");
    var modalImg = document.getElementById("imgRecepient");
    var captionText = document.getElementById("caption");

    imgJobs.forEach(img => {
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    });

    // When the user clicks on <span> (x), close the modal
    modal.onclick = function () {
        modal.style.display = "none";
    }
}

function verifyPathMosaic() {
    var path = window.location.pathname;
    if (path == '/' || path == '/jobs') {
        activeMosaic();
    }
}

verifyPathMosaic();