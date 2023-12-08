console.log("first")

$(".startbtn, .submitbtn").on("click",function(e){
    $("#q0").fadeOut(1000);

    $("form").fadeIn(3600);
    $("#q1").fadeIn(3600);
    $("#q1").css("display","flex")

})
$(".nextbtn").on("click",function(e){
    e.preventDefault();
    e.stopPropagation();
    let id = parseInt(e.target.parentElement.id.replace(/\D/g,""),10)
    console.log(id,`#q${id+1}`);
    $(`#q${id}`).fadeOut(500);

    $(`#q${id+1}`).fadeIn(900);
    $(`#q${id+1}`).css("display","flex")
})




$(".range").on("input",function(e){
    let value = e.target.value
    let color = `
        linear-gradient(
            40deg,
            hsl(${value*180/100},80%,50%),
            hsl(${260-value*235/100},${60+30*value/100}%,50%)
        )`
    $(e.target).parent().css("background",color);
    console.log($(e.target).parent())
})


