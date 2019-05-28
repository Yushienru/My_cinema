$(document).ready(function() 
{
    console.log("This is Sparta !!!")

$("#filter_distrib a").click(function(e) 
{
    e.preventDefault();
    var sel = $(this).text();
    console.log(sel);

    window.location.href = "dropdown_distrib.php?distrib=" + sel;
})
});