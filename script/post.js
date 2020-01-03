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