$(document).ready(function() 
{
    // console.log("This is Sparta !!!")

$("#submit_titre").click(function(e) 
{
    e.preventDefault();
    var sel = document.getElementById("query_titre").value;
    console.log(sel);

    window.location.href = "search_name.php?titre=" + sel;
})
});