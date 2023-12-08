console.log("first")
let range_main = document.querySelector(".range-part1")
let range_width = parseInt(getComputedStyle(range_main).width)
let range_ctr = document.querySelector(".range-part2")
let range_ctr_width = parseInt(getComputedStyle(range_ctr).width)
let min_left_end = parseInt(range_ctr.parentElement.offsetLeft)
let max_left_end = min_left_end + range_width - range_ctr_width

range_ctr.addEventListener("mousedown",{
    target_el:range_ctr, min:min_left_end, 
    max:max_left_end, ctr_width:range_ctr_width,
    handleEvent:dragItemX
})
range_ctr.addEventListener("drag",{
    target_el:range_ctr, min:min_left_end, 
    max:max_left_end, ctr_width:range_ctr_width,
    handleEvent:dragItemX
})
range_ctr.addEventListener("touch",{
    target_el:range_ctr, min:min_left_end, 
    max:max_left_end, ctr_width:range_ctr_width,
    handleEvent:dragItemX
})
range_ctr.addEventListener("touchmove",{
    target_el:range_ctr, min:min_left_end, 
    max:max_left_end, ctr_width:range_ctr_width,
    handleEvent:dragItemX
})

function dragItemX(e){
    let current_pos = parseInt(e.clientX)
    let relative_pos = current_pos -this.min -this.ctr_width*0.5
    let value_set = 100*(relative_pos)/(this.max-this.min)
    if(value_set>=0 && value_set<=100-20){
        this.target_el.style.left = value_set +"%"

        this.target_el.parentElement.dataset.value = value_set
    }
}

$("#range_test").on("input",function(e){
    let element = e.target
    let value = element.value 
    console.log(value)
    let target = element.parentElement
    console.log(target,value)
    changeBgColor(target,value)
})

function changeBgColor(element="body",value = 50){
    $(element).css("background-color",`rgb(${value},${255-value},0)`)
    console.log(`rgb($(value),$(255-value),0)`)
}