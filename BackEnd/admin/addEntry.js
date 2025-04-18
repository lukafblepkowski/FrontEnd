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
        hour12: false,
        timeZone: 'UTC',
    }).format(date);

    return (`${formattedDate.replace(day, `${ordinal(day)}`)} UTC`).replace(" at "," ");
}

function clear() {
    confirmed = confirm("Are you sure you want to clear the post and start again ?");
    if(confirmed) { 
        document.getElementById("title").value = "";
        document.getElementById("content").value = "";
    }

    if(previewing) preview();
}

function preview() {
    title = document.getElementById("title").value.trim();
    content = document.getElementById("content").value.trim();

    if(!previewing) {
        if(!title || !content) {
            alert("Blank title/content not allowed.");
            
            if(!title) {
                document.getElementById("title").classList.add("blank-form");
            } else {
                document.getElementById("title").classList.remove("blank-form");
            }
        
            if(!content) {
                document.getElementById("content").classList.add("blank-form");
            } else {
                document.getElementById("content").classList.remove("blank-form");
            }

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

        
        if(!title) {
            document.getElementById("title").classList.add("blank-form");
        } else {
            document.getElementById("title").classList.remove("blank-form");
        }
    
        if(!content) {
            document.getElementById("content").classList.add("blank-form");
        } else {
            document.getElementById("content").classList.remove("blank-form");
        }
    } else {
        p1.classList.add("hidden");
        p2.classList.remove("hidden");
    }
}

document.addEventListener("DOMContentLoaded", function(){
    previewButton = document.getElementById("preview");
    previewButton.addEventListener("click", preview);

    clearButton = document.getElementById("clear");
    clearButton.addEventListener("click", clear);

    form = document.querySelector("form");

    form.addEventListener("submit", function(e) {
        title = document.getElementById("title").value.trim();
        content = document.getElementById("content").value.trim();
        //Trimmed so spaces aren't considered

        if(!title) {
            document.getElementById("title").classList.add("blank-form");
        } else {
            document.getElementById("title").classList.remove("blank-form");
        }

        if(!content) {
            document.getElementById("content").classList.add("blank-form");
        } else {
            document.getElementById("content").classList.remove("blank-form");
        }

        //What a strange language javascript is
        if(!title || !content) {
            e.preventDefault();
            alert("Blank title/content not allowed.");
            return;
        }

        confirmed = confirm("Are you sure you want to post this ? There's no going back !");
        if(!confirmed) {
            if(previewing) preview();
            e.preventDefault();
        }
    })
})
