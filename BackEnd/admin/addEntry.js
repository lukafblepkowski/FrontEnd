previewing = false;

function ordinal(n) {
    if(n >= 11 && n <= 13) {
        return n+'th';
    }
    switch(n % 10) {
        case 1: return n+'st';
        case 2: return n+'nd';
        case 3: return n+'rd';
        default: return n+'th';
    }
}

function getNow() {
    date = new Date();
    day = date.getDate();
    
    formattedDate = new Intl.DateTimeFormat('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        hour12: false, // 24-hour format
        timeZone: 'UTC', // Use UTC time zone
    }).format(date);

    return (`${formattedDate.replace(day, `${ordinal(day)}`)} UTC`).replace(" at "," ");
}

function clear() {
    confirmed = confirm("Are you sure you want to clear the post and start again ?");
    if(confirmed) { 
        document.getElementById("title").value = "";
        document.getElementById("content").value = "";
    }

    previewing = false;
}

function preview() {
    title = document.getElementById("title").value.trim();
    content = document.getElementById("content").value.trim();

    if(!previewing) {
        if(!title || !content) {
            alert("Blank title/content not allowed.");
            return;
        }
    }

    previewing = !previewing;

    p1 = document.getElementById("preview1");
    p2 = document.getElementById("preview2");

    if(previewing) {
        p1.classList.remove("hidden");
        p2.classList.add("hidden");    

        document.getElementsByClassName("blogpost-title")[0].firstChild.nodeValue = title;
        document.getElementsByClassName("blogpost-date")[0].firstChild.nodeValue = "Written "+getNow();
        document.getElementsByClassName("blogpost-content")[0].firstChild.nodeValue = content;
    } else {
        p1.classList.add("hidden");
        p2.classList.remove("hidden");
    }
}

document.addEventListener("DOMContentLoaded", function(){
    clearButton = document.getElementById("clear");
    clearButton.addEventListener("click", clear);

    previewButton = document.getElementById("preview");
    previewButton.addEventListener("click", preview);

    form = document.querySelector("form");

    form.addEventListener("submit", function(e) {
        title = document.getElementById("title").value.trim();
        content = document.getElementById("content").value.trim();
        //Trimmed so spaces aren't considered

        //What a strange language javascript is
        if(!title || !content) {
            e.preventDefault();
            alert("Blank title/content not allowed.");
            return;
        }

        confirmed = confirm("Are you sure you want to post this ? There's no going back !");
        if(!confirmed) {
            e.preventDefault();
            previewing = false;
        }
    })
})
