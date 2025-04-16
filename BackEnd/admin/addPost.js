function clear() {
    document.getElementById("title").value = "";
    document.getElementById("content").value = "";
}

document.addEventListener("DOMContentLoaded", function(){
    clearButton = document.getElementById("clear");
    clearButton.addEventListener("click", clear);

    form = document.querySelector("form");

    form.addEventListener("submit", function(e) {
        title = document.getElementById("title").value.trim();
        content = document.getElementById("content").value.trim();
        //Trimmed so spaces aren't considered

        //What a strange language javascript is
        if(!title || !content) {
            e.preventDefault();
            alert("Blank title/content not allowed.")
        }
    })
})
