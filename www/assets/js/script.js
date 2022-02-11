document.addEventListener("mouseover",(e)=>{
    console.log(e.target.classList)
    if (e.target.classList.contains("divImg")){
        e.target.style.cursor ="pointer"
    }
})

