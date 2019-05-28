$(document).ready(function() 
{
    console.log("This is Sparta !!!")

$("#filter_genre a").click(function(e) 
{
    e.preventDefault();
    var sel = $(this).text();
    console.log(sel);

    window.location.href = "dropdown_genre.php?genre=" + sel;
})
});