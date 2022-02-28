const body = document.querySelector('body')
body.addEventListener('click', (event) => {
    const modalController = document.querySelector('.container-modal')
        if(event.target.hasAttribute('close')){
            modalController.style.display = 'none'
        } else if(event.target.hasAttribute('publisher') == true){
            modalController.style.display = 'flex'
        } else if (event.target.hasAttribute('Env')== true){
            setTimeout(() => {
                modalController.style.display = 'none'
            }, 1000)
        }
})

