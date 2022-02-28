// Função responsavel de coletar os dados e realizar a publição

/* document.querySelector('#publicar').addEventListener('click', (event) => {
    event.preventDefault();
    // Coleta os dados e retorna um Objeto com os dados.
    const dataCollection = () => {
        const DDD = document.querySelector('.ipt-1').value
        const Whatsapp = document.querySelector('.ipt-2').value
        const Message = document.querySelector('.ipt-3').value
        const Tarefa = document.querySelector('.ipt-4').value
        const Recompensa = document.querySelector('.ipt-5').value

        return { DDD, Whatsapp, Message, Tarefa, Recompensa }
    }

    // Injeta os dados no HTML dinamico e o retorna.
    const injectHtml = ({DDD, Whatsapp, Message, Tarefa, Recompensa}) => {
        const Incerted = `
        <div id="container-item">
                <div class="ctn-itens">
                    <div>
                        Tarefa: 
                        <span class="text-pub">${Tarefa}</span>
                    </div>
                    <div>
                        Recompensa:
                        <span class="text-pub">${Recompensa}</span>
                    </div>
                </div>
                <div class="ctn-btn">
                    <a href="https://api.whatsapp.com/send?phone=${DDD}${Whatsapp}&text=${Message}">
                        <span>Tenho interesse</span>
                        <span class="material-icons-outlined">arrow_forward</span>
                    </a>
                </div>
        </div>
        `
        return Incerted
    }

    // Insere o HTML dinamico no FEED.
    const incertedBody = (dataCollection) => {
      const feed = document.querySelector('.container-feed')
      feed.innerHTML += injectHtml(dataCollection)
    }

    incertedBody(dataCollection())

}) */