
        // seleciona todos os cabeçalhos h1, h2, h3, h4, h5 e h6 na página e os armazena na variável 'headers'
const headers = document.querySelectorAll('h1, h2, h3, h4, h5, h6');

// função que adiciona a classe 'decrease' a todos os cabeçalhos
function addDecreaseClass() {
    // para cada cabeçalho na lista 'headers', adiciona a classe 'decrease'
    headers.forEach(header => header.classList.add('decrease'));
}

// função que remove a classe 'decrease' de todos os cabeçalhos
function removeDecreaseClass() {
    // para cada cabeçalho na lista 'headers', remove a classe 'decrease'
    headers.forEach(header => header.classList.remove('decrease'));
}

// função que remove a classe 'higher' de todos os cabeçalhos
function removeHigherClass() {
    // para cada cabeçalho na lista 'headers', remove a classe 'higher'
    headers.forEach(header => header.classList.remove('higher'));
}

// adiciona um evento de mouseover a cada cabeçalho na lista 'headers'
headers.forEach(header => {
    // quando o mouse passa sobre o cabeçalho, executa esta função
    header.addEventListener('mouseover', () => {
        // chama a função que adiciona a classe 'decrease' a todos os cabeçalhos
        addDecreaseClass();
        // remove a classe 'decrease' do cabeçalho que está sendo hoverado (passando o mouse)
        header.classList.remove('decrease');
        // adiciona a classe 'higher' ao cabeçalho que está sendo hoverado
        header.classList.add('higher');
    });

    // adiciona um evento de mouseout a cada cabeçalho na lista 'headers'
    header.addEventListener('mouseout', () => {
        // chama a função que remove a classe 'decrease' de todos os cabeçalhos
        removeDecreaseClass();
        // chama a função que remove a classe 'higher' de todos os cabeçalhos
        removeHigherClass();
    });
});

