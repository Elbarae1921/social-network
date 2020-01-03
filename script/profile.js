var navbar = document.querySelector(".navbar");
var container = document.querySelector(".container");
var results = document.getElementById("resultsContainer");
var userID;


$.get("handlers/userIdHandler.php", function(data){
    userID = data;
});

function updateLikes(button)
{
    $.post("handlers/likeHandler.php", {postId : button.id}, function(data){
        button.nextElementSibling.innerHTML = data;
    });
}
var likes = document.getElementsByClassName('like');
console.log(likes.length);
for(var i = 0; i < likes.length; i++)
{
    likes[i].addEventListener("click", function() {
        // this.nextElementSibling.innerHTML = Math.round(this.nextElementSibling.innerHTML) + 1;
        updateLikes(this);
    });
}

function searchHide(){
    document.querySelector("#searchContainer").style.display = "none";
    navbar.style.filter = "none";
    container.style.filter = "none";
    navbar.removeEventListener("click", searchHide);
    container.removeEventListener("click", searchHide);
}

document.querySelector("#searchButton").addEventListener("click", function() {
    
    document.querySelector("#searchContainer").style.display = "block";
    searchBox.focus();

    navbar.style.filter = "blur(5px)";
    container.style.filter = "blur(5px)";
    
    setTimeout(function() {navbar.addEventListener("click", searchHide);container.addEventListener("click", searchHide);}, 50);
    
});

searchBox.addEventListener("keyup", function(e){
    if(e.key != "Escape")
    {
        if(this.value != "")
        {
            $.post("handlers/profileSearchHandler.php", {val : this.value, id : userID}, function(data){
                results.innerHTML = data;
                console.log(data);
            });
        }
        else
        {
            results.innerHTML = "";
        }
    }
    else
    {
        searchHide();
    }
});