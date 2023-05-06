function wait(onEnd, onStep, seconds){
    const handle = setInterval(()=>{
        if(--seconds == 0){
            onEnd();
            clearInterval(handle);
        }else{
            onStep(seconds);
        }
    }, 1000);
    onStep(seconds);
    return handle;
}

function setSeconds(seconds){
    const text = seconds == 1? "1 second" : `${seconds} seconds`;
    document.querySelector('#seconds').innerHTML = text;
}